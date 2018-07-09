<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('roles')->insert([
          	[
            'user_id' => 1,
            'role' => 'superadmin',
            ],
            [
            'user_id' => 2,
            'role' => 'admin',
            ],
            [
            'user_id' => 3,
            'role' => 'manager',
            ],

               ]);
    }
}
