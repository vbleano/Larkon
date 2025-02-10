<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //use App\Models\User;
    public function profile()
    {

        $user = \Auth::user(); // Get authenticated user
        $firstName = $user->user['given_name']; // Output: John
        return view('profile', compact('user'));
    }
}


