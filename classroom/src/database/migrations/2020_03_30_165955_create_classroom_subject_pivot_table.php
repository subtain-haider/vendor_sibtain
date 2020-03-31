<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomSubjectPivotTable extends Migration
{
    public function up()
    {
        Schema::create('class_room_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_room_id')->unsigned()->index();
            $table->foreign('class_room_id')->references('id')->on('class_rooms')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('subject_id')->unsigned()->index();
            $table->foreign('subject_id')->references('id')->on('subjects')
                ->onUpdate('cascade')->onDelete('cascade');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_subject');
    }
}
