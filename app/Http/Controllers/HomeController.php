<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Redirect;
use Auth;


class HomeController extends Controller
{
    public function __construct() {
        //check if user is logged in .... 
        $this->middleware('auth');
    }
    
    public function doList()
    {
        //check if user is logged in .... 
//        if (!Auth::check()) {
//            //return redirect('auth/login');
//        }
        //if logged in then go to home
        return view('home');      

    }
}
