<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Computer;

class Game extends Model
{
    use HasFactory;
    protected $hidden = ['pivot'];
    public function computers()
    {
        return $this->belongsToMany(Computer::class, "computer_game", "computer_id", "game_id");
    }
}
