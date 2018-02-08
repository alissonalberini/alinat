<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\User;
use Stripe\Error\Card;
use Cartalyst\Stripe\Stripe;

class AddMoneyController extends Controller {

    public function payWithStripe() {
        return view('pay')->with(['produtos' => ['oi','oioi']]);
    }
    
public function postPaymentWithStripe(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'card_no' => 'required',
            'ccExpiryMonth' => 'required',
            'ccExpiryYear' => 'required',
            'cvvNumber' => 'required',
            'amount' => 'required',
        ]);
        
        $input = $request->all();
        if ($validator->passes()) {           
            $input = array_except($input,array('_token'));            
            $stripe = Stripe::make(config('stripe.secret'));
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number'    => $request->get('card_no'),
                        'exp_month' => $request->get('ccExpiryMonth'),
                        'exp_year'  => $request->get('ccExpiryYear'),
                        'cvc'       => $request->get('cvvNumber'),
                    ],
                ]);
                if (!isset($token['id'])) {
                    dd('error','O Token Stripe não foi gerado corretamente');
                }
                $charge = $stripe->charges()->create([
                    'card' => $token['id'],
                    'currency' => 'BRL',
                    'amount'   => $request->get('amount'),
                    'description' => 'Adicionar na carteira'
                ]);
                if($charge['status'] == 'succeeded') {
                    /**
                    * Escreva aqui sua lógica de inserção do banco de dados.
                    */
                    dd('success','Dinheiro adicionado com sucesso na carteira');
                    
                } else {
                    dd('error','Dinheiro não adicionado na carteira!!');
                    
                }
                
            } catch (Exception $e) {
                dd('error',$e->getMessage());
                
            } catch(\Cartalyst\Stripe\Exception\CardErrorException $e) {
                dd('error',$e->getMessage());
                
            } catch(\Cartalyst\Stripe\Exception\MissingParameterException $e) {
                dd('error',$e->getMessage());
                
            }
        }
        dd('error','Todos os campos são necessários!');
        
    }

}
