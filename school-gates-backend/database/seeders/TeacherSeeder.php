<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->delete();
  
        $teachers = array(
            array('id' => '1','name'=>'حسام الفرا', 'passport'=>'0662356','teams_email'=>'team@outlook.com','password'=>'password','gender' => 'm' ),
            array('id' => '2','name'=>'ليلى',  'passport'=>'60345','teams_email'=>'team2@outlook.com','password'=>'password','gender' => 'f'),
          );
        DB::table('teachers')->insert($teachers);    
        }
}
