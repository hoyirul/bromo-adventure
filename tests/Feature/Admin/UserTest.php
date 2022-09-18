<?php

namespace Tests\Feature\Admin;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_table_users(){
        $this->assertDatabaseHas('users', [
            'email' => 'admin@gmail.com'
        ]);
    }

    public function test_login_page()
    {
        $response = $this->get('/login');
        
        $response->assertSeeText('Sign in');
        $response->assertSeeText('Email');
        $response->assertSeeText('Password');
        $response->assertStatus(200);
    }

    public function test_user_must_fill_valid_email_address()
    {
        $response = $this->followingRedirects()->post('/login', [
            'email' => '',            
            'password' => '12345678',
        ]);

        $response->assertStatus(200);
    }
}
