<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PameranController extends Controller
{
    public function index(){
        $siswa = Siswa::with('team')->get();
        $uneso = 'XII RPL 1';
        $fotoUneso = Siswa::where('kelas', $uneso)->get(['nama_siswa','sosmed','kelas','foto_siswa']);
        
        $sone = 'XII RPL 2';
        $fotoSone = Siswa::where('kelas', $sone)->get(['nama_siswa','sosmed','kelas','foto_siswa']);

        $game = Game::withCount('likes')->get();
        return view('pameran.index', compact('siswa','game','fotoUneso','fotoSone'));
    }

    public function game($id){
        $game = Game::with('team')->find($id);
        $siswa = Siswa::where('team_id', $game->team->id)->get();
        // ddd($siswa);
        return view('pameran.game.index', compact('game','siswa'));
    }
}
