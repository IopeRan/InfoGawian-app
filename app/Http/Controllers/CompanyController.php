<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.index', [
            'title' => 'Company'
        ]);
    }

    public function show()
    {
        return view('company.show', [
            'title' => 'Show'
        ]);
    }
}
