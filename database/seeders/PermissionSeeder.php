<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'view-data',
            'create-data',
            'edit-data',
            'show-data',
            'create-reply',
            'change-status',
        ];

        foreach ($permissions as $key => $permission) {
            Permission::create([
                'name' => $permission
                // 'guard_name'=> 'web'
            ]);
        }
    }
}
