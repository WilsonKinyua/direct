<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleFeaturesVehiclePivotTable extends Migration
{
    public function up()
    {
        Schema::create('inventory_vehicle_features', function (Blueprint $table) {
            $table->unsignedBigInteger('inventory_id');
            $table->foreign('inventory_id', 'inventory_id_fk_5754701')->references('id')->on('inventories')->onDelete('cascade');
            $table->unsignedBigInteger('vehicle_features_id');
            $table->foreign('vehicle_features_id', 'vehicle_features_id_fk_5754701')->references('id')->on('vehicle_features')->onDelete('cascade');
        });
    }
}
