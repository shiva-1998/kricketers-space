<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{

    public function index()
    {

        $players = Player::latest()->paginate(8);

        return view('Back.players.index', compact('players'));
    }

    public function show($id)
    {
        $player = Player::findOrFail($id);
        
        // return $player;
        return view('Back.players.show', compact('player'));
    }
}
