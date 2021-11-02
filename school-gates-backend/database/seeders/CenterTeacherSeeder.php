<?php

namespace Database\Seeders;

use App\Models\CenterTeacher;
use Illuminate\Database\Seeder;

class CenterTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CenterTeacher::factory()->count(5)->create();
    }
}
