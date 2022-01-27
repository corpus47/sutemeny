<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlusFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('firstname',255);
            $table->string('lastname',255);
            $table->string('zipcode',4);
            $table->string('city',255);
            $table->string('address',255);
            $table->string('phone',12);
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
            //
            $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('zipcode');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('phone');
        });
    }
}
