<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inquiries')->delete();
 
        $inquiries = array(
            array('id' => '1','body'=>' ك سيناء سوف القوى بكثير المساعدات تقتحم الثورات وعلى ستة الفهم في', 'inquiryable_id' => '1','inquiryable_type' => 'course','administrator_id' => '1','createable_id' => '1','createable_type' => 'teacher' ),
            array('id' => '2','body'=>' ك سيناء سوف القوى بكثير المساعدات تقتحم الثورات وعلى ستة الفهم في', 'inquiryable_id' => '2','inquiryable_type' => 'course','administrator_id' => '2','createable_id' => '2','createable_type' => 'student' ),
          );
        DB::table('inquiries')->insert($inquiries);    
        }
}
