<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WalletController extends Controller
{
    public function store(Request $request)
    {
        
 if(Auth::id()){
        $wallet =new Wallet;
        $wallet->name = $request->name;
        $wallet->email = $request->email;
        $wallet->phone = $request->phone;
        $wallet->number = $request->number;
        $wallet->save();
        return redirect('/')->with('status', 'Done wait until the admin charge your wallet');
    }else{
    return redirect('/')->with('status', 'sorry but you have to login in first');
    }
    }

    
}