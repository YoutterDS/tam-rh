<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->dateTime('closed_at')->nullable(); // las tareas con la fecha de cerrado, pasan automáticamente al historial
            $table->string('title', 251)->nullable();
            $table->text('description')->nullable();
            $table->dateTime('datetime_limit')->nullable();

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
        Schema::table('tasks', function($table) {
            $table->dropForeign('tasks_user_id_foreign');
        });
        Schema::dropIfExists('tasks');
    }
}
