<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('cnic')->nullable();
            $table->string('father_name');
            $table->string('father_phone')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_cnic')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();

//            $table->integer('subject_id')->unsigned()->nullable();
//            $table->foreign('subject_id')->references('id')
//                ->on('subjects')->onDelete('set null');

            $table->integer('company_id')->unsigned()->nullable();
            $table->foreign('company_id')->references('id')
                ->on('companies')->onDelete('set null');

            $table->integer('classroom_id')->unsigned()->nullable();
            $table->foreign('classroom_id')->references('id')
                ->on('classrooms')->onDelete('set null');

            $table->unsignedTinyInteger('gender');
            $table->unsignedTinyInteger('status')->default(1);
            $table->date('dob')->nullable();
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
        Schema::dropIfExists('students');
    }
}
