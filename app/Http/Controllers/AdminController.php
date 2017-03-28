<?php
namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function show() {
        $data['products'] = Product::all();
        return view('admin.show', $data);
    }

    public function add() {
        return view('admin.add');
    }

}
