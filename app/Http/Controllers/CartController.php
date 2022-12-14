<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use App\Models\Delivery;
use App\Models\Selection;
use Illuminate\Http\Request;
use App\Models\ContestSelection;
use App\Models\ContestSelectionPick;

class CartController extends Controller
{
    
    public function addToCart2(Request $request)
    {
         // session()->flush();
       
        $id  = explode(',', $request['data'], 3)[0];
        $selection  = explode(',', $request['data'], 3)[1];
        $pick  = explode(',', $request['data'], 3)[2];
      
        $bet = Selection::find($id);
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add($bet, $selection,$pick);

        session()->put('cart', $cart);
      
        
        // dd($cart->totalQty);
        // dd($cart, session()->get('cart'));
       
        return array($cart->totalOdds,$cart->items,count($cart->items));
        return redirect()->back();
    }

    public function addToCart3(Request $request)
    {
         // session()->flush();
       
        $id  = explode(',', $request['data'], 4)[0];
        $selection  = explode(',', $request['data'], 4)[1];
        $pick  = explode(',', $request['data'], 4)[2];
      
        // session()->forget('cart');
        $bet = ContestSelectionPick::find($id);
        if (session()->has('cart')) {
            $cart = new Cart(session()->get('cart'));
        } else {
            $cart = new Cart();
        }
        $cart->add2($bet, $selection,$pick,'contest');

        session()->put('cart', $cart);
      
        
        // dd($cart->totalQty);
        // dd($cart, session()->get('cart'));
       
        return array($cart->totalOdds,$cart->items,count($cart->items));
        return redirect()->back();
    }
   
    public function cancelcart()
    {
        if (session()->has('cart')) {
            session()->forget('cart');
        }
        return redirect()->route('home');
    }
}
