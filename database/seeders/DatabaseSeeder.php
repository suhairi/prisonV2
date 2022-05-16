<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'      => 'Suhairi bin Abdul Hamid',
            'nosmpp'    => '000',
            'username'  => 'suhairi',
            'password'  => bcrypt('password1'),
            'role'      => 'root',
            'status'    => 'active',
        ]);

    }
}
