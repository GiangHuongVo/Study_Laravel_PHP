<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        // To get all products from DB
        $products=Product::all();
        // return view index blade inside products folder
        //return view('products.index');
        // Pass all product to view
        return view('products.index', ['products'=>$products]);
        //'products' go to view
    }

    public function create() {
        // return view index blade inside products folder
        return view('products.create');
    }

    public function store(Request $request) {
        // dump data out
        //dd($request);
        // Need to validation before store data
        $data = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        // Call Product from Model -> save to database
        $newProduct = Product::create($data);
        // Return to index page
        return redirect(route('product.index'));
    }
    // Display edit page => product detail
    public function edit(Product $product) {       
        return view('products.edit', ['product' => $product]);
    }

    // Action: update a product
    public function update(Product $product, Request $request) {  
        // Need to validation before store data
        $data = $request->validate([
            'category' => 'required',
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        // update data and store in DB
        $product -> update($data );
        // Back to the product page with message successful
        return redirect(route('product.index')) -> with('success', 'Product updated successfully!');
    }
    public function destroy(Product $product) {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted successfully');
    }
}
