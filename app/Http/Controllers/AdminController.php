<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $game = Game::with('team')->get();
        $team = Team::all();
        $siswa = Siswa::with('team')->get();
        return view('admin.index', compact('game','team','siswa'));
    }

// TEAM
    public function store__team(Request $request){
        Team::create($request->all());
        return back();
    }


// GAME
    public function store__game(Request $request){
        $pathIcon = $request->file('logo_icon')->store('logo-icon');
        $pathVideo = $request->file('video_demo')->store('video-demo');
        $pathText = $request->file('logo_text')->store('logo-text');
        $pathSs1 = $request->file('ss1')->store('ss1');
        $pathSs2 = $request->file('ss2')->store('ss2');
        $pathSs3 = $request->file('ss3')->store('ss3');
        $pathSs4 = $request->file('ss4')->store('ss4');
        $pathSs5 = $request->file('ss5')->store('ss5');

       $dd = Game::create([
            'title' => $request->title,
            'logo_icon'=> $pathIcon,
            'video_demo'=> $pathVideo,
            'logo_text'=> $pathText,
            'desc' => $request->desc,
            'orientation' => $request->orientation,
            'ss1' => $pathSs1,
            'ss2' => $pathSs2,
            'ss3' => $pathSs3,
            'ss4' => $pathSs4,
            'ss5' => $pathSs5,
            'team_id' => $request->team_id,

        ]);
        return back();
    }

    public function destroy__game($id){
        $game = Game::find($id);
        if($game->logo_icon){
                Storage::disk('public')->delete($game->logo_icon);
         }

         return back();
    }
    
// SISWA
    public function store__siswa(Request $request){
        $pathSiswa = $request->file('foto_siswa')->store('siswa');
        Siswa::create([
            'nama_siswa' => $request->nama_siswa,
            'foto_siswa' => $pathSiswa,
            'tugas' => $request->tugas,
            'kelas' => $request->kelas,
            'sosmed' => $request->sosmed,
            'team_id' => $request->team_id,
        ]);
        return back();
    }

    public function edit__siswa($id){
            $siswa = Siswa::find($id);
            $team = Team::all();
            return view("admin.edit-siswa", compact('siswa','team'));
    }

    public function update__siswa(Request $req, $id){
        $siswa = Siswa::find($id);
        if($req->hasFile('foto_siswa')){
            if($siswa->foto_siswa){
                Storage::disk('public')->delete($siswa->foto_siswa);
            }
            $pathSiswa = $req->file('foto_siswa')->store('siswa');
            $siswa->update([
                'nama_siswa' => $req->nama_siswa,
                'foto_siswa' => $pathSiswa,
                'tugas' => $req->tugas,
                'kelas' => $req->kelas,
                'sosmed' => $req->sosmed,
                'team_id' => $req->team_id,
            ]);
        } else {
            $siswa->update([
                'nama_siswa' => $req->nama_siswa,
                'tugas' => $req->tugas,
                'kelas' => $req->kelas,
                'sosmed' => $req->sosmed,
                'team_id' => $req->team_id,
            ]);
        }
    }

    public function destroy__siswa($id){
        $siswa = Siswa::find($id);
        if($siswa->foto_siswa){
                Storage::disk('public')->delete($siswa->foto_siswa);
         }

         return back();
    }
}
