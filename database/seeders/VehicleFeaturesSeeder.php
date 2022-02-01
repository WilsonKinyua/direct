<?php

namespace Database\Seeders;

use App\Models\VehicleFeatures;
use Illuminate\Database\Seeder;

class VehicleFeaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            'ABS',
            'Air Conditioning',
            'Airbags',
            'Alarm',
            'Anti-Lock Brakes',
            'Anti-Theft',
            'Automatic Transmission',
            'Bluetooth',
            'Child Safety Seats',
            'Cruise Control',
            'Daytime Running Lights',
            'Dual Air Bags',
            'Electric Windows',
            'Fog Lights',
            'Heated Seats',
            'Leather Seats',
            'Luggage Rack',
            'Navigation',
            'Power Steering',
            'Power Windows',
            'Power Mirrors',
            'Power Seats',
            'Power Sliding Doors',
            'Power Steering',
            'Power Windows',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
            'Rear Window Wiper',
            'Remote Start',
            'Rear Defroster',
            'Rear Wiper',
            'Rear Window Defroster',
        ];

        foreach ($features as $feature) {
            VehicleFeatures::create([
                'name' => $feature,
            ]);
        }
    }
}
