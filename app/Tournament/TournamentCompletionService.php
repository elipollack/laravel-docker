<?php
namespace App\Tournament;

use App\Domain\Tournament as TournamentEntity;
use App\Domain\TournamentPayout;
use App\Domain\User;
use App\Domain\UserCredits;
use App\Mail\TournamentWin;
use App\Models\Config;
use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityManager;
use Illuminate\Mail\MailManager;

class TournamentCompletionService
{
    private EntityManager $entityManager;
    private MailManager $mail;

    public function __construct(EntityManager $entityManager, MailManager $mail)
    {
        $this->entityManager = $entityManager;
        $this->mail = $mail;
    }

    public function updateState(int $tournamentId): bool
    {
        $this->entityManager->beginTransaction();
        /** @var TournamentEntity $tournament */
        $tournament = $this->entityManager->find(TournamentEntity::class, $tournamentId, LockMode::PESSIMISTIC_WRITE);
        if ($tournament->isFinished() || !$tournament->isReadyForCompletion()) {
            $this->entityManager->commit();
            return false;
        }

        $tournament->complete();
        /** @var TournamentPayout[] $payouts */
        $players = $tournament->getPlayers()->toArray();
        if (count($players) > 0) {

            //add ranks to all player
            $rankedPlayers = $tournament->computePlayerRanks();
            foreach ($rankedPlayers as $rankedPlayer) {
                $this->entityManager->persist($rankedPlayer);
            }

            $payouts = $tournament->getPrizeMoney()->allocate(...$players);
            foreach ($payouts as $payout) {
                $this->entityManager->persist($payout);
                
                $userCredits = $this->createUserCredits($payout->getUser(),  $payout->getPayout());
                $this->entityManager->persist($userCredits);

                if (!$payout->isBot()) {
                    $this->mail->to($payout->getUser()->getEmail())->send(
                        new TournamentWin(
                            $payout->getUser()->getFullname(),
                            $payout->getTournament()->getName(),
                            $payout->getRank(),
                            $payout->getPayout()
                        )
                    );
                }
            }
        }

        $this->entityManager->flush();
        $this->entityManager->commit();

        return true;
    }

    private function createUserCredits(User $user, int $payoutDollars) 
    {
        $credits = $payoutDollars * $this->getDollarCreditsFactor();
        return new UserCredits($user, $credits, "tournament-win");
    }

    private function getDollarCreditsFactor(): int
    {
        $config = Config::first();
        return $config->config['dollar_credit_conversion_factor'];
    }
}
