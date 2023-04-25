<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Edgard Bertelli',
            'email' => 'bertelliedgard@gmail.com',
            'birth_date' => '1990-07-16',
            'phone_number' => '(16) 99786-9410',
            'status' => 'ativo',
            'password' => Hash::make('meuteste123'),
        ]);
    }
}
