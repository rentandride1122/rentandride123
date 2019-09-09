<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Car;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function testExample()
    // {
    //     $this->assertTrue(true);
    // }

    public function testInsertCar(){
    	$data = [
    		'car_name' => 'rudra',
    		'car_model' => 'test model',
    		'car_description' => 'car',
    	];

    	$car = \App\Car::create($data);
    	$this->assertInstanceOf(\App\Car::class, $car);
    	$this->assertEquals($data['car_name'], $car->name);
    }
}
