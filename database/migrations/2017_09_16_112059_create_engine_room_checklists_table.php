<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineRoomChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engine_room_checklists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apartment_id')->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->boolean('clean')->default(false);
            $table->text('clean_description')->nullable();
            $table->boolean('water')->default(false);
            $table->text('water_description')->nullable();
            $table->boolean('pipes')->default(false);
            $table->text('pipes_description')->nullable();
            $table->boolean('insulation')->default(false);
            $table->text('insulation_description')->nullable();
            $table->boolean('torch_type')->default(false);
            $table->text('torch_type_description')->nullable();
            $table->boolean('torch_performance')->default(false);
            $table->text('torch_performance_description')->nullable();
            $table->boolean('pot_type')->default(false);
            $table->text('pot_type_description')->nullable();
            $table->boolean('pot_performance')->default(false);
            $table->text('pot_performance_description')->nullable();
            $table->boolean('chiller')->default(false);
            $table->text('chiller_description')->nullable();
            $table->boolean('cooling_tower')->default(false);
            $table->text('cooling_tower_description')->nullable();
            $table->boolean('pump')->default(false);
            $table->text('pump_description')->nullable();
            $table->boolean('oil')->default(false);
            $table->text('oil_description')->nullable();
            $table->boolean('main_gates')->default(false);
            $table->text('main_gates_description')->nullable();
            $table->boolean('command_board')->default(false);
            $table->text('command_board_description')->nullable();
            $table->boolean('noise')->default(false);
            $table->text('noise_description')->nullable();
            $table->boolean('temperature')->default(false);
            $table->text('temperature_description')->nullable();
            $table->boolean('door')->default(false);
            $table->text('door_description')->nullable();
            $table->boolean('pressure')->default(false);
            $table->boolean('pump_pressure')->default(false);
            $table->text('pump_pressure_description')->nullable();
            $table->text('pressure_description')->nullable();
            $table->boolean('trans')->default(false);
            $table->text('trans_description')->nullable();
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
        Schema::dropIfExists('engine_room_checklists');
    }
}
