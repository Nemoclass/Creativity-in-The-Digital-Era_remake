<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like($id){
        $game = Game::find($id);
        $user = Auth::user();

        if($user->hasLiked($game)){
            $user->likes()->where('game_id', $game->id)->delete();
        }else{
            $like = new Like(['user_id' => $user->id]);
            $game->likes()->save($like);
        }
        return back();
    }
}
