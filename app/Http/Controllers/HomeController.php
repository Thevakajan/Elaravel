<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        $all_public_product = DB::table('tbl_products')
            ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
            ->join('tbl_manufacture', 'tbl_products.manufacture_id', '=', 'tbl_manufacture.manufacture_id')
            ->select('tbl_products.*', 'tbl_category.category_name', 'tbl_manufacture.manufacture_name')
            ->limit(9)
            ->where('tbl_products.publication_status',1)
            ->get();


        $manage_public_product = view('pages.home')
            ->with('all_public_product', $all_public_product);
        return view(' layout')
            ->with('pages.home', $manage_public_product);
    }

    public function show_product_by_category($category_id)
    {
     $product_by_ma = DB::table('tbl_products')
            ->join('tbl_category', 'tbl_products.category_id', '=', 'tbl_category.category_id')
            ->select('tbl_products.*', 'tbl_category.category_name')
            ->where('tbl_category.category_id',$category_id)
            ->where('tbl_products.publication_status',1)
           ->limit(18)
            ->get();


        $manage_product_by_category = view('pages.category_by_product')
            ->with('product_by_category', $product_by_category);
        return view('layout')
            ->with('pages.category_by_product', $manage_product_by_category  );
    }
    /////product 
     public function show_product_by_manufacture($manufacture_id)
    {
      $product_by_manufacture=DB::table('tbl_products')
                     ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                     ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
                     ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
                     ->where('tbl_manufacture.manufacture_id',$manufacture_id)
                     ->where('tbl_products.publication_status', 1)
                     ->limit(18)
                     ->get();
       $manage_product_by_manufacture=view('pages.manufacture_by_products')
               ->with('product_by_manufacture',$product_by_manufacture);
       return view('layout')
               ->with('pages.manufacture_by_products',$manage_product_by_manufacture); 
    }
}
