<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => 'arshia',
                'email' => 'Ak@yahoo.com',
                'password' => bcrypt('12345678')
            ],
        ]);
    }
}
