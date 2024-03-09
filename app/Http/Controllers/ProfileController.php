<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)
                ->first();

        return view('profile.index', [
            'title' => 'Profile',
            'active' => null,
            'user' => $user
        ]);
    }
}
