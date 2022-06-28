<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [   
            [
                'name' => 'Proj E. Ct',
                'email' => 'project@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Par A. Sa',
                'email' => 'parasa@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Cap S. Tone',
                'email' => 'capstone@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
            [
                'name' => 'Fourt H. Year',
                'email' => 'fourthyear@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('password123')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
