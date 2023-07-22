<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

session_start();

class AdminController extends Controller
{
	public function index(){
		return view('Admin.index');
	}
	public function login_admin()
	{
		return view('Admin.account.login');
	}

	public function store_login(Request $request)
	{
		$email_admin = $request->Email;
		$password_admin = $request->password;

		$admin = DB::table('tbl_admin_account')->where('user_name', $$email_admin)->first();

		$loginFail = redirect()
			->back()
			->with("login-err-msg", "Email hoặc mật khẩu không hợp lệ");
		if ($admin == null) {
			return $loginFail;
		}
		$result = DB::table('tbl_admin_account')->where('user_name', $email_admin)->where('password', $password_admin)->first();

		if ($result) {
			$request->session()->regenerate();
			Session::put('customer_id', $admin->user_name);
			return redirect::to('/admin-product');
		} else {
			return $loginFail;
		}

		$userData = [
			'user_name' => $request->Email,
			'password' => $request->password
		];

		if (Auth::attempt($userData)) {
			$request->session()->regenerate();
			Session::put('customer_id', $user->id);
			return redirect('/admin-product');
		} else {
			return $loginFail;
		}
	}
	public function logout_admin(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		Session::forget('customer_id');
		// return redirect()->route('login');
		return Redirect::to('/login_admin');
	}

	public function show_product()
	{
		$data = DB::table('tbl_product')->orderBy('id', 'desc')->orderBy('id_category', 'asc')->get()->paginate(10);
		return view('Admin.product.index')->with('data', $data);
	}
	public function add_product(Request $request)
	{

		return Redirect::to('/show_product');
	}
	public function view_add_product(Request $request)
	{
		return view('Admin.product.add_product');
	}
	public function edit_product($id)
	{

	}
	public function view_edit_product(Request $request)
	{
		return view('/Admin.product.edit_product');
	}
	public function delete_product($id)
	{

	}


}