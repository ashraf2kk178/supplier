<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Wallet;


class OrderController extends Controller
{
    public function index(){

        $orders = Wallet::where('status', '0')->get(); 
        return view ('admin.orders.index', compact('orders'));
    }

    public function view($id){
         
          $orders = Wallet::where('id', $id)->first();
         return view('admin.orders.view', compact('orders'));
    }

    public function updateorder(Request $request, $id){
       
       $orders = Wallet::find($id);
       $orders->status = $request->input('order-status');
       $orders->update();
       return redirect('orders')->with('status', "Order has Updated Successfully");
    }

    public function orderhistory(){

        $orders = Wallet::where('status', '1')->get();
        return view('admin.orders.history', compact('orders'));
    }

     public function destroy($id)
    {
         // Product::where('id',$id)->delete();
        $orders = Wallet::find($id);
               $orders->delete();
            return redirect('orders')->with('status','the order has been delete');
    }

     public function ordercount(){
        $orderscount = Wallet::count(); 
        return response()->json(['count' => $orderscount]);
    }
}
