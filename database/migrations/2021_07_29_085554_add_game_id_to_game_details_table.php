<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGameIdToGameDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_details', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id')->after('id');
            $table->foreign('game_id')->references('id')->on('games');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_details', function (Blueprint $table) {
            $table->dropForeign('game_details_game_id_foreign');
            $table->dropColumn('game_id');
        });
    }
}
