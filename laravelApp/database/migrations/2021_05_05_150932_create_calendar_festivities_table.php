<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarFestivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_festivities', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50)->nullable();
            $table->date('starts_at')->nullable();
            $table->date('ends_at')->nullable();

            $table->unsignedBigInteger('festivity_type_id');
            $table->foreign('festivity_type_id')
                  ->references('id')
                  ->on('festivity_types');

            $table->unsignedBigInteger('office_id');
            $table->foreign('office_id')
                  ->references('id')
                  ->on('offices');

            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('calendar_festivities');
    }
}
