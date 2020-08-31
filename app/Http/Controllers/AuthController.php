<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     public function index(){

       return view('admin.home');
     }

    public function dashboard()
    {
    	if (Auth::check() === true) {
    		
    		return view('admin.dashboard');
    	} 	
    	return redirect()->route('admin.login');

    }
    public function showLoginForm()
    {
    	return view('admin.formLogin');
    }

    public function login(Request $request)
    {

      $credentials = [
      	'email' => $request->email, 
      	'password' => $request->password
      ];

     if ( Auth::attempt($credentials)) {
     	return redirect()->route('admin');
     }
     return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem']);
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('home');
    }

    public function addUser()
    {
        return view('admin.newUser');
    }

    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

         $credentials = [
        'email' => $request->email, 
        'password' => $request->password
      ];

     if ( Auth::attempt($credentials)) {
      return redirect()->route('admin');
     }
          
    }

  
}
