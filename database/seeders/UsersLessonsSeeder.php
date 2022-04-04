<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersLessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i < 100;$i++){
            DB::table('user_lesson')->insert([
                'user_id' => rand(1, 12),
                'lesson_id' => rand(1, 100)
            ]);
        }
    }
}
