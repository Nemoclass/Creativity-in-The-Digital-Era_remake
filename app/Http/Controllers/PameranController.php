<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PameranController extends Controller
{
    public function index(){
        $siswa = Siswa::with('team')->get();
        $game = Game::with('team')->get();
        return view('pameran.index', compact('siswa','game'));
    }

    public function game($id){
        $game = Game::find($id);
        return view('pameran.game.index', compact('game'));
    }
}
