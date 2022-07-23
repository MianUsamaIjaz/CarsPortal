<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    public function up()
    {
        Schema::create('carModels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('carModel');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
