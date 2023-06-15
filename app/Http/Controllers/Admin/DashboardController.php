<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function users(){

      $users = User::all()->where('role_as', '0');
      return view ('admin.users.index', compact('users'));
    }

     public function destroy($id)
    {
         // Product::where('id',$id)->delete();
        $users = User::find($id);
               $users->delete();
            return redirect('users')->with('status','the user has been delete');
    }
}
