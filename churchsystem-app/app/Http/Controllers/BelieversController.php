<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelieversController extends Controller
{
    public function addBeliever()
    {
        return view('Believers.create');
    }

    
}
