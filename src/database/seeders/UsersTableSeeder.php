<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $names = [
            'admin' => '管理者',
            'tanaka' => '田中',
            'yamada' => '山田',
        ];

        foreach ($names as $email => $user) {
            User::create([
                'name' => $user,
                'email' => $email . '@example.com',
                'password' => bcrypt('hogehoge')
            ]);
        }
    }
}
