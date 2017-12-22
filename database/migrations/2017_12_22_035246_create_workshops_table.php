<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshops', function (Blueprint $table) {
            $table->increments('workshop_id');
            $table->timestamps();
            $table->string('name', 255);
            $table->string('coords');
            $table->string('contact1');
            $table->string('contact2');
            $table->integer('expected_attendance');
            $table->integer('volunteers');
            $table->string('venue');
            $table->float('budget');
            $table->float('reg_fee');
            $table->float('expected_income');
            $table->float('net_income');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshops');
    }
}
