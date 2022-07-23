<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarFranchisePivotTable extends Migration
{
    public function up()
    {
        Schema::create('car_franchise', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id', 'car_id_fk_6996648')->references('id')->on('cars')->onDelete('cascade');
            $table->unsignedBigInteger('franchise_id');
            $table->foreign('franchise_id', 'franchise_id_fk_6996648')->references('id')->on('franchises')->onDelete('cascade');
        });
    }
}
