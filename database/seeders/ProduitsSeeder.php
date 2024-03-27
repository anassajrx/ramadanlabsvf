<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
use App\Models\Categorie;

class ProduitsSeeder extends Seeder
{
    public function run()
    {
        // Ajout de 15 produits
        for ($i = 1; $i <= 15; $i++) {
            Produit::create([
                'nom' => 'Produit ' . $i,
                'quantite' => rand(1, 100),
                'prix' => rand(10, 1000) / 10,
            ])->categories()->attach(Categorie::inRandomOrder()->first());
        }
    }
}
