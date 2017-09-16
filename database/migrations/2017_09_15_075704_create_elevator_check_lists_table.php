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
            $table->integer('apartment_id')->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->boolean('board_wire')->default(false);
            $table->text('board_wire_description')->nullable();
            $table->boolean('wire_health')->default(false);
            $table->text('wire_health_description')->nullable();
            $table->boolean('wire_sort')->default(false);
            $table->text('wire_sort_description')->nullable();
            $table->boolean('clean_board')->default(false);
            $table->text('clean_board_description')->nullable();
            $table->boolean('movement')->default(false);
            $table->text('movement_description')->nullable();
            $table->boolean('brake')->default(false);
            $table->text('brake_description')->nullable();
            $table->boolean('cable_strength')->default(false);
            $table->text('cable_strength_description')->nullable();
            $table->boolean('strike')->default(false);
            $table->text('strike_description')->nullable();
            $table->boolean('oil')->default(false);
            $table->text('oil_description')->nullable();
            $table->boolean('light')->default(false);
            $table->text('light_description')->nullable();
            $table->boolean('main_cable')->default(false);
            $table->text('main_cable_description')->nullable();
            $table->boolean('keys')->default(false);
            $table->text('keys_description')->nullable();
            $table->boolean('floor')->default(false);
            $table->text('floor_description')->nullable();
            $table->boolean('door')->default(false);
            $table->text('door_description')->nullable();
            $table->boolean('sound')->default(false);
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
