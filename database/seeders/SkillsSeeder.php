<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::create([
        'name'=>'Html',
        'skills_percent'=>'%80',
         ]);
         Skills::create([
            'name'=>'Css',
            'skills_percent'=>'%75',
             ]);
             Skills::create([
                'name'=>'Laravel',
                'skills_percent'=>'%90',
                 ]);
                 Skills::create([
                    'name'=>'C#',
                    'skills_percent'=>'%90',
                     ]);


    }
}
