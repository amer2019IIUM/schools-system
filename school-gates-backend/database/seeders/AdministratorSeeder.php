<?php

namespace Database\Seeders;

use App\Models\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->delete();

        $administrators = array(
            array('id' => '1','name'=>'ابو عمر', 'department_id' => '1','email' => 'ayed@outlook.com','role' => 'admin', ),
            array('id' => '2','name'=>'ابو سلطان', 'department_id' => '2','email' => 'moh@outlook.com','role' => 'admin',),
        );
        DB::table('administrators')->insert($administrators);   
       }
}
