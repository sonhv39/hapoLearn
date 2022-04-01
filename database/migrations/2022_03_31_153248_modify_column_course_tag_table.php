<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnCourseTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_tag', function (Blueprint $table) {
            $table->bigInteger('course_id')->unsigned()->change();
            $table->bigInteger('tag_id')->unsigned()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_tag', function (Blueprint $table) {
            $table->bigInteger('course_id')->change();
            $table->bigInteger('tag_id')->change();
        });
    }
}
