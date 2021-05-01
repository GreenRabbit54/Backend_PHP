<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('home',[
            'products'=>$products
        ]);
    }
    public function changelocale($locale){


        $avilableLocales = ['ru', 'en'];
        if(!in_array($locale, $avilableLocales)){
            $locale = config('app.locale');
        }
        session(['locale'  =>  $locale]);
        App::setLocale($locale);

        return redirect()->back();
    }
}
