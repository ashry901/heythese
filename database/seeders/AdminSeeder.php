<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Tarek Ashry',
            'email' => 'mondaycom@gmail.com',
            'password' => Hash::make('mondaycom'),
        ]);
    }
}
