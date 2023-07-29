<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;;
use DB;
use Session;

session_start();

class AdminController extends Controller
{
	public function index()
	{
		$this->AuthLogin();
		return view('Admin.index');
	}
	public function login_admin()
	{
		return view('Admin.account.login');
	}
	public function store_login(Request $request)
	{
		$data = $request->all();
		unset($data["_token"]);
		$admin_email = $data['Email'];
		$admin_password = md5($data['password']);

		$login = DB::table('tbl_admin_account')->where('email', $admin_email)->where('password', $admin_password)->first();
		if ($login) {
			Session::put('admin_name', $login->admin_name);
			Session::put('admin_id', $login->id);
			return Redirect::to('/admin');

		} else {
			Session::put('message', 'Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
			return Redirect::to('/login_admin');
		}
	}
	public function logout()
	{
		$this->AuthLogin();
		Session::put('admin_name', null);
		Session::put('admin_id', null);
		return Redirect::to('/login_admin');
	}

	public function AuthLogin()
	{
		$admin_id = Session::get('admin_id');
		if ($admin_id) {
			return Redirect::to('/admin');
		} else {
			return Redirect::to('/login_admin')->send();
		}
	}

	public function show_product()
	{
		$this->AuthLogin();
		$data = Product::orderby('id_category', 'asc')->orderBy('id', 'desc')->paginate(10);
		$id_category = DB::table('tbl_category')->get();
		return view('Admin.product.show_product')->with('data', $data)->with('IdCategory', $id_category);
	}
	public function add_product(Request $request)
	{
		$this->AuthLogin();
		$data = array();
		$data['name_product'] = $request->Name_product;
		$data['price'] = $request->Price;
		$data['discount'] = $request->Discount;
		$data['description'] = $request->Discription;
		$data['description2'] = $request->Discription2;
		$data['id_category'] = $request->IdCategory;
		$data['image'] = $request->IdCategory;
		$data['image2'] = $request->IdCategory;
		$data['image3'] = $request->IdCategory;

		$get_image1 = $request->file('Image');
		$get_image2 = $request->file('Image_description');
		$get_image3 = $request->file('Image_description2');

		if($get_image1 || $get_image2 || $get_image3) {
			$get_name_image1 = $get_image1->getClientOriginalName();
			$get_name_image2 = $get_image2->getClientOriginalName();
			$get_name_image3 = $get_image3->getClientOriginalName();

			$name_image1 = current(explode('.', $get_name_image1));
			$name_image2 = current(explode('.', $get_name_image2));
			$name_image3 = current(explode('.', $get_name_image3));

			$new_image1 = 'upload/product/' . $name_image1 . rand(0, 99) . '.' . $get_image1->getClientOriginalExtension();
			$new_image2 = 'upload/product/' . $name_image2 . rand(0, 99) . '.' . $get_image2->getClientOriginalExtension();
			$new_image3 = 'upload/product/' . $name_image3 . rand(0, 99) . '.' . $get_image3->getClientOriginalExtension();

			$get_image1->move('frontend/upload/product', $new_image1);
			$get_image2->move('frontend/upload/product', $new_image2);
			$get_image3->move('frontend/upload/product', $new_image3);

			$data['image'] = $new_image1;
			$data['image2'] = $new_image2;
			$data['image3'] = $new_image3;

			// DB::table('tbl_product')->insert($data);
			// Session::put('message', 'Thêm sản phẩm thành công');
			// return Redirect::to('add-product');
		}
		// $data['image'] = '';
		// $data['image2'] = '';
		// $data['image3'] = '';
		DB::table('tbl_product')->insert($data);
		Session::put('message', 'Thêm sản phẩm thành công');
		return Redirect::to('/show_product');
	}

	public function view_add_product(Request $request)
	{
		$this->AuthLogin();
		$id_category = DB::table('tbl_category')->orderBy('id', 'asc')->get();
		return view('Admin.product.add_product')->with('id_category', $id_category);
	}
	public function edit_product(Request $request, $id)
	{
		$this->AuthLogin();
		$data = array();
		$old_data = DB::table('tbl_product')->where('id', $id)->first();
		$data['name_product'] = $request->Name_product;
		$data['price'] = $request->Price;
		$data['discount'] = $request->Discount;
		$data['description'] = $request->Discription;
		$data['description2'] = $request->Discription2;
		$data['id_category'] = $request->IdCategory;

		$data['image'] = $old_data->image;
		$data['image2'] = $old_data->image2;
		$data['image3'] = $old_data->image3;
		$get_image1 = $request->Image;
		$get_image2 = $request->Image_description;
		$get_image3 = $request->Image_description2;

		$get_image1 = $request->file('Image');
		$get_image2 = $request->file('Image_description');
		$get_image3 = $request->file('Image_description2');

		if ($get_image1 || $get_image2 || $get_image3) {
			$get_name_image1 = $get_image1->getClientOriginalName();
			$get_name_image2 = $get_image2->getClientOriginalName();
			$get_name_image3 = $get_image3->getClientOriginalName();

			$name_image1 = current(explode('.', $get_name_image1));
			$name_image2 = current(explode('.', $get_name_image2));
			$name_image3 = current(explode('.', $get_name_image3));

			$new_image1 = 'upload/product/' . $name_image1 . rand(0, 99) . '.' . $get_image1->getClientOriginalExtension();
			$new_image2 = 'upload/product/' . $name_image2 . rand(0, 99) . '.' . $get_image2->getClientOriginalExtension();
			$new_image3 = 'upload/product/' . $name_image3 . rand(0, 99) . '.' . $get_image3->getClientOriginalExtension();

			$get_image1->move('frontend/upload/product', $new_image1);
			$get_image2->move('frontend/upload/product', $new_image2);
			$get_image3->move('frontend/upload/product', $new_image3);

			$data['image'] = $new_image1;
			$data['image2'] = $new_image2;
			$data['image3'] = $new_image3;
			DB::table('tbl_product')->where('id', $id)->update($data);
			Session::put('message', 'Cập nhật sản phẩm thành công');
			return Redirect::to('show_product');
		}

		DB::table('tbl_product')->where('id', $id)->update($data);
		Session::put('message', 'Cập nhật sản phẩm thành công');
		return Redirect::to('show_product');

	}
	public function view_edit_product(Request $request, string $id)
	{
		$this->AuthLogin();
		$edit_product = DB::table('tbl_product')->where('id', $id)->get();
		$id_category = DB::table('tbl_category')->orderBy('id', 'asc')->get();
		// $title = 'EDIT product'. ' ' . $edit_product->name_product;
		return view('Admin.product.edit_product')
			->with('edit_product', $edit_product)
			// ->with('title', $title)
			->with('id_category', $id_category);
	}

	public function delete_product(Request $request ,$id)
	{
		$this->AuthLogin();
		DB::table('tbl_product')->where('id', $id)->delete();
		Session::put('message', 'Xóa sản phẩm thành công');
		return Redirect::to('/show_product');
	}

	// Order
	public function order(Request $request){
		$this->AuthLogin();
		$all_order = dB::table('tbl_order')->orderBy('id', 'desc')->paginate(10);
		return view('Admin.order.order')->with('all_order', $all_order);
	}
	public function order_detail(Request $request, $id_order){
		$this->AuthLogin();
		$order_details = DB::table('tbl_order_details')->where('id_order', $id_order)->get();
		foreach($order_details as $key => $item){
			$info_list_product = DB::table('tbl_product')->where('id', $item->id_product)->get(); 
		}
		$info_order = DB::table('tbl_order')->where('id', $id_order)->get();
		// $info_product = DB::table('tbl_product')->where('id', $order_details->id_product)->first(); 
		return view('Admin.order.order_detail')
			->with('order_details', $order_details)
			->with('info_order', $info_order)
			->with('info_product', $info_list_product);
	}
	// duyệt đơn hàng
	public function order_browsing(Request $request, $id_order){
		$this->AuthLogin();
		$data = array();
		$data['id_status'] = 2;
		dB::table('tbl_order')->where('id', $id_order)->update($data);
		return Redirect::to('/order-admin');
	}
	// Hủy đơn hàng 
	public function cancel_order(Request $request, $id_order){
		$this->AuthLogin();
		$data = array();
		$data['id_status'] = 5;
		dB::table('tbl_order')->where('id', $id_order)->update($data);
		return Redirect::to('/order-admin');
	}

	// xóa đơn hàng
	public function delete_order(Request $request, $id_order){
		$this->AuthLogin();
		DB::table('tbl_order_details')->where('id_order', $id_order)->delete();
		DB::table('tbl_order')->where('id', $id_order)->delete();
		return Redirect::to('/order-admin');
	}
}
