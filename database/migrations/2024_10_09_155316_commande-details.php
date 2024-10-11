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

            $table->foreignId('commande_id')->constrained('commandes')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `commandes`
            $table->foreignId('produit_id')->constrained('produits')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `produits`
            $table->integer('quantite');
            $table->decimal('prix', 15, 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_details');
    }
};
