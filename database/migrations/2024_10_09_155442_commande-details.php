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
        Schema::create('commande-details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('idCmd')->constrained('commandes')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `commandes`
            $table->foreignId('idProd')->constrained('produits')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `produits`
            $table->integer('quantite');
            $table->decimal('prixUnit', 15, 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
