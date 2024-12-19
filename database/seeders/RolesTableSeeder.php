<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'admin']);
        // Tambahkan role lain jika diperlukan
        Role::create(['name' => 'owner']);
        Role::create(['name' => 'customer']);
    }
}
