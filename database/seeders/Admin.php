<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$dKb.Z68HM8.Lw6UUW35Mee.XUkr/HQLR3KAfdaa3tM8ux1YEBL1iW', // password
            'remember_token' => Str::random(10),
            'is_admin' => 1,
        ]);
    }
}
