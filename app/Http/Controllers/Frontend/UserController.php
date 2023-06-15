<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        
         if(Auth::id()){
      $orders = Wallet::all();
        return view('frontend.orders.index', compact('orders'));
    }else{
    return redirect('/')->with('status', 'sorry but you have to login in first');
    }

    }

     public function destroy($id)
    {
        $orders = Order::find($id);
               $orders->delete();
            return redirect('my-orders')->with('status','the order has been delete');
    }
}
