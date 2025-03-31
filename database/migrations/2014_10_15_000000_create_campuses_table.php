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
        Schema::create('campuses', function (Blueprint $table) {
                $table->id('Campus_id');
                $table->string('Campus_name');
                $table->string('faculty_code'); // Foreign Key
                
                $table->foreign('faculty_code')->references('faculty_code')->on('faculties')->onDelete('cascade');
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
        Schema::dropIfExists('campuses');
    }
};
