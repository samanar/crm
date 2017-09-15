<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevatorCheckListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elevator_check_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('board_wire')->nullable();
            $table->text('board_wire_description')->nullable();
            $table->boolean('wire_health')->nullable();
            $table->text('wire_health_description')->nullable();
            $table->boolean('wire_sort')->nullable();
            $table->text('wire_sort_description')->nullable();
            $table->boolean('clean_board')->nullable();
            $table->text('clean_board_description')->nullable();
            $table->boolean('movement')->nullable();
            $table->text('movement_description')->nullable();
            $table->boolean('brake')->nullable();
            $table->text('brake_description')->nullable();
            $table->boolean('cable_strength')->nullable();
            $table->text('cable_strength_description')->nullable();
            $table->boolean('strike')->nullable();
            $table->text('strike_description')->nullable();
            $table->boolean('oil')->nullable();
            $table->text('oil_description')->nullable();
            $table->boolean('light')->nullable();
            $table->text('light_description')->nullable();
            $table->boolean('main_cable')->nullable();
            $table->text('main_cable_description')->nullable();
            $table->boolean('keys')->nullable();
            $table->text('keys_description')->nullable();
            $table->boolean('door')->nullable();
            $table->text('door_description')->nullable();
            $table->boolean('sound')->nullable();
            $table->text('sound_description')->nullable();
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
        Schema::dropIfExists('elevator_check_lists');
    }
}
