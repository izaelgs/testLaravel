<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Unitech Admin',
            'email' => 'UNITECH-RedesSociais@souunisales.com.br',
            'password' => bcrypt('senha'),
        ]);
    }
}
