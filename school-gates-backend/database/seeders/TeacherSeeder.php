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
            array('id' => '1','name'=>'حسام الفرا', 'gender' => 'm' ),
            array('id' => '2','title'=>'ليلى', 'gender' => 'f'),
          );
        DB::table('teachers')->insert($teachers);    
        }
}
