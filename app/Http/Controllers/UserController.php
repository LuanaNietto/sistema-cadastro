<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function listUser()
    {
    	
    	/*$user = new User(); 
    	$user-> name = 'luana nietto';
    	$user-> email = 'niettoluana@gmail.com';
    	$user-> password = '1234';
    	$user->save();*/

    	//echo "<h1> Listagem de usuário </h1>";
    	/*$user = User::where('id','=', 1)->first();
    	return view('listUser') -> with (['userlist', $user]);
*/
    }
}
