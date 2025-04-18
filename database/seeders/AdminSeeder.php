<?php

namespace Database\Seeders;

use App\Http\Middleware\Admin;
use App\Models\Admin as ModelsAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new ModelsAdmin();

        $admin->name = 'Admin User';
        $admin->email = 'admin@gmail.com';
        $admin->password = 'admin';
        $admin->save();
    }
}
