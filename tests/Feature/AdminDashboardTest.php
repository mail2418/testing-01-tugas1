<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminDashboardTest extends TestCase
{
    public function test_admin_can_access_dashboard()
    {
        $user = User::query()->first();
        $this->actingAs($user)
        ->withSession(['is_admin'=>1])
        ->get('/admin')
        ->assertStatus(200);
    }
    public function test_user_cant_see_profile_if_not_authenticated(){
        $response = $this->get('/app/profile');
        $response->assertStatus(302);
        $response->assertRedirect("/login");
    }
    
}
