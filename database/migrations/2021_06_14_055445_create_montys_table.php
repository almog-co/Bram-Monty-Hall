<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMontysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('montys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->integer('total_wins');
            $table->integer('total_losses');
            $table->json('monty_matrix') -> nullable();
            $table->integer('switched_times');
            $table->integer('game_nums');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('montys');
    }
}
