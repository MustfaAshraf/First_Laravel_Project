<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_ar');
            $table->string('description_en');
            $table->string('description_ar');
            $table->integer('hours');
            $table->integer('price');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
