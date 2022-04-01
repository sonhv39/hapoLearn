<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyColumnCousersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->string('description')->nullable()->change();
            $table->string('img_url')->nullable()->change();
            $table->float('price')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('title')->change();
            $table->string('description')->change();
            $table->string('img_url')->change();
            $table->float('price')->change();
        });
    }
}
