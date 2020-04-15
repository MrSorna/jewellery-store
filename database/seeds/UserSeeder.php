<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Amirhosein',
            'last_name' => 'Pourmorad',
            'email' => 'a.pourmorad97@gmail.com',
            'active' => true,
            'role_id' => '1',
            'password' => Hash::make('12345678'),
        ]);
    }
}
