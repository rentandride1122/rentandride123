<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;

class UserController extends Controller
{
    public function register(){
    	return view('users/register');
    }
    public function login(){
    	return view('users/login');
    }

    public function logout(){

        auth()->logout();

        session()->flash('msg','logged out');
        return redirect('/user/index');
    }


    public function index(){
    	
        return view('users/index');
    }
    public function contact(){
        
        return view('users/contact');
    }
     public function about(){
        
        return view('users/about');
    }
    

    public function rent_your_car(){
        
        return view('users/rent_your_car');
    }

    public function view_car(){
        $cars = \App\Car::where('type','company')->orderBy('created_at','DESC')->paginate(5);
        return view('users/view_car',compact('cars'));
    }
    public function view_private_car(){
        $private_cars = \App\Car::where('type','private')->orderBy('created_at','DESC')->paginate(5);
        return view('users/view_private_car',compact('private_cars'));
    }

     public function store_your_car(Request $r){
        $validations = array(
            'name' => 'required',
            'model' => 'required',
            'price' => 'required|integer',
            'capacity' => 'required|integer',
            'description' => 'required',
            'image' => 'mimes:jpeg,bmp,png,gif|max:3500'
        );
        
        $r->validate($validations);

        $imgname = '';
        if ($r->hasfile('image')) {
            $file = $r->file('image');
            $imgname = date('ymdhis').$file->getClientOriginalName();
            $path = public_path().'/uploads/';
            $file->move($path,$imgname);
        }

        $car = new \App\Car;
        $car->car_name = $r->get('name');
        $car->car_model = $r->get('model');
        $car->price = $r->get('price');
        $car->car_description = $r->get('description');
        $car->type = $r->get('type');
        $car->capacity = $r->get('capacity');
        $car->image = $imgname;
        $car->fuel_type = $r->get('fuel_type');
        $car->aircondition = $r->get('ac');
        $car->user_type = Auth::user()->email;
        $car->save();

        return redirect('/user/rent_your_car')->with('msg','Car added successfully');



    }

     public function forum(){
        $comments = \App\Forum::orderBy('created_at','DESC')->get();
        
        return view('users/forum',compact('comments'));
    }

    public function comment(Request $r){
        $validations = array(
            'comment' => 'required'
        );
        $r->validate($validations);
        $forum = new \App\Forum;
        $forum->comment = $r->get('comment');
        $forum->user_id = Auth::user()->id;
        $forum->save();

        return redirect('user/forum');
    }
}
