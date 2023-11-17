<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;


class PustakawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::create([
 'name' => 'Pustakawan',
 'email' => 'pustakawan@gmail.com',
 'email_verified_at' => now(),
 'password' => Hash::make('password'),
 'created_at' => now(),
 'updated_at' => now(),
 ]);

 $role = Role::create(['name' => 'pustakawan']);
 $user->assignRole('pustakawan');

    }
}
