<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;

class AdminController extends Controller
{
    public function login(){
    	return view('admin/login');
    }
    public function index(){
    	return view('admin/index');
    }
    public function profile(){
    	return view('admin/profile');
    }


    public function view_users(){
        $count_users = \App\User::where('user_type',null);
        $users = \App\User::where('user_type',null)->orderBy('created_at','DESC')->paginate(5);
        return view('admin/view_users',compact('users','count_users'));
    }
     public function delete_user(Request $r)
    {
        $id = $r->get('id');
        $user = \App\User::find($id);
        $user->delete();
        return redirect('admin/view/users')->with('msg','User deleted');
    }
   
   



    public function reg(){
    	return view('reg');
    }

    public function regPost(Request $r){
    	$data['name'] = $r->get('name');
    	$data['email'] = $r->get('email');
    	$data['password'] = bcrypt($r->get('password'));
    	
    	$user = \App\User::create($data);
        auth()->login($user);

    	return redirect('/admin/reg')->with('msg','registration successful');

    }

    public function loginProcess(Request $r)
    {
        //email and password parameter,
        $data['email'] = $r->get('email');
        $data['password'] = $r->get('password');
        $data['user_type'] = $r->get('user_type');

      
        	if(Auth::attempt($data) == false)
        {
            return redirect('/admin/login')->with('msg','Invalid email/password');
        }
       return redirect('/admin/index')->with('msg','Login Successful');

        
    }

    public function change_password(Request $r){
        $old = $r->get('opassword');
        $new = $r->get('newpassword');
        $cnew = $r->get('cnewpassword');


         if($new != $cnew)
        {
             return redirect('admin/profile')->with('msg','Confirm password did not match');
        }


        $email = $r->get('email');
        $user_type = $r->get('user_type');
         

            $user = Auth::user();

            if ($email == $user['email'] && $user_type == $user['user_type']) {
                if(!Hash::check($old,$user['password']))
                {
                     return redirect('admin/profile')->with('msg','Old Password did not match');
                }
                $user = Auth::user();
                $user->password = bcrypt($new);
                $user->save();
                return redirect('admin/login')->with('msg','Password changed successfully');
            }
           return redirect('admin/profile')->with('msg','Error');
                

    

    }

    public function logout(){
            auth()->logout();
            return redirect('/admin/login')->with('msg','Logged Out');
    }
}
