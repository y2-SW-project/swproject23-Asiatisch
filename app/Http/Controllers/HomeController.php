<?php

namespace App\Http\Controllers;

use App\Models\cheese;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function _contruction(){
        $this->middleware('auth');
    }
  

    //return \Illuminate\contracts\Support\Renderable

    public function index(Request $request) {
        $user = Auth::user();
        $home = 'home';

        if($user->hasRole('admin')){
            $home = 'admin.cheese.index';
        }
        else if($user->hasRole('user')){
            $home = 'user.cheese.index';
        }
        return redirect()->route($home);
    }   
}
