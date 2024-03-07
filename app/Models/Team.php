<?php

namespace App\Models;

use App\Models\Game;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function game()
    {
        return $this->hasMany(Game::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
