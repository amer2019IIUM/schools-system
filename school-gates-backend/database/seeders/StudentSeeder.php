<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->delete();

        $students = array(
            array('id' => '1','name'=>'عامر', 'passport' => '0341255','teams_email' => 'amer@outlook.com','gender' => 'm','password' => 'password','grade_id' => '1', 'city' => null,'phone_number_1' => '011212122','phone_number_2' => '011212122','platform_report' => null,'personal_email' => 'amer@gmail.com'),
            array('id' => '2','name'=>'معاذ', 'passport' => '012154','teams_email' => 'moath@outlook.com','gender' => 'm','password' => 'password','grade_id' => '2', 'city' => null,'phone_number_1' => '11111011','phone_number_2' => '11111011','platform_report' => null,'personal_email' => 'moath@gmail.com'),
        );
        DB::table('students')->insert($students);  
      }
}
