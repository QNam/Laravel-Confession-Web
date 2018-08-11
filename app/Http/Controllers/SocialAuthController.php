<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\LogoutRequest as LogoutRequest;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use Socialite;
use App\Model\User;

class SocialAuthController extends Controller
{
   private $redirectTo = '/';
   private $avatarStoragePath = '\uploads\avatars\\';

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleProviderCallback($provider)
    {

        $user = Socialite::driver($provider)->stateless()->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser,true);

        return redirect()->back(); 
    }


    private function getAvatarUser(ProviderUser $user)
    {
        $fileName   =   $user->getId() . '.jpg';  
        $path       =   storage_path('app\\' . $this->avatarStoragePath . $fileName);

        $fileContents  =   file_get_contents($user->getAvatar());
       
        //upload file
        File::put($path, $fileContents);

        return $fileName;
    }


    public function findOrCreateUser(ProviderUser $user, $provider)
    {
        $authUser = User::where('provider_user_id', $user->getId())->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'user_name' => $user->getName(),
            'email'     => $user->getEmail(),
            'provider'  => $provider,
            'avatar'    => $this->getAvatarUser($user),
            'provider_user_id' => $user->getId()
        ]);
    }


    public function logout(LogoutRequest $request)
    {
        Auth::logout();

        return redirect()->back();  
    }
    

}
