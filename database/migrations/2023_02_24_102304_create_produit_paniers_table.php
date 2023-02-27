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
        Schema::create('produit_paniers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produit_id')->constrained('produits')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('commande_id')->constrained('commandes')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantite');
            $table->string('isDelete')->default(0);

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
        Schema::dropIfExists('produit_paniers');
    }
};
