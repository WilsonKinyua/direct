<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 18,
                'title' => 'showroom_edit',
            ],
            [
                'id'    => 19,
                'title' => 'showroom_show',
            ],
            [
                'id'    => 20,
                'title' => 'showroom_delete',
            ],
            [
                'id'    => 21,
                'title' => 'showroom_access',
            ],
            [
                'id'    => 22,
                'title' => 'showroom_create',
            ],
            [
                'id'    => 23,
                'title' => 'superadmin_management_access', // added by superadmin
            ],
            [
                'id'    => 24,
                'title' => 'showroom_admin_access', // added by showroomadmin
            ],
            [
                'id'    => 25,
                'title' => 'inventory_create',
            ],
            [
                'id'    => 26,
                'title' => 'inventory_edit',
            ],
            [
                'id'    => 27,
                'title' => 'inventory_show',
            ],
            [
                'id'    => 28,
                'title' => 'inventory_delete',
            ],
            [
                'id'    => 29,
                'title' => 'inventory_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
