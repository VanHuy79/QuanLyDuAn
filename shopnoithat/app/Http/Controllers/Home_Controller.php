<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie_models;
use App\Models\product_models;
class Home_Controller extends Controller
{
    //
    public function index(){
        $product =product_models::all();
        $categorie =categorie_models::all();
        return view('Client.home',['products'=>$product,'categories'=>$categorie]);
    } 
    
}
