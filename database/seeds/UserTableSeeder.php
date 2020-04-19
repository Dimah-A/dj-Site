<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'role_id' => 1,
            'numero' => '0466981357',
            'adresse' => 'rue Delacroix 163 b8 1120 Bruxelles'
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => Hash::make('user@user.com'),
            'role_id' => 2,
            'numero' => '0467963357',
            'adresse' => 'rue Descooters 18 b81 1180 Bruxelles'
        ]);
    }
}
