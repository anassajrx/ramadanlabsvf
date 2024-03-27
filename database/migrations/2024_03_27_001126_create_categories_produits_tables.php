<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesProduitsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Création de la table 'categories'
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Création de la table 'produits'
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('quantite');
            $table->decimal('prix', 8, 2);
            $table->timestamps();
        });

        // Création de la table de liaison 'categorie_produit'
        Schema::create('categorie_produit', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('produit_id');
            $table->timestamps();

            // Définition des clés étrangères
            $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('cascade');

            // Assurer l'unicité de la combinaison catégorie-produit
            $table->unique(['categorie_id', 'produit_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Suppression des tables dans l'ordre inverse de leur création
        Schema::dropIfExists('categorie_produit');
        Schema::dropIfExists('produits');
        Schema::dropIfExists('categories');
    }
}
