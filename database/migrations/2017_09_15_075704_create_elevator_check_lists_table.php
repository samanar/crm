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
            $table->boolean('board_errors')->default(false);
            $table->text('board_errors_description')->nullable();
            $table->boolean('motor')->default(false);
            $table->text('motor_description')->nullable();
            $table->boolean('display')->default(false);
            $table->text('display_description')->nullable();
            $table->boolean('door')->default(false);
            $table->text('door_description')->nullable();
            $table->boolean('clean')->default(false);
            $table->text('clean_description')->nullable();
            $table->boolean('micro')->default(false);
            $table->text('micro_description')->nullable();
            $table->boolean('movement')->default(false);
            $table->text('movement_description')->nullable();

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
