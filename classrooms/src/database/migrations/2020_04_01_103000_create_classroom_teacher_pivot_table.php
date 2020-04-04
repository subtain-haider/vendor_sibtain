<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomTeacherPivotTable extends Migration
{
    public function up()
    {
        Schema::create('classroom_teacher', function (Blueprint $table) {
            $table->integer('classroom_id')->unsigned()->index();
            $table->foreign('classroom_id')->references('id')->on('classrooms')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('teacher_id')->unsigned()->index();
            $table->foreign('teacher_id')->references('id')->on('teachers')
                ->onUpdate('cascade')->onDelete('cascade');

//            $table->integer('role_id')->unsigned()->index()->default(4);
//            $table->foreign('role_id')->references('id')->on('roles')
//                ->onUpdate('cascade')->onDelete('cascade');



            $table->primary(['classroom_id', 'teacher_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classroom_teacher');
    }
}
