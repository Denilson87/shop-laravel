<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\orderRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brands;
use App\sale;
use App\User;
use App\Address;
use Session;

class ControllerProducts extends Controller
{
  public function index(Request $r){    
   
        $Brands;
        $category ;
        $name ;
        if($r->query("c")){
            $category = $r->query("c");
        }
        if($r->query("n")){
            $name = $r->query("n");
        }
        $res = Product::all();
        $cat = Category::all();
        $bra = Brands::all();

        if(isset($category) && isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" ) );
             //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" );
            //$a = 0;
        }
        if(isset($Brands) && isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%' and Brands_id = $Brands" ) );
             //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%' 
            //$a = 0;
        }

        else if(isset($name)){
            $name = strtolower($name);
            $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%'" ) );
            //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%'" );
           // $a = 1;
        }

        else if(isset($category)){
            $sRes = DB::table('products')
            ->where("category_id" , $category)
            ->get();
            //$a = 2;
        }
        else if(isset($Brands)){
            $sRess = DB::table('products')
            ->where("Brands_id" , $Brands)
            ->get();
            //$a = 2;
        }
        else{
            $sRes = DB::table('products')        
            ->get();
           // $a= 3;
        }
        

        if(!isset($category)) {
            $category = -1;
        }
        if(!isset($Brands)) {
            $Brands = -1;
        }
        //dd($sRes);
    	return view('store.product2')
            ->with('products', $sRes)
            ->with("cat", $cat)
            ->with("bra", $bra)
            ->with("a", $category)
            ->with("b", $Brands);
   
   
  }
  public function view($id)
  {
      
      $res = Product::find($id);
      $res1 = Product::all();
      $cat=Category::find($res->category_id);
      $colorList = explode(',',$res->colors);
      $cat = Category::all();
      $bra = Brands::all();
      return view('store.product')
          ->with('product', $res)
          ->with('products', $res1)
          ->with('cat', $cat)
          ->with('bra',$bra)
          ->with('colors',$colorList);   
  }



  public function search(Request $r){
    $category;
    $Brands;
    $name;
    if($r->query("c")){
        $category = $r->query("c");
    }
    if($r->query("d")){
        $Brands = $r->query("d");
    }
    if($r->query("n")){
        $name = $r->query("n");
    }
    $res = product::all();
    $res = Product::all();
    $cat = Category::all();
    $bra = Brands::all();

    if(isset($category) && isset($name)){
        $name = strtolower($name);
        $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" ) );
         //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%' and category_id = $category" );
        //$a = 0;
    }

    if(isset($Brands) && isset($name)){
        $name = strtolower($name);
        $sRess = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%' and Brands_id = $Brands" ) );
         //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%' and Brands_id = $Brands_id");
        //$a = 0;
    }
    else if(isset($name)){
        $name = strtolower($name);
        $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%'" ) );
        //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%'" );
       // $a = 1;
    }
    else if(isset($name)){
        $name = strtolower($name);
        $sRes = DB::select( DB::raw("SELECT * FROM `products` WHERE lower(name) like '%$name%'" ) );
        //dd("SELECT * FROM `products` WHERE lower(name) like '%$name%'" );
       // $a = 1;
    }
    else if(isset($category)){
        $sRes = DB::table('products')
        ->where("category_id" , $category)
        ->get();
        //$a = 2;
    }


    else if(isset($Brands)){
        $sRes = DB::table('products')
        ->where("Brands_id" , $Brands)
        ->get();
        //$a = 2;
    }

    else{
        $sRes = DB::table('products')         
        ->get();
       // $a= 3;
    }

    if(!isset($category)) {
        $category = -1;
    }
    if(!isset($Brands)) {
        $Brands = -1;
    }
    //dd($sRes);
    return view('store.product2')
        ->with('products', $sRes)          
        ->with("cat", $cat)
        ->with("bra", $bra)
        ->with("a", $category)
        ->with("b",$Brands);
}

}
