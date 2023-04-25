<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'username' => 'bertelliedgard',
            'full_name' => 'Edgard Cesar Bertelli dos Reis',
            'cpf' => '38584682821',
            'rg' => '47.716.254-X',
            'birth_date' => '1990-07-16',
            'email' => 'bertelliedgard@gmail.com',
            'phone_number' => '(16) 99786-9410',
            'status' => 'ativo'
        ]);

        DB::table('clients')->insert([
            'username' => 'andradejulia',
            'full_name' => 'Julia Cristina de Andrade',
            'cpf' => '12345678910',
            'rg' => '47.716.254-X',
            'birth_date' => '1990-07-16',
            'email' => 'juliacristina@gmail.com',
            'phone_number' => '(16) 99786-9410',
            'status' => 'ativo'
        ]);
    }
}
