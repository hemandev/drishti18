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
            $deptIds = [
                'CSE', 'CE', 'ME', 'EEE', 'FOSS', 'IEEE', 'ISTE',
                'ROBO', 'EDC', 'MCA', 'IET', 'SAE', 'IIIE'
            ];
            $table->increments('workshop_id');
            $table->string('name', 255);
            $table->enum('dept', $deptIds);
            $table->string('coords');
            $table->string('contact1');
            $table->string('contact2');
            $table->integer('expected_attendance');
            $table->integer('volunteers');
            $table->string('venue');
            $table->float('budget');
            $table->float('reg_fee');
            $table->float('expected_income');
            $table->float('expected_profit');
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
        Schema::dropIfExists('workshops');
    }
}
