<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Redirect;

class authentication extends Controller
{
    public function signin(Request $request)
	{
		$user = User::where('name', $request->name) -> where('password', $request->password) -> get();
		if(count($user) > 0){
			session(['Rol' => $user[0]->rol]);
			return redirect('panel');
		}else{
			$date = \Carbon\Carbon::parse($request->current_date);
			$day = $date->day;
			$month = $date->month;
			$year = $date->year;

			return Redirect::back()
			->with(['db' => $date])
			->with('error','La clave de acceso es incorrecta');
		}
	}

	public function logout(Request $request){
		session(['Rol' => null]);
		$date = \Carbon\Carbon::parse($request->current_date);
		$day = $date->day;
		$month = $date->month;
		$year = $date->year;

		return view('welcome', ['db' => $date]);
	}
}
