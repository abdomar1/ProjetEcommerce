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
            $table->string('nomU');
            $table->string('prenomU');
            $table->string('email');
            $table->string('password');
            $table->string('telephone');
            $table->string('adresse');


            $table->foreignId('idRole')->constrained('roles')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `roles`
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
        //
    }
};
