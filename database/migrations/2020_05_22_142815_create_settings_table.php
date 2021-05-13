<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('locale_id');
            $table->foreign('locale_id')
                  ->references('id')
                  ->on('locales');

            $table->unsignedBigInteger('coin_id');
            $table->foreign('coin_id')
                ->references('id')
                ->on('coins');

            $table->unsignedBigInteger('coin_format_id');
            $table->foreign('coin_format_id')
                ->references('id')
                ->on('coin_formats');

            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')
                ->references('id')
                ->on('packages');

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
        Schema::table('settings', function($table) {
            $table->dropForeign('settings_locale_id_foreign');
            $table->dropForeign('settings_coin_id_foreign');
            $table->dropForeign('settings_coin_format_id_foreign');
            $table->dropForeign('settings_package_id_foreign');
        });
        Schema::dropIfExists('settings');
    }
}
