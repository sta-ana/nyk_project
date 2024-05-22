<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateStudentsTable extends Migration
{
    public function up()
    {
        // Schema::create('students', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('last_name');
        //     $table->string('first_name');
        //     $table->string('middle_name')->nullable();
        //     $table->date('date_of_birth');
        //     $table->enum('gender', ['Male', 'Female', 'Other']);
        //     $table->text('address');
        //     $table->string('blood_type')->nullable();
        //     $table->string('course');
        //     $table->unsignedBigInteger('school_year_id')->nullable();
        //     $table->timestamps();
        //     $table->foreign('school_year_id')->references('id')->on('school_years')->onDelete('set null');
        // });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}