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
}
