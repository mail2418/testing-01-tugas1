<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\FutsalField;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    public function test_user_can_see_field_dashboard()
    {
        $field = FutsalField::query()->first();

        $response = $this->get('/');

        $response->assertSee($field->name);
        $response->assertStatus(200);
    }
    public function test_user_can_see_profile_if_authenticated(){
        $user = User::query()->first();
        $this->actingAs($user);

        $response = $this->get('app/profile');
        $response->assertSee($user->email);
        $response->assertStatus(200);
    }
}
