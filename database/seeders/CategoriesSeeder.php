<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        // Ajout de 3 catégories
        Categorie::create([
            'nom' => 'Électronique',
            'description' => 'Produits électroniques et gadgets'
        ]);

        Categorie::create([
            'nom' => 'Vêtements',
            'description' => 'Vêtements pour hommes, femmes et enfants'
        ]);

        Categorie::create([
            'nom' => 'Maison et jardin',
            'description' => 'Articles pour la maison et le jardinage'
        ]);
    }
}
