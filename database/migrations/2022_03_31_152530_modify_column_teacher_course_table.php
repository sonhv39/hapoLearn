<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnTeacherCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('teacher_course', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->change();
            $table->bigInteger('course_id')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('teacher_course', function (Blueprint $table) {
            $table->bigInteger('user_id')->change();
            $table->bigInteger('course_id')->change();
        });
    }
}
