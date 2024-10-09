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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('idUtil')->constrained('utilisateurs')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `utilisateurs`
            $table->decimal('total', 10, 2);
            $table->enum('status', ['en attente', 'en cours', 'livrée', 'annulée']);
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
