<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apartment_id')->unsigned();
            $table->foreign('apartment_id')
                ->references('id')
                ->on('apartments')
                ->onDelete('cascade');;
            $table->boolean('elevator_status')->nullable();
            $table->text('elevator_description')->nullable();
            $table->boolean('engine_room_status')->nullable();
            $table->text('engine_room_description')->nullable();
            $table->boolean('heating_cooling_system_status')->nullable();
            $table->text('heating_cooling_system_description')->nullable();
            $table->boolean('door_status')->nullable();
            $table->text('door_description')->nullable();
            $table->boolean('total_status')->nullable();
            $table->text('total_description')->nullable();
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
        Schema::dropIfExists('technical_informations');
    }
}
