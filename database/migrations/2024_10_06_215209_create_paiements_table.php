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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('idCmd')->constrained('commandes')->cascadeOnDelete();; // FK vers `commandes`
            $table->decimal('montant', 10, 3);
            $table->string('modePaim'); // exemple: carte, paypal
            $table->dateTime('datePaim');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
};
