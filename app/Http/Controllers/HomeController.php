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
        Session::put('categories',$categories);
        
        $query = Product::with('images','categories');
        
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
        
        if(isset($d['category'])){
            $cate = Category::find($d['category']);   
            $ids = [];
            foreach ($cate->products as $prod) {
                array_push($ids, $prod->id);
            }
            $query->whereIn("id",$ids);
        }
        
        $products = $query->paginate(4);

        return view('home')->with(['products' => $products]);
    }

    public function detail($prouduct)
    {
        $product = Product::with('images','categories','similars')->find($prouduct);
        //dd($product);

        return view('detail')->with(['product' => $product]);
    }
}
