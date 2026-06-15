<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LectureAndStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\LectureAndStaff::create([
            'name' => 'John Doe',
            'position' => 'Lecturer',
            'image' => 'john_doe.jpg',
            'description' => 'John Doe is a lecturer in the Computer Science department.',
        ]);

        \App\Models\LectureAndStaff::create([
            'name' => 'Jane Smith',
            'position' => 'Assistant Professor',
            'image' => 'jane_smith.jpg',
            'description' => 'Jane Smith is an assistant professor in the Mathematics department.',
        ]);
    }
}
