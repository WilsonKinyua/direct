<?php

namespace Database\Seeders;

use App\Models\Showroom;
use Illuminate\Database\Seeder;

class ShowroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $showroom = [
            [
                'id' => 1,
                'name' => 'LOTA AUTOMOTIVE (KENYA) LIMITED',
                'location' => 'Jomo Kenyatta Rd, Mombasa',
                'map_link' => 'https://g.page/lota-automotive-kenya-limited-?share',
                'phone_number' => '0725677890',
                'email' => 'admin@admin.com',
                'admin_name' => 'Lota',
                'admin_email' => 'lota@direct.co.ke',
            ],
            [
                'id' => 2,
                'name' => 'Brance',
                'location' => 'Nyali, Mombasa',
                'map_link' => 'https://goo.gl/maps/htDEeaaCFFL3L6DR6',
                'phone_number' => '0798272066',
                'email' => 'hello@brancetech.com',
                'web_url' => 'https://www.brancetech.com/',
                'admin_name' => 'Patrick',
                'admin_email' => 'patrieno55@gmail.com',
            ],
        ];

        Showroom::insert($showroom);
    }
}
