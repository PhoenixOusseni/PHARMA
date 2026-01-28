<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'code' => '030889',
                'matricule' => '789012',
                'nom' => 'SUPER',
                'prenom' => 'Admin',
                'telephone' => '456789123',
                'role_id' => 3,
                'section_id' => 3,
                'statut' => 'Actif',
                'region_ordinal_id' => 3,
                'email' => 's-admin@gmail.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
