<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class PameranController extends Controller
{
    public function index(){
        $siswa = Siswa::with('team')->get();
        return view('pameran.index', compact('siswa'));
    }

    public function game(){
        return view('pameran.game.index');
    }
}
