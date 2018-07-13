<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

    //banner promocional se houver**
    //Tenta solicitar um cadastro para obter desconto**
    public function index()
    {
        
        //Session::put('filters','oioi');
        //Session::flush();
        
        $d = Request::all();
        //dd($d);
        $categories = Category::all();
        
        $query = Product::with('images');
        
        if(isset($d['sortByDesc'])){
            $query->orderByDesc($d['sortByDesc']);
            $query->orderByDesc('created_at','updated_at');
        }
        
        if(isset($d['sortBy'])){
            $query->orderBy($d['sortBy']);
            $query->orderByDesc('created_at','updated_at');
        }
        
        if(isset($d['search'])){
            $query->where("name","like", "%" . $d['search'] ."%");
        }
        
        $products = $query->paginate(4);

        return view('home')->with(['categories' => $categories, 'products' => $products]);
    }

    public function detail($prouduct)
    {
        $product = Product::with('images','categories','similars')->find($prouduct);
        //dd($product);

        return view('detail')->with(['product' => $product]);
    }
}
