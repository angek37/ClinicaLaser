<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class authentication extends Controller
{
    public function signin(Request $request)
	{
		$user = User::where('name', $request->name) -> where('password', $request->password) -> get();
		if(count($user) > 0){
			session(['Rol' => $user[0]->Rol]);
			return redirect('panel');
		}else{
			return view('welcome');
		}
	}

	public function logout(){
		session(['Rol' => null]);
		return redirect('/');
	}
}
