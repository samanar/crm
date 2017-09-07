<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->string('manager_name');
            $table->string('manager_phone');
            $table->integer('unit')->unsigned()->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->smallInteger('status')->unsigned()->nullable();
            $table->smallInteger('introduction_method')->unsigned()->nullable();
            $table->text('address');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('apartments');
    }
}
