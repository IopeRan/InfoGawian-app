<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCompanyUserController extends Controller
{
    public function index()
    {
        return view('dashboardCompanyUser.index', [
            'title' => 'Dashboard Company',
            'active' => null
        ]);
    }
}
