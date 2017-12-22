<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkshopDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workshop_dates', function (Blueprint $table) {
            $table->unsignedInteger('workshop_id');
            $table->date('wdate');
            $table->primary(['workshop_id', 'wdate']);
            $table->foreign('workshop_id')
                ->references('workshop_id')
                ->on('workshops')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshop_dates');
    }
}