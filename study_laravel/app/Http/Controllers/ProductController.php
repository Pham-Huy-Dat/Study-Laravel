<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use DB;

class ProductController extends Controller
{
	public function iphone(Request $request)
	{
		// $data = DB::table('tbl_product')->where('id_category', 1)->orderby('id', 'asc')->paginate(10);
		$data = Product::where('id_category', 1)->orderby('id', 'asc')->paginate(12);
		return view('products.iphone')->with('iphone', $data);
	}

	public function ipad()
	{
		// $data = Product::where('id_category', 2)->orderBy('id', 'asc')->paginate(10);
		$data = DB::table('tbl_product')->where('id_category', 2)->orderBy('id', 'asc')->paginate(12);
		return view('products.ipad')->with('ipad', $data);
	}
	
	public function mac()
	{
		$data = DB::table('tbl_product')->where('id_category', 3)->orderBy('id', 'asc')->paginate(10);
		return view('products.mac')->with('mac', $data);
	}
	
	public function sound()
	{
		$data = DB::table('tbl_product')->where('id_category', 5)->orderBy('id', 'asc')->paginate(10);
		return view('products.sound')->with('sound', $data);
	}

	public function watch()
	{
		$data = DB::table('tbl_product')->where('id_category', 4)->orderBy('id', 'asc')->paginate(10);
		return view('products.watch')->with('watch', $data);
	}

	public function detail_product(Request $request, $id)
	{
		$detail = DB::table('tbl_product')->where('id', $id)->get();
		foreach($detail as $key => $item){
			$title = $item->name_product;
			$list_product = DB::table('tbl_product')->whereNot('id', $id)->where('id_category', $item->id_category)->orderBy('id', 'desc')->take(4)->get();
		}
		return view('products.detail')->with('detail_product', $detail)->with('title', $title)->with('list_product', $list_product);
	}
}