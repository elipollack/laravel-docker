<?php

namespace App\Domain\Prizes;

class PrizeStructure
{
    public static function getStructure(int $players): PrizeCollection
    {
        $prizeStructures = [
            2 => [
                new Prize(1, 100),
            ],
            10 => [
                new Prize(1, 50),
                new Prize(2, 30),
                new Prize(3, 20),
            ],
            18 => [
                new Prize(1, 40),
                new Prize(2, 30),
                new Prize(3, 20),
                new Prize(4, 10),
            ],
            27 => [
                new Prize(1, 40),
                new Prize(2, 23),
                new Prize(3, 16),
                new Prize(4, 12),
                new Prize(5, 9),
            ],
            36 => [
                new Prize(1, 33),
                new Prize(2, 20),
                new Prize(3, 15),
                new Prize(4, 11),
                new Prize(5, 8),
                new Prize(6, 7),
                new Prize(7, 6),
            ],
            50 => [
                new Prize(1, 29),
                new Prize(2, 18),
                new Prize(3, 13),
                new Prize(4, 10),
                new Prize(5, 8),
                new Prize(6, 7),
                new Prize(7, 6),
                new Prize(8, 5),
                new Prize(9, 4),
            ],
            66 => [
                new Prize(1, 26),
                new Prize(2, "16.5"),
                new Prize(3, 12),
                new Prize(4, "9.5"),
                new Prize(5, 8),
                new Prize(6, "6.5"),
                new Prize(7, 5),
                new Prize(8, 4),
                new Prize(9, "3.5"),
                new Prize(12, 3),
            ],
            83 => [
                new Prize(1, "25.5"),
                new Prize(2, 16),
                new Prize(3, "11.5"),
                new Prize(4, 9),
                new Prize(5, "7.5"),
                new Prize(6, 6),
                new Prize(7, "4.5"),
                new Prize(8, "3.5"),
                new Prize(9, 3),
                new Prize(12, "2.5"),
                new Prize(15, 2),
            ],
            117 => [
                new Prize(1, 25),
                new Prize(2, "15.5"),
                new Prize(3, 11),
                new Prize(4, "8.5"),
                new Prize(5, 7),
                new Prize(6, "5.5"),
                new Prize(7, 4),
                new Prize(8, 3),
                new Prize(9, "2.5"),
                new Prize(12, "2.2"),
                new Prize(15, 2),
                new Prize(18, "1.8"),
            ],
            175 => [
                new Prize(1, "23.0"),
                new Prize(2, "14.0"),
                new Prize(3, "10.5"),
                new Prize(4, "8.0"),
                new Prize(5, "6.0"),
                new Prize(6, "4.5"),
                new Prize(7, "3.5"),
                new Prize(8, "2.9"),
                new Prize(9, "2.4"),
                new Prize(12, "2.0"),
                new Prize(15, "1.7"),
                new Prize(18, "1.4"),
                new Prize(27, "1.1"),
            ],
            215 => [
                new Prize(1, "22.5"),
                new Prize(2, "13.5"),
                new Prize(3, "10.3"),
                new Prize(4, "7.75"),
                new Prize(5, "6.0"),
                new Prize(6, "4.5"),
                new Prize(7, "3.5"),
                new Prize(8, "2.7"),
                new Prize(9, "2.1"),
                new Prize(12, "1.65"),
                new Prize(15, "1.35"),
                new Prize(18, "1.1"),
                new Prize(27, "0.9"),
                new Prize(36, "0.75"),
            ],
            290 => [
                new Prize(1, "21.5"),
                new Prize(2, "13.25"),
                new Prize(3, "9.5"),
                new Prize(4, "7.25"),
                new Prize(5, "5.5"),
                new Prize(6, "4.2"),
                new Prize(7, "3.1"),
                new Prize(8, "2.5"),
                new Prize(9, "2.0"),
                new Prize(12, "1.6"),
                new Prize(15, "1.3"),
                new Prize(18, "1.05"),
                new Prize(27, "0.85"),
                new Prize(36, "0.7"),
                new Prize(45, "0.6"),
            ],
            415 => [
                new Prize(1, "20.5"),
                new Prize(2, "12.75"),
                new Prize(3, "9.0"),
                new Prize(4, "6.7"),
                new Prize(5, "5.2"),
                new Prize(6, "3.9"),
                new Prize(7, "2.9"),
                new Prize(8, "2.3"),
                new Prize(9, "1.8"),
                new Prize(12, "1.4"),
                new Prize(15, "1.1"),
                new Prize(18, "0.9"),
                new Prize(27, "0.75"),
                new Prize(36, "0.6"),
                new Prize(45, "0.5"),
                new Prize(63, "0.45"),
            ],
            550 => [
                new Prize(1, "19.5"),
                new Prize(2, "12.25"),
                new Prize(3, "8.5"),
                new Prize(4, "6.5"),
                new Prize(5, "5.0"),
                new Prize(6, "3.7"),
                new Prize(7, "2.7"),
                new Prize(8, "2.2"),
                new Prize(9, "1.7"),
                new Prize(12, "1.3"),
                new Prize(15, "1.05"),
                new Prize(18, "0.85"),
                new Prize(27, "0.65"),
                new Prize(36, "0.55"),
                new Prize(45, "0.45"),
                new Prize(63, "0.40"),
                new Prize(81, "0.35"),
            ],
            700 => [
                new Prize(1, "19.25"),
                new Prize(2, "12.0"),
                new Prize(3, "8.25"),
                new Prize(4, "6.4"),
                new Prize(5, "4.9"),
                new Prize(6, "3.6"),
                new Prize(7, "2.65"),
                new Prize(8, "2.15"),
                new Prize(9, "1.65"),
                new Prize(12, "1.3"),
                new Prize(15, "1.05"),
                new Prize(18, "0.8"),
                new Prize(27, "0.6"),
                new Prize(36, "0.5"),
                new Prize(45, "0.4"),
                new Prize(63, "0.35"),
                new Prize(81, "0.3"),
                new Prize(99, "0.25"),
            ],
            900 => [
                new Prize(1, "19.2"),
                new Prize(2, "11.9"),
                new Prize(3, "8.25"),
                new Prize(4, "6.35"),
                new Prize(5, "4.85"),
                new Prize(6, "3.55"),
                new Prize(7, "2.6"),
                new Prize(8, "2.1"),
                new Prize(9, "1.6"),
                new Prize(12, "1.25"),
                new Prize(15, "1.0"),
                new Prize(18, "0.75"),
                new Prize(27, "0.55"),
                new Prize(36, "0.45"),
                new Prize(45, "0.35"),
                new Prize(63, "0.29"),
                new Prize(81, "0.24"),
                new Prize(99, "0.21"),
                new Prize(126, "0.19"),
            ],
            \PHP_INT_MAX => [
                new Prize(1, "19.11"),
                new Prize(2, "11.8"),
                new Prize(3, "8.2"),
                new Prize(4, "6.3"),
                new Prize(5, "4.8"),
                new Prize(6, "3.5"),
                new Prize(7, "2.55"),
                new Prize(8, "2.05"),
                new Prize(9, "1.55"),
                new Prize(12, "1.23"),
                new Prize(15, "0.95"),
                new Prize(18, "0.7"),
                new Prize(27, "0.52"),
                new Prize(36, "0.42"),
                new Prize(45, "0.33"),
                new Prize(63, "0.26"),
                new Prize(81, "0.21"),
                new Prize(99, "0.18"),
                new Prize(126, "0.16"),
                new Prize(153, "0.15"),
            ],
        ];
        $prizeStructure = [];

        foreach ($prizeStructures as $maxPlayers => $prizes) {
            if ($maxPlayers >= $players) {
                $prizeStructure = $prizes;
                break;
            }
        }

        return new PrizeCollection(...$prizeStructure);
    }
}
