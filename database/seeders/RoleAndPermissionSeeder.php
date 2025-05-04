<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create permissions with guard_name
        Permission::firstOrCreate(['name' => 'view-all-donations', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'delete-donations', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'edit-donations', 'guard_name' => 'web']);

        // Create roles with guard_name
        $adminRole = Role::firstOrCreate(['name' => 'Admin', 'guard_name' => 'web']);
        $editorRole = Role::firstOrCreate(['name' => 'Editor', 'guard_name' => 'web']);

        // Assign permissions to roles
        $adminRole->givePermissionTo([
            'view-all-donations',
            'delete-donations',
            'edit-donations',
        ]);

        $editorRole->givePermissionTo([
            'view-all-donations',
        ]);
    }
}
