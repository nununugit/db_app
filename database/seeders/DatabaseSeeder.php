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
        $this->call(TeacherSeeder::class);
        $this->call(FieldSeeder::class);
        $this->call(LaboratorySeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(NewsSeeder::class);

    }
}
