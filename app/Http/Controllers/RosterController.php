<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RosterController extends Controller
{
    // Display a given man's profile

    public function display($id): View
        {
            return view('pages.roster.profile', [
                'player' => Player::findOrFail($id)
            ]);
        }

    public function roster()
    {
        return view('pages.roster.default', []);
    }
}
