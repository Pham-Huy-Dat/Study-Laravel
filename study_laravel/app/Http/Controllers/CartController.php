<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Slider;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Coupon;

session_start();

class CartController extends Controller
{
	public function save_add_cart(Request $request)
	{
		$productId = $request->IdProduct_hidden;
		$quantity = $request->qty;
		$product_info = DB::table('tbl_product')->where('id', $productId)->first();
		
		$data['id'] = $productId;
		$data['qty'] = $quantity;
		$data['name'] = $product_info->name_product;
		$data['price'] = $product_info->price;
		$data['weight'] = $product_info->price;
		$data['options']['image'] = $product_info->image;

		Cart::add($data);
		// session()->put('c art', $data);
		return Redirect::to('/show-to-cart');
		//Cart::destroy();
	}

	public function show_to_cart(Request $request)
	{
		return view('cart.showToCart');
	}

	public function delete_product($rowId){
		Cart::update($rowId, 0);
		return Redirect::to('/show-to-cart')->with('message', 'Xóa sản phẩm thành công');
	}

	public function save_checkout_customer(Request $request){
		$data = array();

		//info customer
		$data['id_customer'] = Session::get('customer_id');
		$data['date_time'] = $request->date();
		$data['name_customer'] = $request->NameCus;
		$data['address'] = $request->commune + ' ' + $request->district + ' ' + $request->city;
		$data['phone'] = $request->phone;
		$data['email'] = $request->email;
		$data['is_status'] = 1;
		// info order
		$data['total_money'] = Cart::total();
		$order_id = DB::table('tbl_order')->insertGetId($data);

		$content = Cart::content();
		// $data_details = array();
		foreach ($content as $key => $val) {
			$data_details['id_order'] = $order_id;
			$data_details['id_product'] = $val->id;
			$data_details['price_sale'] = $val->price;
			$data_details['quantity_number'] = $val->qty;
			DB::table('tbl_order_detail')->insert($data_details);
		}
		Cart::destroy();

		return Redirect::to('/shopping_success');
	}

	public function shopping_success(){
		return view('cart.shopping_success');
	}
}