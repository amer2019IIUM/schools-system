<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\School;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->delete();
  
        $schools = array(
            array('id' => '1','name'=>'المدرسة السعودية كوالالمبور'  ),
            array('id' => '2','name'=>'المدرسة السعودية جاكرتا'  ),
         );
        DB::table('schools')->insert($schools);   
        }
}
