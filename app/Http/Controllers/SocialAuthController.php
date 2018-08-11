<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\LogoutRequest as LogoutRequest;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Socialite;
use App\Http\Model\User;

class SocialAuthController extends Controller
{
   // private $redirectTo = '/';

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback($provider)
    {

        $user = Socialite::driver($provider)->stateless()->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser,true);

        Auth::user()->avatar = $this->getAvatarUser(Auth::user());

        var_dump(Auth::user());
        return redirect()->back(); 
    }


    private function getAvatarUser($user)
    {
        $fileContents  =   file_get_contents($user->avatar);
        File::put(storage_path() . '\uploads\avatars\\' . $user->id . ".jpg", $fileContents);

        //To show picture 
        $avatar    =   storage_path('uploads/avatars/' . $user->id . ".jpg");

        return $avatar;
    }


    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_user_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'user_name' => $user->name,
            'email'     => $user->email,
            'provider'  => $provider,
            'avatar'    => $user->avatar,
            'provider_user_id' => $user->id
        ]);
    }


    public function logout(LogoutRequest $request)
    {
        Auth::logout();

        return redirect()->back();  
    }
    

}
