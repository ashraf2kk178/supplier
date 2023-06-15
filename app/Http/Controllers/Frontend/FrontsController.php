<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FrontsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // protected function authenticated() {
    //     if (Auth::user()->role_as == '1')  //1 = admin login
    //      {
    //         return redirect('dashboard')->with('status', 'welcome to your dashboard');
    //     }
    //     elseif(Auth::user()->role_as == '0')   //0 = normal or default user login
    //     {
    //         $name = Auth::user()->name;
    //          return redirect('frontend.index')->with('status', ' welcome in E pharmacy ', ['name'=>$name]);
    //     }
    // }

    public function index()
    {
       
        return view('frontend.index');
        // return view('home');
    }

}
