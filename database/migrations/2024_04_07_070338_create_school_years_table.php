<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolYearsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('school_years')) {
            Schema::create('school_years', function (Blueprint $table) {
                $table->id();
                $table->string('school_year');
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
                $table->id();
                $table->string('last_name');
                $table->string('first_name');
                $table->string('middle_name')->nullable();
                $table->date('date_of_birth');
                $table->enum('gender', ['Male', 'Female', 'Other']);
                $table->text('address');
                $table->string('blood_type')->nullable();
                $table->string('course');
                $table->timestamps();
            });
        }

        Schema::table('students', function (Blueprint $table) {
            if (!Schema::hasColumn('students', 'school_year_id')) {
                $table->unsignedBigInteger('school_year_id')->nullable();
                $table->foreign('school_year_id')->references('id')->on('school_years')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['school_year_id']);
            $table->dropColumn('school_year_id');
        });

        if (Schema::hasTable('students')) {
            Schema::dropIfExists('students');
        }

        if (Schema::hasTable('school_years')) {
            Schema::dropIfExists('school_years');
        }
    }
}