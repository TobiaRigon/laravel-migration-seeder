<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company'); // azienda
            $table->string('departure_station'); // stazione di partenza
            $table->string('arrival_station'); // stazione di arrivo
            $table->time('departure_time'); // orario di partenza
            $table->time('arrival_time'); // orario di arrivo
            $table->string('train_code'); // codice treno
            $table->integer('carriage_count'); // numero carrozze
            $table->boolean('on_time')->default(true); // in orario
            $table->boolean('cancelled')->default(false); // cancellato

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
        Schema::dropIfExists('trains');
    }
};
