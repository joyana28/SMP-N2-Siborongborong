<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('admin')->insert([
            'username' => 'smpn2admin',
            'email' => 'smpn2siborongborong@gmail.com',
            'password' => Hash::make('smpn2sbbgotrend'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}