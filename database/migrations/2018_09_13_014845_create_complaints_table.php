<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penalty'); 
            $table->boolean('status')->default(0); //0->paid   1->pending
            $table->string('violation'); 
            $table->unsignedinteger('traffic_id')->nullable();
            $table->foreign('traffic_id')->references('id')->on('traffic_polices')->onDelete('cascade');
            $table->unsignedinteger('vid')->nullable();
            $table->foreign('vid')->references('id')->on('vehicle')->onDelete('cascade');
            $table->string('area');
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
        Schema::dropIfExists('complaints');
    }
}