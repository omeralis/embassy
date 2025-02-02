<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number')->unique();
            $table->string('igama_number')->unique();
            $table->string('password');
            $table->boolean('active')->default(true); // Default to active
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}
