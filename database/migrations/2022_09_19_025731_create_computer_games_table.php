<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_game', function (Blueprint $table) {
            $table->id();
            $table->integer("computer_id");
            $table->unsignedBigInteger('game_id');
            $table->foreign("computer_id")->references('cid')->on('computers')->onDelete('cascade');
            $table->foreign("game_id")->references('id')->on('games')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_games');
    }
};
