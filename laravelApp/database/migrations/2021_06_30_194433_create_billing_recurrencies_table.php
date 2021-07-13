<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingRecurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_recurrencies', function (Blueprint $table) {
            $table->id();

            $table->string('code')->nullable();

            $table->string('name_ca')->nullable();
            $table->string('name_es')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_fr')->nullable();

            $table->enum('active', ['Y', 'N'])->default('Y');

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
        Schema::dropIfExists('billing_recurrencies');
    }
}
