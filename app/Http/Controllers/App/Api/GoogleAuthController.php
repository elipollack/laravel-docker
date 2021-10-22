<?php
namespace App\Http\Controllers\App\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Socialite;
use Auth;
use Exception;

class GoogleAuthController extends Controller
{
    public function redirect(Request $request)
    {
        return Socialite::driver('google')->redirect();
    }
   
    public function callback(Request $request)
    {    
        $fbuser = Socialite::driver('google')->user();
        $create['name'] = $fbuser->getName();
        $create['email'] = $fbuser->getEmail();
        $create['google_id'] = $fbuser->getId();
        
        $user = User::where('email',$create['email'])->first();
        if(is_null($user)) {
            $user = new User();
            $user->name = $create['name'];
            $user->email = $create['email'];
            $user->password = Hash::make('secret');
            $user->balance = 0;
            $user->is_bot = 0;
            $user->firstname = '';
            $user->lastname = '';
            $user->facebook_id = $create['google_id'];
            $user->save();
        } else {
            if(!isset($user['google_id'])) {
                $user->facebook_id = $create['google_id'];
                $user->update();
            }
        }
        
        Auth::loginUsingId($user->id);
        return redirect('lobby');
    }
}