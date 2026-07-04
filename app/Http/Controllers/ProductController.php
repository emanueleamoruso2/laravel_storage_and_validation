<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\CustomRequest;

class ProductController extends Controller
{
    public function store(CustomRequest $request){
    // dd($request->all());

    // i dati del form
    $name= $request->name;
    //  $name= $request->input('name');
    $description = $request->description;
    $price=$request->price;
    
    $img=($request->file('img')) ? $request->file('img')->store('img', 'public') : 
    null;
    // METODO SALVARE DATI DB 1
    // creo un nuovo oggetto di classe product
    // $product = new Product();

    // // Valorizzando i campi dell'oggetto $product
    // $product->name=$name;
    // $product->description=$description;
    // $product->price=$price;

    // // dd($product);
    // // sto salvando il prodotto nel mio db
    // $product->save();

    // METODO SALVARE DATI DB2
    // MASS ASSIGNMENT 

    Product::create([
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'img' => $img
    ]);
    return redirect()->back()->with('status', 'Prodotto inserito correttamente');
    }

    Public function index(){
        // sto richiedendo al mio db tutti gli elementi all'interno della tabella products
        $products=Product::all();
        return view('index',['products'=>$products]);
    }
}

// si usano i modelli che sono entità che fanno da tramite che comunicano tra database e laravel stesso utilizzando Eloquent. I modelli mi permettono di creare classi preimpostate di laravel che mi consentono di definire i prodotti costruendo degli oggetti che saranno incapsulati all'itnerno del mio databse