<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->delete();

        $departments = array(
            array('id' => '1','name'=>'الارشاد الاكاديمي', 'school_id' => '1'),
            array('id' => '2','name'=>'الادارة المدرسية', 'school_id' => '1' ),
            array('id' => '3','name'=>'الدعم الفني', 'school_id' => '1'),
        );
        DB::table('departments')->insert($departments);
        }
}
