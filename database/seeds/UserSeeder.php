<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Xander',
            'email' => 'test@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
    }
}
