<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

    //listar os produtos em destaque, e as categorias existentes***
    //exibe popup com banner promocional se houver**
    //Tenta solicitar um cadastro para obter desconto**
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('images')->simplePaginate(4);

        return view('home')->with(['categories' => $categories, 'products' => $products]);
    }

    public function detail($prouduct)
    {
        $product = Product::find($prouduct);

        $products = Product::with('images')->simplePaginate(4);

        return view('detail')->with(['product' => $product, 'products' => $products]);
    }
}
