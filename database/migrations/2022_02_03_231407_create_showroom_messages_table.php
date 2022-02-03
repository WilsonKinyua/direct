<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowroomMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showroom_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('showroom_id')->constrained();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_number');
            $table->string("location")->nullable();
            $table->longText('message');
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
        Schema::dropIfExists('showroom_messages');
    }
}
