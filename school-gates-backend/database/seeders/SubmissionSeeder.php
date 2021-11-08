<?php

namespace Database\Seeders;

use App\Models\Submission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubmissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('submissions')->delete();
 
        $submissions = array(
            array('id' => '1','title'=>'رسم الجهاز التنفسي', 'student_id' => '1', 'type' => 'submission','path' => 'http://irep.iium.edu.my/85912/7/85912_The%20role%20of%20Malaysian%20university.pdf','assignment_id' => '1' ),
            array('id' => '2','title'=>' معاني ', 'student_id' => '1', 'type' => 'submission','path' => 'http://irep.iium.edu.my/85912/7/85912_The%20role%20of%20Malaysian%20university.pdf','assignment_id' => '2' ),
          );
        DB::table('submissions')->insert($submissions);      }
}
