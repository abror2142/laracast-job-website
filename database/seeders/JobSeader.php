<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;


class JobSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(100)->create();
    }
}
