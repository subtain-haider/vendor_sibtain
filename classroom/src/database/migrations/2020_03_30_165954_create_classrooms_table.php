<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('campus_id')->unsigned()->nullable();
            $table->foreign('campus_id')->references('id')
                ->on('campuses')->onDelete('cascade');

            $table->string('name');
            $table->string('abbreviation');
//            $table->string('session');
//            $table->string('batch');

            $table->integer('subject_id')->unsigned()->nullable();
            $table->foreign('subject_id')->references('id')
                ->on('subjects')->onDelete('set null');


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
        Schema::dropIfExists('class_rooms');
    }
}
