<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_users_root(): void
    {
        $response = $this->get('/api/users');
        $response->assertStatus(200);

        
        
    }

    public function test_users_root_not_found_404(): void{
        $response = $this->get('/api/asdasd');
        $response->assertStatus(404);
    }

    public function test_user_found(): void {
        $response = $this->get('/api/user/1');
        $response->assertStatus(200);
    }

    public function test_user_not_found_404(): void {
        $response = $this->get('/api/user/6565656565');
        $response->assertStatus(404);
    }

}
