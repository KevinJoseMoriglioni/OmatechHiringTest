<?php

namespace Tests\Feature;

use App\Models\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_redirect_to_dashboard_home_successfully(){
        User::factory()->create([
            'email' => 'test@gmail.com',
            'password'=>bcrypt('Tester12')
        ]);

        $response = $this->post('/login', [
            'email' => 'test@gmail.com',
            'password'=>'Tester12'
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/home');
    }

    public function test_unauthenticated_user_cannot_access_dashboard_home(){
        $response = $this->get('/home');
        $response->assertStatus(302);
        $response->assertRedirect('/login');
    }
}
