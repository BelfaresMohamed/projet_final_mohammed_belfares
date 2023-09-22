<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produit::create([
            'titre'=>'p1',
            'prix'=>50,
            'image'=>'p1.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p2',
            'prix'=>50,
            'image'=>'p2.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p3',
            'prix'=>50,
            'image'=>'p3.png',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p4',
            'prix'=>50,
            'image'=>'p4.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p5',
            'prix'=>50,
            'image'=>'p5.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p6',
            'prix'=>50,
            'image'=>'p6.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p7',
            'prix'=>50,
            'image'=>'p7.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p8',
            'prix'=>50,
            'image'=>'p8.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p9',
            'prix'=>50,
            'image'=>'p9.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p10',
            'prix'=>50,
            'image'=>'p10.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p12',
            'prix'=>50,
            'image'=>'p12.png',
            'createur'=>1,
            'stock'=>1,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p13',
            'prix'=>50,
            'image'=>'p13.png',
            'createur'=>1,
            'stock'=>15,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p14',
            'prix'=>50,
            'image'=>'p14.png',
            'createur'=>1,
            'stock'=>10,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p15',
            'prix'=>50,
            'image'=>'p15.png',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p16',
            'prix'=>50,
            'image'=>'p16.png',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p17',
            'prix'=>90,
            'image'=>'p17.png',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en bois',
        ]);
        Produit::create([
            'titre'=>'p18',
            'prix'=>50,
            'image'=>'p18.png',
            'createur'=>1,
            'stock'=>2,
            'categorie'=>'Chaise en fer',
        ]);
        Produit::create([
            'titre'=>'p19',
            'prix'=>50,
            'image'=>'p19.png',
            'createur'=>1,
            'stock'=>3,
            'categorie'=>'Chaise en plastique',
        ]);
        Produit::create([
            'titre'=>'p20',
            'prix'=>50,
            'image'=>'p20.png',
            'createur'=>1,
            'stock'=>7,
            'categorie'=>'Chaise en fer',
        ]);

    }
}
