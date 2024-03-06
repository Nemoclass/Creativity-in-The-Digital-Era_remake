<?php

namespace App\Models;

use App\Models\Like;
use App\Models\Team;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function team(){
        
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function likesCount()
    {
        return $this->likes()->count();
    }
}

