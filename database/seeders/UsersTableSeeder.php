<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('users')->insert([
          //admin
            [
                'name'=>'Admin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'admin',
                'status'=>'active',


            ],

            //lecturer
            [
                'name'=>'Lecturer',
                'username'=>'lecturer',
                'email'=>'lecturer@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'lecturer',
                'status'=>'active',


            ],

             //demostrator
             [
                'name'=>'Demostrator',
                'username'=>'demostrator',
                'email'=>'demostrator@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'demostrator',
                'status'=>'active',


            ],

             //student
             [
                'name'=>'Student',
                'username'=>'student',
                'email'=>'student@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'student',
                'status'=>'active',


            ],



            

        ]
        );
    }
}
