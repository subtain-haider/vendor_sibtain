<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cnic');
            $table->string('phone_number');
            $table->string('email');
            $table->string('qualification')->nullable();

//            $table->integer('subject_id')->unsigned()->nullable();
//            $table->foreign('subject_id')->references('id')
//                ->on('subjects')->onDelete('set null');

            $table->integer('campus_id')->unsigned()->nullable();
            $table->foreign('campus_id')->references('id')
                ->on('campuses')->onDelete('set null');

            $table->unsignedTinyInteger('status')->default(1);
            $table->date('joining_date')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
