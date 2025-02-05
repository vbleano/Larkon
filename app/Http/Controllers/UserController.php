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
        return view('profile', compact('user'));
    }
}


