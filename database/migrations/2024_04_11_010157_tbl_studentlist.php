<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //student data table columns
        Schema::create('StudentList', function (Blueprint $table) {
            $table->id();
            $table->string('LastName');
            $table->string('FirstName');
            $table->string('MiddleName');
            $table->date('BirthDate');
            $table->string('Gender');
            $table->string('Adress');
            $table->string('BloodType');
            $table->string('Course');            
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
        //
        schema::dropIfExist(StudentList);
    }
};
