<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;
use Validator;

class PasswordController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}

	public function changePassword(){
		return view('auth.passwords.change');
	}

	public function updatePassword(){
		Validator::extend('password', function ($attribute, $value, $parameters, $validator) {
			return Hash::check($value, \Auth::user()->password);
		});

		$messages = [
		'password' => 'Password Lama salah.',
		];

		$validator = Validator::make(request()->all(), [
			'current_password'      => 'required|password',
			'password'              => 'required|min:6|confirmed',
			'password_confirmation' => 'required',

			], $messages);

		if ($validator->fails()) {
			return redirect()
			->back()
			->withErrors($validator->errors());
		}

		$user = User::find(Auth::id());

		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('/change-password')->withSuccess('Password berhasil di ubah.');
	}
}
