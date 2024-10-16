<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::factory()->count(8)->has(Doctor::factory()->count(3))->create();
    }
}
