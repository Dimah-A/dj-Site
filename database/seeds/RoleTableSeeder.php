<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {Role::truncate();
            DB::table('roles')->insert([
                'role' => 'Admin',
            ]);
          
            DB::table('roles')->insert([
                'role' => 'User',
            ]);
    }
    }
}
