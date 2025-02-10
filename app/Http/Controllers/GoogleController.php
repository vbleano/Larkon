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
    $googleUser = Socialite::driver('google')->stateless()->user();

    // Check if the user already exists
    $user = User::where('email', $googleUser->getEmail())->first();

    if (!str_ends_with($googleUser->getEmail(), '@up.edu.ph')) {
        return redirect()->route('login')->withErrors([
            'error' => 'Please use your UP email account (@up.edu.ph).',
        ]);
    }

    if (!$user) {
        // Create user if not exists
        $user = User::create([
            'avatar' => $googleUser->getAvatar(),
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'google_id' => $googleUser->id,
            'password' => encrypt('123456'),
        ]);
    }

    // Log in the user
    Auth::login($user);

    // Redirect to index page
    return redirect()->route('index');  // Change this to your index route
}
}
