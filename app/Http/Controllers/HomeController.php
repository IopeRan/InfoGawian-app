<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company = Company::inRandomOrder()->paginate(20);
        $workers = User::inRandomOrder()->paginate(5);
        return view('home.index', [
            'title' => 'Home',
            'active' => 'home',
            'company' => $company,
            'workers' => $workers
        ]);
    }
}
