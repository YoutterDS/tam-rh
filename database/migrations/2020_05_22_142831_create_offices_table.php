<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->boolean('headquarters')->default(false);
            $table->string('name', 251)->nullable();
            $table->string('address', 251)->nullable();
            $table->string('city', 251)->nullable();
            $table->string('postal_code', 100)->nullable();
            $table->string('state_province_region', 100)->nullable();
            $table->string('phone_number', 100)->nullable();
            $table->string('email', 100)->nullable();

            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
                  ->references('id')
                  ->on('countries');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offices', function($table) {
            $table->dropForeign('offices_country_id_foreign');
        });
        Schema::dropIfExists('offices');
    }
}
