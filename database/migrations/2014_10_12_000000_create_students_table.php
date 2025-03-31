<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->string('student_reg_number')->unique();
        $table->string('student_first_name');
        $table->string('student_last_name');
        $table->enum('student_gender', ['Male', 'Female']);
        $table->string('student_email')->unique();
        $table->string('student_phone_number')->unique();
        $table->string('password'); // For login purposes
     
        $table->timestamps();
    });
}


    public function down() {
        Schema::dropIfExists('students');
    }
};
