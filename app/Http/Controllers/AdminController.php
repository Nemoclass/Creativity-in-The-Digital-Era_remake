<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $game = Game::all();
        return view('admin.index', compact('game'));
    }

    public function store__game(Request $rq){
        $pathIcon = $rq->file('logo_icon')->store('logo-icon');
        $pathVideo = $rq->file('video_demo')->store('video-demo');
        $pathText = $rq->file('logo_text')->store('logo-text');
        $pathSs1 = $rq->file('ss1')->store('ss1');
        $pathSs2 = $rq->file('ss2')->store('ss2');
        $pathSs3 = $rq->file('ss3')->store('ss3');
        $pathSs4 = $rq->file('ss4')->store('ss4');
        $pathSs5 = $rq->file('ss5')->store('ss5');
       $dd = Game::create([
            'title' => $rq->title,
            'logo_icon'=> $pathIcon,
            'video_demo'=> $pathVideo,
            'logo_text'=> $pathText,
            'desc' => $rq->desc,
            'ss1' => $pathSs1,
            'ss2' => $pathSs2,
            'ss3' => $pathSs3,
            'ss4' => $pathSs4,
            'ss5' => $pathSs5,
            'team' => $rq->team,

        ]);
        return back();
    }
}
