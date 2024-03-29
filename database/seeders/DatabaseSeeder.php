<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // ShowroomTableSeeder::class,
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            // PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            VehicleFeaturesSeeder::class,
        ]);
    }
}
