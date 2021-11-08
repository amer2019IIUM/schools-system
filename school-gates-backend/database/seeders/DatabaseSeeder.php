<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SchoolSeeder::class,
            StudentSeeder::class,
            AnnouncementSeeder::class,
            AdministratorSeeder::class,
            AssignmentSeeder::class,
            DepartmentSeeder::class,
            InquirySeeder::class,
            // ReportSeeder::class,
            SchoolSeeder::class,
            SubmissionSeeder::class,
            CenterSeeder::class,
             CourseSeeder::class,
             TeacherSeeder::class,
             GradeSeeder::class,
        ]);
    }
}
