<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            'about_title' => 'About Our Company',
            'description' => 'We are a modern technology-driven organization dedicated to delivering high-quality digital solutions. Our focus is on innovation, performance, and long-term client success.',
            'mission' => 'Our mission is to empower businesses through reliable, scalable, and user-friendly software solutions that drive growth and efficiency.',
            'vission' => 'Our vision is to become a globally trusted technology partner, known for innovation, integrity, and excellence.',
            'image' => 'uploads/about/about.jpg',
            'missionImage' => 'uploads/about/mission.jpg',
            'vissionImage' => 'uploads/about/vision.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
