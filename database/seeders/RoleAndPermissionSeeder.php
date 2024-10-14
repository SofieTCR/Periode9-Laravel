<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // permissions for category crud
        Permission::create(['name' => 'index category']);
        Permission::create(['name' => 'show category']);
        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);

        // permissions for project crud
        Permission::create(['name' => 'index project']);
        Permission::create(['name' => 'show project']);
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'edit project']);
        Permission::create(['name' => 'delete project']);

        // customer role
        $customer = Role::create(['name' => 'customer']);

        // sales role
        $sales = Role::create(['name' => 'sales'])
              -> givePermissionTo(['index category', 'show category', 'create category', 'edit category']);

        // student role
        $student = Role::create(['name' => 'student'])->givePermissionTo(['index project', 'show project', 'create project', 'edit project']);

        // teacher role
        $teacher = Role::create(['name' => 'teacher'])->givePermissionTo(['index project', 'show project', 'create project', 'edit project', 'delete project']);

        // admin role
        $admin = Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
    }
}
