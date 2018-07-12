<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

    //Categorias existentes***
    //banner promocional se houver**
    //Tenta solicitar um cadastro para obter desconto**
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('images')->orderByDesc('created_at','updated_at')->paginate(4);

        return view('home')->with(['categories' => $categories, 'products' => $products]);
    }

    public function detail($prouduct)
    {
        $product = Product::with('images','categories','similars')->find($prouduct);
        //dd($product);

        return view('detail')->with(['product' => $product]);
    }
}
