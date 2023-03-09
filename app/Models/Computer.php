<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Computer extends Model
{
    use HasFactory;
    protected $primaryKey = 'cid';
    public $incrementing = false;
    public function games()
    {
        return $this->belongsToMany(Game::class, "computer_game", "computer_id", "game_id");
    }
}
