<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
 
        $courses = array(
            array('id' => '1','name'=>'علوم', 'grade_id' => '1'  ),
            array('id' => '2','name'=>'قران', 'grade_id' => '2'),
        );
        DB::table('courses')->insert($courses);       }
}
