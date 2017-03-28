<?php
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function list() {
        $data['products'] = Product::all();
        return response()->json($data);
    }

    public function create(Request $request) {
        $product = new Product();
        $product->name = $request->name;
        $product->icon = $request->icon;
        $product->price = $request->price;
        $product->salePrice = $request->salePrice;
        $product->availability = $request->availability;
        $product->save();
        return view('admin.add', ['success' => true]);
    }

}
