<?php

namespace Database\Seeders;

use App\Models\Assignment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assignments')->delete();

        $assignments = array(
            array('id' => '1','title'=>'رسم الجهاز التنفسي', 'course_id' => '1','path' => 'http://irep.iium.edu.my/85912/7/85912_The%20role%20of%20Malaysian%20university.pdf','content' => ' اني التقرير مصالح للسلام والاقتصادية يبدأ أربعين تدخل على الأفكار حتى قامت ويقول منهم', ),
            array('id' => '2','title'=>'معاني الكلمات', 'course_id' => '2','path' => 'http://irep.iium.edu.my/85912/7/85912_The%20role%20of%20Malaysian%20university.pdf','content' => ' اني التقرير مصالح للسلام والاقتصادية يبدأ أربعين تدخل على الأفكار حتى قامت ويقول منهم', ),
         );
        DB::table('assignments')->insert($assignments);    
     }
}
