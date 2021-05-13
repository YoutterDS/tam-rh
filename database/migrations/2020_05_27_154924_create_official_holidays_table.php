<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficialHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Google Calendar:
        // Vínculo de ejemplo: https://www.googleapis.com/calendar/v3/calendars/es.spain%23holiday%40group.v.calendar.google.com/events?key=AIzaSyCsS5Jcwob3Mc4nPQQhgXSDvKlYpOOMZHY
        // Retorno enformato: JSON
        Schema::create('official_holidays', function (Blueprint $table) {
            $table->bigIncrements('id');

            // TODO: Company

            $table->string('status')->nullable();               // "confirmed",
            $table->string('htmlLink')->nullable();             // "https://www.google.com/calendar/event?eid=MjAyMDA1MDJfNjBvMzBkMWc3NG8zMGMxZzYwbzMwZHI1NmcgZXMuc3BhaW4jaG9saWRheUB2",
            $table->string('summary')->nullable();              // Día de la Communidad Madrid (Madrid)",
            $table->string('description')->nullable();          // "Festivo o celebración en: Madrid",
            $table->string('creator_displayName')->nullable();  // "Festivos en España",
            $table->date('start_date')->nullable();             // "2020-05-02"
            $table->date('end_date')->nullable();               // "2020-05-03"
            $table->string('visibility')->nullable();           // "public",

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
        Schema::dropIfExists('official_holidays');
    }
}
