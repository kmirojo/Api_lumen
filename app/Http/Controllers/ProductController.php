<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

/**
 * - index method returns all available products as a JSON response.
 * - create method creates a new product and returns the newly created product as a JSON response.
 * - show method returns a single product resource by its id. This is also returned as a JSON response.
 * - update method updates a single product resource by its id as well.
 * - delete method deletes a product resource by its id and returns a success message.
 */

class ProductController extends Controller {
    /**
     * Se crea una nueva instancia de Controller
     */
    
    // ↓↓ Metodo de obtención de todos los productos ↓↓
    public function index(){
        $products = Product::all();

        return response()->json($products);
    }

    // ↓↓ Metodo de creación de producto ↓↓
    public function create(Request $request){
        $product = new Product;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return response()->json($product);
    }

    // ↓↓ Metodo de obtención de un producto ↓↓
    public function show($id){
        $product = Product::find($id);

        return response()->json($product);
    }

    // ↓↓ Metodo de Actualización de producto ↓↓
    public function update(Request $request, $id){
        $product = Product::find($id);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        return response()->json($product);
    }

    // ↓↓ Metodo de Eliminación de producto ↓↓
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();

        return response()->json('product removed successfully');
    }
}