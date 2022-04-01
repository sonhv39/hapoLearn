<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnNullableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->rememberToken()->nullable()->change();
            $table->string('phonenumber')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->date('date_of_birth')->nullable()->change();
            $table->string('username')->nullable()->change();
            $table->string('avata_url')->nullable()->change();
            $table->string('role')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // them khac phuc
            $table->string('name')->change();
            $table->string('email')->change();
            $table->string('password')->change();
            $table->rememberToken()->change();
            $table->string('phonenumber')->change();
            $table->string('address')->change();
            $table->date('date_of_birth')->change();
            $table->string('username')->change();
            $table->string('avata_url')->change();
            $table->string('role')->change();
        });
    }
}
