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
            $table->string('Stazione_partenza', 70);
            $table->string('Stazione_arrivo', 40);
            $table->dateTime('Orario_partenza');
            $table->dateTime('Orario_arrivo');
            $table->integer('Codice_Treno');
            $table->integer('Numero_Carrozze')->unsigned();
            $table->boolean('In_orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
