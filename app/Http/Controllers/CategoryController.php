<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
   public function index()
   {
      return view('admin.add_category');
   }
   public function all_category()
   {
    // $this->AdminAuthCheck();
    $all_category_info=DB::table('tbl_category')->get();
    $manage_category=view('admin.all_category')
        ->with('all_category_info',$all_category_info);
    return view('admin_layout')
        ->with('admin.all_category',$manage_category);
     //return view('admin.all_category');

    ///   return view('admin.all_category');
   }
   public function save_category(Request $request)
   {
      $data=array();
     $data['category_id']=$request->category_id;
     $data['category_name']=$request->category_name;
     $data['category_description']=$request->category_description;
     $data['category_status']=$request->category_status;

    //  echo "<pre>";
    //   print_r($data);
    //  echo "</pre>";

    DB::table('tbl_category')->insert($data);
    Session::put('message','Category add successfully');
    return Redirect::to('/add-category');

   }
   public function deactive_category($category_id)
   {
    DB::table('tbl_category')
    ->where('category_id',$category_id)
    ->update(['publication_status' => 0]);
     Session::put('message','Category Unactive successfully !! ');
    return Redirect::to('/all-category');
   }
   public function active_category($category_id)
   {
    DB::table('tbl_category')
    ->where('category_id',$category_id)
    ->update(['publication_status' => 1]);
     Session::put('message','Category Active successfully !! ');
    return Redirect::to('/all-category');
   }
}
