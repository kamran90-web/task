<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
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
            ['id' => 1, 'name' => 'Kamran', 'email' => 'kammy2cool@gmail.com', 'password' => bcrypt('Kamran123')],
            
        ]);
    }
}
