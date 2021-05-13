<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFestivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_festivities', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->timestamp('validated_at')->nullable();
            $table->unsignedBigInteger('validated_by_user_id')->nullable();
            $table->foreign('validated_by_user_id')
                  ->references('id')
                  ->on('users');

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
        Schema::table('user_festivities', function($table) {
            $table->dropForeign('user_festivities_user_id_foreign');
            $table->dropForeign('user_festivities_validated_by_user_id_foreign');
        });
        Schema::dropIfExists('user_festivities');
    }
}
