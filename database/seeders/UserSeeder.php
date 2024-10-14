<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create customer
        $customer = User::factory()->create([
            'name' => 'Customer',
            'email' => 'customer@webshop.com',
            'password' => Hash::make('test1234')
        ]);
        $customer->assignRole('customer');

        // create sales
        $customer = User::factory()->create([
            'name' => 'Sales',
            'email' => 'sales@webshop.com',
            'password' => Hash::make('test1234')
        ]);
        $customer->assignRole('sales');

        // create student
        $customer = User::factory()->create([
            'name' => 'Student',
            'email' => 'student@school.com',
            'password' => Hash::make('student')
        ]);
        $customer->assignRole('student');

        // create teacher
        $customer = User::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@school.com',
            'password' => Hash::make('teacher')
        ]);
        $customer->assignRole('teacher');

        // create admin
        $customer = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@webshop.com',
            'password' => Hash::make('admin')
        ]);
        $customer->assignRole('admin');
    }
}
