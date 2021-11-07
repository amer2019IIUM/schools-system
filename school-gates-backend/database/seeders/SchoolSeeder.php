<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\School;
use Illuminate\Database\Seeder;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::factory()
            ->hasCenters(3)
            ->hasDepartments(3)
              ->count(5)->create();
    }
}
