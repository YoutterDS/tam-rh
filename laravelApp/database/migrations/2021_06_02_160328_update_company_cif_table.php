<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCompanyCifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function(Blueprint $table)
        {
            $table->unique('cif');
            $table->unsignedBigInteger('country_id')->nullable()->change();
            $table->unsignedBigInteger('locale_id')->nullable()->change();
            $table->unsignedBigInteger('coin_format_id')->nullable()->change();
            $table->unsignedBigInteger('package_id')->nullable()->change();
            $table->unsignedBigInteger('coin_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function($table) {
            $table->dropUnique('cif');
            $table->unsignedBigInteger('country_id')->nullable(false)->change();
            $table->unsignedBigInteger('locale_id')->nullable(false)->change();
            $table->unsignedBigInteger('coin_format_id')->nullable(false)->change();
            $table->unsignedBigInteger('package_id')->nullable(false)->change();
            $table->unsignedBigInteger('coin_id')->nullable(false)->change();
        });
    }
}
