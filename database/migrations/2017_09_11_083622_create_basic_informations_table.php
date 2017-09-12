<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('apartment_id')->unsigned()->unique();
            $table->foreign('apartment_id')
                ->references('id')->on('apartments')->onDelete('cascade');
            $table->integer('floor')->unsigned()->nullable();
            $table->integer('unit_in_floor')->unsigned()->nullable();
            $table->boolean('pool')->default(false);
            $table->boolean('sauna')->default(false);
            $table->boolean('power_meter')->default(false);
            $table->boolean('gas_meter')->default(false);
            $table->boolean('water_meter')->default(false);
            $table->boolean('antenna')->default(false);
            $table->boolean('door')->default(false);
            $table->boolean('announcement_board')->default(false);
            $table->boolean('guard')->default(false);
            $table->integer('elevator_count')->unsigned()->nullable();
            $table->integer('elevator_capacity')->unsigned()->nullable();
            $table->string('cooling_system')->nullable();
            $table->string('heating_system')->nullable();
            $table->string('first_visit')->nullable();
            $table->string('marketer_name')->nullable();
            $table->text('marketer_description')->nullable();
            $table->string('technical_visit')->nullable();
            $table->string('technician_name')->nullable();
            $table->text('technical_description')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('basic_informations');
    }
}
