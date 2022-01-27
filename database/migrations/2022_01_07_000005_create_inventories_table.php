<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoriesTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ref_id')->nullable()->unique();
            $table->string('brand_name');
            $table->string('make');
            $table->string('model');
            $table->longText('slug')->nullable();
            $table->string('manufacture_year');
            $table->string('registration_year')->nullable();
            $table->string('transmission')->nullable();
            $table->string('milage');
            $table->string('body_type');
            $table->string('no_of_doors');
            $table->string('price');
            $table->string('engine_size')->nullable();
            $table->string('engine_type');
            $table->string('fuel');
            $table->longText('description')->nullable();
            $table->string('interior_color')->nullable();
            $table->string('exterior_color')->nullable();
            $table->unsignedBigInteger('showroom_id');
            $table->timestamps();
        });
    }
}
