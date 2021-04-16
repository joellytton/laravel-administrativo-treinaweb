<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'joellytton',
            'email' => 'joellytton25@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
