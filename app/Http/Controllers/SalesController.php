<?php
namespace App\Http\Controllers;

use \Log;
use App\Sale;
use App\Product;
use Illuminate\Http\Request;

class SalesController extends Controller
{

    public function pay(Request $request) {
        foreach($request->items as $item => $amount) {
            $product = Product::where('name', $item)->first();
            Log::info('Sold ' . $amount . ' ' . $product->name . ' for ' . $product->salePrice * $amount . '€.');
            for($i = 0; $i < $amount; $i++) {
                $sale = new Sale();
                $sale->product_id = $product->id;
                $sale->save();
            }
        }
    }

    public function prepare() {
        $data['products'] = Product::all();
        $data['totalIncome'] = 0;
        $data['netIncome'] = 0;
        foreach($data['products'] as $product) {
            $count = Sale::where('product_id', $product->id)->count();
            $product->sold = $count;
            $product->income = $product->sold * $product->salePrice;
            $product->netIncome = ($product->salePrice - $product->price) * $product->sold;
            $data['netIncome'] += $product->netIncome;
            $data['totalIncome'] += $product->income;
        }

        return $data;
    }

    public function get() {
        return response()->json($this->prepare());
    }

    public function list() {
        return view('admin.sales', $this->prepare());
    }

}
