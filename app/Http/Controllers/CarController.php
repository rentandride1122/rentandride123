<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class CarController extends Controller
{
    public function view_car(){
    	$cars = \App\Car::where('type','company')->orderBy('created_at','DESC')->paginate(5);
        $cars_count = \App\Car::where('type','company');
        return view('admin/view_car',compact('cars','cars_count'));
    }
    public function view_private_cars(){
        $cars = \App\Car::where('type','private')->orderBy('created_at','DESC')->paginate(5);
        $cars_count = \App\Car::where('type','private');
        return view('admin/view_private_car',compact('cars','cars_count'));
    }
    public function addCar(){
        return view('admin/addCar');
    }

    public function storeCar(Request $r){
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
        $car->user_type = 'admin';
    	$car->save();

    	return redirect('/admin/car')->with('msg','Car added successfully');



    }
    public function edit_car($id){

        $car = \App\Car::find($id);
        return view('admin/edit_car',compact('car'));
        
    }
    public function update(Request $r){
    	$validations = array(
    		'name' => 'required',
    		'model' => 'required',
    		'price' => 'required|integer',
    		'capacity' => 'required|integer',
    		'description' => 'required',
    		'image' => 'mimes:jpeg,bmp,png,gif|max:800'
    	);
    		$r->validate($validations);
    		$id = $r->get('id');
    		$oldimage = $r->get('oldimage');

    		$car = \App\Car::find($id);
    		if($r->hasFile('image'))
        	{
            $file = $r->file('image');
            $name = date('ymdhis').$file->getClientOriginalName();
            $path = public_path().'/uploads/';
            $file->move($path,$name);
            $car->image = $name;

            $image_path = public_path()."/uploads/".$oldimage;
        	
        	File::delete($image_path);

        	}

        $car->car_name = $r->get('name');
    	$car->car_model = $r->get('model');
    	$car->price = $r->get('price');
    	$car->car_description = $r->get('description');
		$car->type = $r->get('type');
    	$car->capacity = $r->get('capacity');
        $car->fuel_type = $r->get('fuel_type');
        $car->aircondition = $r->get('ac');
    	$car->save();

    	return redirect('/admin/car/view')->with('msg','Updated successfully');

    }

    public function delete(Request $r)
    {
        $id = $r->get('id');
        $car = \App\Car::find($id);
        $image_path = public_path()."/uploads/".$car['image'];
        if(File::exists($image_path)) {
        File::delete($image_path);
        }
        $car->delete();
        return redirect('admin/car/view')->with('msg','Car deleted');
    }


}
