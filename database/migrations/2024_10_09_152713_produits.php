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
            $table->string('nom');
            $table->string('description');
            $table->decimal('prix',10,3);
            $table->string('img');
            $table->text('details');
            $table->text('principle');
            $table->string('marque');
            $table->string('color');          
            
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete()->cascadeOnUpdate(); // FK vers `commandes`

      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
