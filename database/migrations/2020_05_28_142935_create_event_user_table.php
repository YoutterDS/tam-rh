<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabla pivote para vincular usuarios a uno o varios eventos
        Schema::create('event_user', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('event_id')->nullable();
            $table->foreign('event_id')
                  ->references('id')
                  ->on('events');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
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
        Schema::table('event_user', function($table) {
            $table->dropForeign('event_user_event_id_foreign');
            $table->dropForeign('event_user_user_id_foreign');
        });
        Schema::dropIfExists('event_user');
    }
}
