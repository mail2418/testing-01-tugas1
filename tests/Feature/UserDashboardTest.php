<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDashboardTest extends TestCase
{
    public function test_user_can_access_dashboard()
    {
        $this->get('/')
            ->assertViewIs('user.dashboard')
            ->assertViewHas('futsal_fields')
            ->assertStatus(200);
    }
}
