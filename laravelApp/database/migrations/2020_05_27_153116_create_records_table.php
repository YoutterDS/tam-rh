<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamp('starts_on')->nullable();
            $table->timestamp('ends_on')->nullable();

            $table->unsignedBigInteger('reason_id')->nullable();
            $table->foreign('reason_id')
                  ->references('id')
                  ->on('reasons');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');

            $table->ipAddress('ip')->nullable();
            $table->string('session_id')->nullable();

            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->integer('accuracy')->nullable();

            $table->boolean('validated')->default(false);

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
        Schema::table('records', function($table) {
            $table->dropForeign('records_reason_id_foreign');
            $table->dropForeign('records_user_id_foreign');
        });
        Schema::dropIfExists('records');
    }
}
