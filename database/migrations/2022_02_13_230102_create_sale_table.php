<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('showroom_id')->nullable();
            $table->string('ref_id')->nullable()->unique();
            $table->unsignedBigInteger('inventory_id');
            $table->decimal('price', 65, 2);
            $table->string('customer_name');
            $table->string('customer_phone_number');
            $table->string('customer_email')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('payment_method');
            $table->string('payment_status')->nullable();
            $table->longText('note')->nullable();
            $table->unsignedBigInteger('sold_by_id')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
