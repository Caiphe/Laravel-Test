<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_redirects_to_products()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password1234')
        ]);

        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => "password1234"
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/products');
    }

    public function test_unauthenticated_user_cannot_access_product()
    {
        $response = $this->get('/products');
        $response->assertStatus(302);
        $response->assertRedirect('login');
    }
}
