<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->nullable();
            $table->string('rc_no');
            $table->string('class');
            $table->string('model');
            $table->date('fitness_upto')->nullable();
            $table->string('fuel_type');
            $table->date('registration_date');
            $table->string('engine_number');
            $table->date('insurance_upto')->nullable();
            $table->date('pollution_upto')->nullable();
            $table->integer('penalty')->nullable();
            $table->string('violation')->nullable();
            $table->integer('insurance_id')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('traffic_id')->nullable();
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
        Schema::dropIfExists('vehicle');
    }
}
