<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
        'start_edu'=>'2016-09-16',
        'end_edu'=>'2023-08-15',
        'school_name'=>'İskenderun Teknik Üniversitesi',
        'school_description'=>'Bilgisayar Mühendisliği'

        ]);
    }
}
