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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomU');
            $table->string('prenom');
            $table->string('email');
            $table->string('password');
            $table->string('adresse');
            $table->string('telephone');
            $table->foreignId('idRole')->constrained('roles')->cascadeOnDelete();; // FK vers `roles`
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
