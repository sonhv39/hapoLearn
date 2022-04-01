<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->bigInteger('course_id')->unsigned()->change();
            $table->string('name')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('requirement')->nullable()->change();
            $table->float('time')->default(10)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lessons', function (Blueprint $table) {
            // them khac phuc
            $table->bigInteger('course_id')->change();
            $table->string('name')->change();
            $table->string('description')->change();
            $table->string('requirement')->change();
            $table->float('time')->change();
        });
    }
}
