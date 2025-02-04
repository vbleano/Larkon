<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Logs out the user

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate CSRF token

        return redirect('/login'); // Redirect to login page or homepage
    }
}
