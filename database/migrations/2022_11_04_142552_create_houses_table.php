<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

/*
dimensione
prezzo
descrizione
classe energetica
indirizzo
piani
proprietario
numero di stanze
data di costruzione
garage
*/

        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedDecimal('dimensione', 6, 2);
            $table->unsignedDecimal('prezzo', 16, 2);
            $table->text('descrizione');
            $table->string('classe_energetica', 2);
            $table->string('indirizzo', 100);
            $table->tinyInteger('piani');
            $table->string('proprietario', 100);
            $table->tinyInteger('numero_di_stanze');
            $table->date('data_di_costruzione');
            $table->boolean('garage');
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
        Schema::dropIfExists('houses');
    }
}
