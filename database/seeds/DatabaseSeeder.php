<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('clients')->insert([
            'first_name' => 'Trần Vĩnh Huy',
            'email' => 'Huytv1234@gmail.com',
            'password' => bcrypt('123456'),
            'post_code' => '084',
            'town' => 'Hà Nội',
            'last_name' => 'Trần',
            'country' => '1',
            'address' => 'Thanh Xuân',
        ]);
    }
}
