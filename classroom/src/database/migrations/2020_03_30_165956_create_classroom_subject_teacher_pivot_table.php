<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomSubjectTeacherPivotTable extends Migration
{
    public function up()
    {
        Schema::create('class_room_subject_teacher', function (Blueprint $table) {

            $table->integer('subject_teacher_id')->unsigned()->index();
            $table->foreign('subject_teacher_id')->references('id')->on('subject_teacher')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('class_room_subject_id')->unsigned()->index();
            $table->foreign('class_room_subject_id')->references('id')->on('class_room_subject')
                ->onUpdate('cascade')->onDelete('cascade');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher_subject');
    }
}
