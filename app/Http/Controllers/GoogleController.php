<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Auth;
use App\Models\User;


class GoogleController extends Controller
{     // App\Http\Controllers\Auth\GoogleLoginController.php

    public function redirectToGoogle()

    {

        return Socialite::driver('google')->redirect();


    }
    public function handleGoogleCallback()
    {
       /* try {

            $user = Socialite::driver('google')->stateless()->user(); // Add `stateless()` if sessions are not used

            $findUser = User::where('google_id', $user->id)->first();

            $token = $user->token;
            $refreshToken = $user->refreshToken;
            $expiresIn = $user->expiresIn;
            $user = Socialite::driver('google')->userFromToken($token);
            $user->getId();
            $user->getNickname();
            $user->getName();
            $user->getEmail();
            $user->getAvatar();

        if ($findUser) {
            Auth::login($findUser);
            return redirect()->route( 'index');
        }

        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'google_id' => $user->id,
            'password' => encrypt('123456')
        ]);

        Auth::login($newUser);
        return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors(['error' => 'Something went wrong!']);
        }

    }*/

    $googleUser = Socialite::driver('google')->stateless()->user();

    // Check if the user already exists
    $user = User::where('email', $googleUser->getEmail())->first();

    if (!$user) {
        // Create user if not exists
        $user = User::create([
            'avatar' => $googleUser->getAvatar(),
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
            'password' => encrypt('123456')
        ]);
    }

    // Log in the user
    Auth::login($user);

    // Redirect to index page
    return redirect()->route('index');  // Change this to your index route
}
}





