<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $iphone = DB::table('tbl_product')->where('id_category', 1)->orderby('id', 'asc')->take(4)->get();
        $ipad = DB::table('tbl_product')->where('id_category', 2)->orderby('id', 'desc')->take(4)->get();
        $watch = DB::table('tbl_product')->where('id_category', 4)->orderby('id', 'desc')->take(4)->get();
        $mac = DB::table('tbl_product')->where('id_category', 3)->orderby('id', 'desc')->take(4)->get();
        $sound = DB::table('tbl_product')->where('id_category', 5)->orderby('id', 'desc')->take(4)->get();

        return view('home.index')->with('iphone', $iphone)->with('ipad', $ipad)->with('mac', $mac)->with('watch', $watch)->with('sound', $sound);
    }
    public function search(){
        return view('home.search');
    }

    public function error_404(){
        return view('error.404');
    }
}
