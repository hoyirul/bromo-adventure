<?php

namespace Tests\Unit\Admin;

use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_successfully()
    {
        $response = $this->call('POST', '/login', [
            'email' => 'admin@gmail.com',
            'password' => Hash::check('12345678','12345678')
        ]);
        
        $response->assertStatus($response->status(), 200);
    }
}
