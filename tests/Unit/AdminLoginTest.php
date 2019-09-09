<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class AdminLoginTest extends TestCase
{

    /**
     * The login form can be displayed.
     *
     * @return void
     */

    public function testLoginFormDisplayed()
    {
        $response = $this->get('/admin/login');

        $response->assertStatus(200);
    }

    /**
     * A valid user can be logged in.
     *
     * @return void
     */

    public function testLoginAValidUser()
    {
        $user = factory(User::class)->create();

        $response = $this->post('/admin/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertStatus(302);

        $this->assertAuthenticatedAs($user);
    }



    // public function testLoginTest(){
    // 	$hashed = Hash::make('test', [
				// 	    'rounds' => 12
				// 	]);
    // 	$response = $this->call('POST', '/login'[
    // 		'email' => 'test@test.com',
    // 		'password' => $hashed
    // 	]);
    // 	// $this->assertTrue(true);
    // 	$this->assertEquals(200, $response->getStatusCode());
    // 	// $this->assertEquals('auth.login', $response->original->name());
    // }

    // public function testRegisterTest()
    // {
    // 	$hashed = Hash::make('test', [
				// 	    'rounds' => 12
				// 	]);
    // 	$register = User::create([
    // 					'name' => 'aslan',
    // 					'email'=> 'test@gmail.com',
    // 					'password' => $hashed,
				// 	]);
    // 	$this->assertEquals('aslan', $register->name);
    // }

}
