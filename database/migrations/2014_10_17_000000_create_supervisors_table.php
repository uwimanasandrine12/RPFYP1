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
        Schema::create('supervisors', function (Blueprint $table) {
            $table->string('supervisor_email')->primary();
            $table->string('supervisor_first_name');
            $table->string('supervisor_lastn_ame');
            $table->string('supervisor_phone_number');
            $table->string('project_code'); // Foreign Key
            
            $table->foreign('project_code')->references('project_code')->on('projects')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisors');
    }
};
