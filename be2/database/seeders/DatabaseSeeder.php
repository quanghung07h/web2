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
            TrainerSeeder::class,
            CompaniesSeeder::class,
            Categories::class,
            CourseSeeder::class,
            Coursecatalog::class,
            ClassSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            FacultySeeder::class,
            DiarySeeder::class,
            Courses_catalog_has_semester::class,
            DiaryDateSeeder::class,
            DiaryWeekSeeder::class,
            group_has_permission::class,
            group::class,
            permission::class,
            Semester::class,
            user_has_group::class,
            user_has_permission::class,
            user::class,
            seedCompany_has_category::class

        ]);
    }
}
