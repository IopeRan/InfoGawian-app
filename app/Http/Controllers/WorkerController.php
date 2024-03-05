<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        return view('workers.index', [
            'title' => 'Worker',  
            'active' => 'worker'
        ]);
    }

    public function show()
    {
        return view('workers.show', [
            'title' => 'Show',
            'active' => 'worker'
        ]);
    }
}
