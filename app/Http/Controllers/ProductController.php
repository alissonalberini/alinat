<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Validator;
use Exception;
use Illuminate\Database\QueryException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index')->with(['produtos' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            
            $validator = Validator::make($request, [
                'name' => 'required|max:191|min:1',
                'unidade' => 'required|max:191|min:1',
                'purchase_price' => 'required',
                'sale_price' => 'required',
                'stock' => 'required',
                'stock_min' => 'required',
                'input' => 'required',
                'exit' => 'required'
            ]);
            
            if ($validator->fails()) {
                return redirect('products/create')
                    ->withErrors($validator)
                    ->withInput();
                //Exception!
            }
            
            $create = Product::create($request);
            if(!$create){
                
            }
            
        } catch (Exception $ex) {
           //Exception!
        }
        catch (QueryException $ex) {
            //Exception!
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $reg = Product::find($product);
        if(!$reg){
            //Exception!
        }
        return view('product.edit')->with(['produto' => $reg]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        try{
            
            $validator = Validator::make($request, [
                'name' => 'required|max:191|min:1',
                'unidade' => 'required|max:191|min:1',
                'purchase_price' => 'required',
                'sale_price' => 'required',
                'stock' => 'required',
                'stock_min' => 'required',
                'input' => 'required',
                'exit' => 'required'
            ]);
            
            if ($validator->fails()) {
                return redirect('products/' . $product)
                    ->withErrors($validator)
                    ->withInput();
                //Exception!
            }
            
            //$request->id
            $create = Product::find($product)->update($request);
            if(!$create){
                
            }
            
        } catch (Exception $ex) {
           //Exception!
        }
        catch (QueryException $ex) {
            //Exception!
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        try{   
            Pessoa::destroy($product);
            
        } catch (Exception $ex) {

        }    
    }
    
}
