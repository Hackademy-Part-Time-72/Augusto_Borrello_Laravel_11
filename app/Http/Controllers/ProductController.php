<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'category_id' => 'required'
        ]);

        $imagePath = null;

        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('products','public');
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imagePath,
            'category_id' => $request->category_id
        ]);

        return redirect()->route('products.index')
        ->with('success','Prodotto creato con successo!');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }


    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'category_id' => 'required'
        ]);
        if($request->hasFile('image')){
        $imagePath = $request->file('image')->store('products','public');
        $product->image = $imagePath;
    }

    $product->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'category_id' => $request->category_id
    ]);

    return redirect()->route('products.index')
    ->with('success','Prodotto aggiornato con successo!');
}
    }