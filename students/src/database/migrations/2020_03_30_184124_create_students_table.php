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
            $table->string('cnic')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_email')->nullable();
            $table->string('father_phone_number')->nullable();
            $table->string('father_cnic')->nullable();



            $table->integer('class_room_id')->unsigned()->nullable();
            $table->foreign('class_room_id')->references('id')
                ->on('class_rooms')->onDelete('set null');

            $table->integer('campus_id')->unsigned()->nullable();
            $table->foreign('campus_id')->references('id')
                ->on('campuses')->onDelete('set null');

            $table->unsignedTinyInteger('status')->default(1);
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
