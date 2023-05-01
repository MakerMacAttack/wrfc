<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProspectiveController extends Controller
{
    public function prospective()
    {
        return view('pages.prospective', []);
    }
}
