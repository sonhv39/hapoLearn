<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++){
            DB::table('course_tag')->insert([
                'course_id' => rand(1,52),
                'tag_id' => rand(1,10)
            ]);
        }
    }
}
