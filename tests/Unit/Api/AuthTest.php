<?php

namespace Tests\Unit\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User; 

class AuthTest extends TestCase
{
    public function testRegister()
    {
        User::where('email','admin@gmail.com')->delete();

        $response = $this->json('POST', '/api/register', [
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'password'      => 'admin123',
            'c_password'    => 'admin123'
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'   => [
                    'token' => true
                ]
            ]);
    }
    /**
     * A test for signin a api with laravel passport
     * credentials
     * @return void
     */
    public function testSignin()
    {
        $response = $this->json('POST', '/api/login', [
            'email'         => 'admin@gmail.com',
            'password'      => 'admin123'
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'success'   => [
                    'token' => true
                ]
            ]);
    }

   
}
