<?php

namespace App\Http\Controllers;

use App\Models\Startup;

class StartupController extends Controller
{
    public function index()
    {

        $startups = Startup::orderBy('name')->paginate(2);

        return view('startups.index', compact('startups'));
    }

    public function show(Startup $startup)
    {
        return view('startups.show', compact('startup'));
    }
}
