<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pending_users', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();

            $table->datetime('first_email_send_at')->nullable()->comment('24h después de no finalizar el registro');
            $table->datetime('second_email_send_at')->nullable()->comment('a la semana del primer email');
            $table->datetime('third_email_send_at')->nullable()->comment('al mes del segundo email');

            $table->integer('step')->unsigned()->nullable();
            $table->string('package', 20)->nullable();
            $table->string('locale', 20)->nullable();
            $table->datetime('deleted_at')->nullable();

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
        Schema::dropIfExists('pending_users');
    }
}
