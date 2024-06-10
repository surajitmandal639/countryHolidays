<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

use App\Models\User;

class UserController extends Controller
{
    public function login(){
		$data['title'] = 'Login';
		
		return view('auth.login')->with($data);
	}
	
	public function saveLogin(Request $request){
		$u = User::where('email', $request->email)->where('type', 1)->first();

		if(empty($u)){
			return redirect('/admin')->with('error', 'Password or email invalid!!');
		}
		
		if (!Hash::check($request->password, $u->password)) {
			return redirect('/admin')->with('error', 'Password or email invalid!!');
		}

		Auth::guard('admin')->login($u);		
		return redirect('/admin/dashboard')->with('message', 'Wellcome to dashboard..');
							
	}
	
	public function userList(){
		$data['title'] = 'Users';
		
		return view('admin.users')->with($data);
	}
	
	
	public function logout(){
			Auth::guard('admin')->logout();
			return redirect('/admin')->with('success', 'You have logout successfully..');			
		}

	//FRONT USER
	public function reg(){
		$data['title'] = 'Registation From';
		
		return view('register')->with($data);
	}
	
	public function saveReg(Request $request){
		//dd($request->all());
		$u = new User;
 
        $u->name = $request->name;		
        $u->email = $request->email;		
		$u->type = 101;
		//dd($u->password.'-'.$u->confrim_password);
		if ($request->password == $request->confrim_password) {
			$u->password = Hash::make($request->password);
			$u->save();
			return redirect('/account')->with('success', 'You have registered successfully.');
		} else {
			return redirect('/register')->with('error', 'Passwords do not match');
		}

   
	}
	
	public function userLogin(){
		$data['title'] = 'Login';
		
		return view('login')->with($data);
	}
	
	public function authUserLogin(Request $request){
	
		$u101 = User::where('email', $request->email)->where('type', 101)->first();
		if(empty($u101)){
			return redirect('/account')->with('error', 'Password or email invalid!!');
		}

		if (!Hash::check($request->password, $u101->password)) {
			return redirect('/account')->with('error', 'Password or email invalid!!');
		}

		Auth::login($u101);    
		return redirect('/')->with('success', 'You have successfully logged in.');
							

	}
	
	public function logoutUser(){
		Auth::logout();
		return redirect('/')->with('success', 'You have logout successfully..');
	}
	
	
	public function showProfile(){
		if(Auth::guard('admin')->check()){
			$a_id = Auth::guard('admin')->user()->id;
			$data['title'] = 'profile';
			if(!empty($a_id)){				
				$data['user'] = User::where('id', $a_id)->first();
			}
			return view('admin.profile')->with($data);
		}
		
		if(Auth::guard('web')->check()){			
			$u_id = Auth::guard('web')->user()->id;			
			$data['title'] = 'profile';
			if(!empty($u_id)){				
				$data['user'] = User::where('id', $u_id)->first();
			}			
			return view('profile')->with($data);
		}
		
		
		
	}
	
	
}
