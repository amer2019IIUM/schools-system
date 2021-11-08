<?php

namespace Database\Seeders;

use App\Models\Center;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->delete();
 
        $centers = array(
            array('id' => '1','name'=>'سدني', 'school_id' => '2','country' => 'استراليا' ),
            array('id' => '2','name'=>'كوالالمبور', 'school_id' => '1','country' => 'ماليزيا' ),
        );
        DB::table('centers')->insert($centers);   
        }
}
