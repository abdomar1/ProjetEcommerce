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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nomP');
            $table->string('descriptionP');
            $table->decimal('prix',10,3);
            $table->string('img');
            $table->text('descTechno');
            $table->text('principCaracte');
            $table->string('marque');
            $table->string('coleur');          
            
            $table->foreignId('idCate')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `commandes`

      
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
