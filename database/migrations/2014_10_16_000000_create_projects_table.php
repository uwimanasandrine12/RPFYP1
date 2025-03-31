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
        Schema::create('projects', function (Blueprint $table) {
            $table->string('project_code')->primary();
            $table->string('project_name');
            $table->string('project_problems');
            $table->string('project_solutions');
            $table->string('project_abstract');
            $table->string('project_dissertation');
            $table->string('project_source_codes');
            $table->string('department_code'); // Foreign Key            
            $table->foreign('department_code')->references('department_code')->on('departments')->onDelete('cascade');
            $table->string('student_reg_number'); // Foreign Key            
            $table->foreign('student_reg_number')->references('student_reg_number')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
};
