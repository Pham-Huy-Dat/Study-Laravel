<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Account;
use DB;
use Session;

class AccountController extends Controller
{
	public function login()
	{
		return view('Account.login');
	}
	public function userLogin(Request $request)
	{
		$user = Account::where('user_name', $request->user_name)->first();
		$loginFail = redirect()
			->back()
			->with("login-err-msg", "Tên đăng nhập hoặc tài khoản không hợp lệ");
		if ($user == null) {
			return $loginFail;
		}
		$result = Account::where('user_name', $request->user_name)->where('password', md5($request->password))->first();
		if ($result) {
			$request->session()->regenerate();
			Session::put('customer_id', $user->id);
			Session::put('username', $user->user_name);
			return redirect::to('/');
		} else {
			return $loginFail;
		}

		// $userData = [
		// 	'user_name' => $request->user_name,
		// 	'password' => $request->password
		// ];
		// if (Auth::attempt($userData)) {
		// 	$request->session()->regenerate();
		// 	Session::put('customer_id', $user->id);
		// 	return redirect('/');
		// } else {
		// 	return $loginFail;
		// }
	}
	public function logout(Request $request)
	{
		// Auth::logout();
		// $request->session()->invalidate();
		// $request->session()->regenerateToken();
		Session::forget('customer_id');
		Session::forget('username');

		// return redirect()->route('login');
		return Redirect::to('/login');
	}

	public function register()
	{
		return view('Account.register');
	}
	
	public function save(Request $request)
	{
		$data = $request->all();
		$rules = [
			"full_name" => ['required'],
			"user_name" => ['required', 'unique:users'],
			"email" => ['required', 'email', 'unique:users'],
			"phone" => ["required"],
			'password' => ['required', 'min:4'],
			'cf_password' => ['same:password'],
		];
		$fields = [
			'full_name' => 'Họ và tên',
			'user_name' => "Tên tài khoản",
			'email' => "Email",
			"phone" => "Số điên thoại",
			'password' => "Mật khẩu",
			"cf_password" => "Xác nhận mật khẩu"
		];
		$this->customValidate($request);

		//hash mk
		$data["password"] = md5($data["password"]);
		$user = new Account($data);
		$user->save();
		return redirect()->to("/login");
	}

	private function customValidate(Request $request)
	{
		$rules = [
			"user_name" => ["required", "min:4"],
			"password" => ["required", "min:4", "same:cf_password"],
			"cf_password" => ["required"],
			// "email" => ["required", "unique:user_name" ],
			// "phone" => ["required", "min:10", "max:10"]
		];
		$request->validate($rules);
	}
}