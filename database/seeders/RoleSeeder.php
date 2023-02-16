<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'Najib',
                'email' => 'najib.wikrama4@gmail.com',
                'password' => Hash::make('najib123'),
                'no_hp' => '0895379967344',
                'address' => 'Bogor',
                'isAdmin' => true,
            ],
            [
                'username' => 'najip',
                'email' => 'najip.van.gogh@gmail.com',
                'password' => Hash::make('najip123'),
                'no_hp' => '0895379967345',
                'address' => 'Yogyakarta',
                'isAdmin' => false,
            ],
        ]);

        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin',
        //     'client',
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value
        //     ]);
        // }

    }
}
