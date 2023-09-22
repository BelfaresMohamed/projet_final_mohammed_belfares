<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index(){
        $categories= Categorie::all();
        $produits= Produit::all();
        return view('backend.allproduit' , compact("categories" , "produits"));
    }

    public function destroyproduit(Produit $produit)
    {
        $produit->delete();
        return redirect()->back();
    }

    public function updateproduit(Request $request, Produit $produit)
    {
        
        request()->validate([
            "titre" => ["required"],
            "prix" => ["required"],
            "stock" => ["required"],
            "categorie" => ["required"],
        ]);

        $image = $request->file("image");

       

        $image->storePublicly('imgs/', 'public');



        $data = [
            "titre" => $request->titre,
            "prix" => $request->prix,
            "stock" => $request->stock,
            "categorie" => $request->categorie,
            "createur" => 1,
            // "image" => $image->hashName(),
        ];

        
        $produit->update($data);       
        return redirect()->back();
    }

    public function storproduit(Request $request, Produit $produit)
    {
        
        request()->validate([
            "titre" => ["required"],
            "prix" => ["required"],
            "stock" => ["required"],
            "categorie" => ["required"],
        ]);

        $image = $request->file("image");


        $image->storePublicly('imgs/', 'public');



        $data = [
            "titre" => $request->titre,
            "prix" => $request->prix,
            "stock" => $request->stock,
            "categorie" => $request->categorie,
            "createur" => 1,
            "image" => $image->hashName(),
        ];

        
        $produit->create($data);       
        return redirect()->back();
    }
}
