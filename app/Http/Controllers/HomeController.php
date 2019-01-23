<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Product;
use App\Models\Category;
use Cartalyst\Collections\Collection;

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
        
        $products = $query->paginate(8);

        return view('home')->with(['products' => $products]);
    }

    public function detail($prouduct)
    {
        $product = Product::with('images','ratings','categories','similars','atributtes')->find($prouduct);
        //dd($product);

        return view('detail')->with(['product' => $product]);
    }
    
    public function addProductCart($prouduct)
    {
        $dados = Request::all();
        //Session::push('cart.itens',$prouduct);
        Session::push('cart.itens', ['product' =>$prouduct, 'qtde' => (isset($dados['qtde']) ? $dados['qtde'] : 1)]);
        //dd(Session::all(), Session::get('cart.itens'));

        return Redirect::back()->with('sucess');
    }
    
    public function removeProductCart($prouduct)
    {
        Session::pull('cart.itens', ['product' =>$prouduct, 'qtde' => $dados['qtde']]);
        //Session::pull('cart.item', $prouduct);
        dd(Session::all());
        return Redirect::back()->with('sucess');
    }

    public function Cart()
    {
        $dados = Session::get('cart.itens');

        $produtos = new Collection();

        if(count($dados) >= 1){

            foreach($dados as $dado){

                $produto = Product::with('images')->find($dado['product']);

                $produtos->push([
                    'id' => $produto->id, 
                    'nome' => $produto->name, 
                    'valor' => $produto->sale_price, 
                    'img' => $produto->images->first()->file, 
                    'qtde' => $dado['qtde']
                    ]);

            }
            
        }
        dd($produtos);

        return view('cart')->with(['itens' => $produtos]);
    }


}
