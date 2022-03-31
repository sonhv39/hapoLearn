<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phonenumber', 10);
            $table->string('address', 255);
            $table->date('date_of_birth');
            $table->string('username', 32);
            $table->string('avata_url', 1000);
            $table->string('role', 32);
            $table->softDeletes();
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
            $table->dropColumn('phonenumber');
            $table->dropColumn('address');
            $table->dropColumn('date_of_birth');
            $table->dropColumn('username');
            $table->dropColumn('avata_url');
            $table->dropColumn('role');
            $table->dropColumn('delete_at');
        });
    }
}
