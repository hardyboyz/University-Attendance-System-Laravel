<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_days', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day_name');
            $table->integer('day_index');
            $table->timestamps();
        });
        // $data = array(
        //     array('day_name'=>'Saturday', 'day_index'=> 4096),
        //     array('user_id'=>'Coder 2', 'subject_id'=> 2048),
        // );
        // DB::table('users')->insert();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_days');
    }
}
