<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('location', 500);
            $table->longText('map_link')->nullable();
            $table->string('phone_number', 200);
            $table->string('email', 100);
            $table->longText('web_url')->nullable();
            $table->char('admin_name');
            $table->char('admin_email');
            $table->softDeletes();
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
        Schema::dropIfExists('showrooms');
    }
}
