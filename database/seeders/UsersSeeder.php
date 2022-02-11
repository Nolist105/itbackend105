<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
          
            [
                'name' => 'Watcharin Rotjarenumas',
                'email' => '622021104@tsu.ac.th',
                'password' => Hash::make('654321'),
                'role' => 'TSU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sahatsawat Buttakhot',
                'email' => '622021105@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 'TSU',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]
        );
    }
}