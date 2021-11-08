<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->delete();

        $grades = array(
            array('id' => '1','name'=>'الصف الرابع', 'center_id' => 1, 'gender' => 'm'),
            array('id' => '2','name'=>'الصف الخامس', 'center_id' => 2, 'gender' => 'f'),
         );
        DB::table('grades')->insert($grades);
        }
}
