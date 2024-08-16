<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([

            'name'=>'Suleyman',
            'phone_number'=>'05317006599',
            'email'=>'slmnaltunok@gmail.com',
            'website'=>'slmnaltuno.com',
            'adress'=>'Türkiye'


        ]);
    }
}
