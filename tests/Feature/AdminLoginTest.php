<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminLoginTest extends TestCase
{
   

    /** @test */
    public function open_dashboard_only_after_admin_login(){
       $response = $this->get('/admin/index')->assertRedirect('/admin/login');
    }
}
