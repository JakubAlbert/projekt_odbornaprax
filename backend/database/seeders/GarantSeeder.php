<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GarantSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            [
                // podmienka – podľa ID alebo emailu
                'user_id' => 100,
            ],
            [
                'role'                 => 'garant',
                'first_name'           => 'Garant',
                'last_name'            => 'Fixný',
                'email'                => 'garant@example.com',
                'phone_number'         => null,
                'password'             => Hash::make('heslo123'),
                'active'               => 1,
                'must_change_password' => 0,
                'created_at'           => now(),
                'updated_at'           => now(),
            ]
        );
    }
}
