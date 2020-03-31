<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTeacherPivotTable extends Migration
{
    public function up()
    {
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('teacher_id')->unsigned()->index();
            $table->foreign('teacher_id')->references('id')->on('teachers')
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
