<?php

namespace Tests\Unit\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocalizationTest extends TestCase
{
    /**
     * test to get token passport to access the API
     *
     * @return void
     */
    public function testAuth()
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
        
        return [
            'Authorization'     => 'Bearer '.json_decode($response->getContent())->success->token,
            'Content-Type'      => 'application/x-www-form-urlencoded',
            'Accept'            => 'application/json'
        ];
    }

    /**
     * get api provinces with header from testAuth
     */
    public function testGetProvince(){
        $header  =  $this->testAuth();

        $response = $this->withHeaders($header)
                    ->json('GET', '/api/search/provinces');

        $response
            ->assertStatus(200)
            ->assertJson([
                [
                    'id'            => true,
                    'province_id'   => true,
                    'province'      => true,
                    'created_at'       => true,
                    'updated_at'    => true,
                ]
            ]);
    }

    /**
     * find api provinces id with header from testAuth
     */
    public function testFindProvince(){
        $header  =  $this->testAuth();

        $response = $this->withHeaders($header)
                    ->json('GET', '/api/search/provinces?id=1');

        $response
            ->assertStatus(200)
            ->assertJson(
                [
                    'id'            => true,
                    'province_id'   => true,
                    'province'      => true,
                    'created_at'       => true,
                    'updated_at'    => true,
                ]
            );
    }

    /**
     * get api cities with header from testAuth
     */
    public function testGetCity(){
        $header  =  $this->testAuth();

        $response = $this->withHeaders($header)
                    ->json('GET', '/api/search/cities');

        $response
            ->assertStatus(200)
            ->assertJson([
                [   
                    "id"            => true,
                    "city_id"       => true,
                    "province_id"   => true,
                    "province"      => true,
                    "type"          => true,
                    "city_name"     => true,
                    "postal_code"   => true,
                    "created_at"    => true,
                    "updated_at"    => true
                ]
            ]);
    }

    /**
     * get api find cities with header from testAuth
     */
    public function testFindCity(){
        $header  =  $this->testAuth();

        $response = $this->withHeaders($header)
                    ->json('GET', '/api/search/cities?id=1');

        $response
            ->assertStatus(200)
            ->assertJson(
                [   
                    "id"            => true,
                    "city_id"       => true,
                    "province_id"   => true,
                    "province"      => true,
                    "type"          => true,
                    "city_name"     => true,
                    "postal_code"   => true,
                    "created_at"    => true,
                    "updated_at"    => true
                ]
            );
    }
}
