<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
         \App\Models\User::factory(5)->create();

        \App\Models\St_mark::factory(30)->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
