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

            $table->string('Azienda', 20);
            $table->string('Stazione di partenza', 40);
            $table->string('Stazione di arrivo', 40);
            $table->time('Orario di partenza');
            $table->time('Orario di arrivo');
            $table->integer('Codice Treno')->unsigned();
            $table->integer('Numero Carrozze')->unsigned();
            $table->tinyInteger('In orario')->unsigned();
            $table->tinyInteger('Cancellato')->unsigned();
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
