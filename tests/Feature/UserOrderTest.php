<?php

namespace Tests\Feature;

use App\Models\BallType;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserOrderTest extends TestCase
{
    use WithFaker;

    public function test_detail_view_returns_redirect()
    {
        // fake
        $fieldId = $this->faker->numberBetween(1, 10);

        // act
        $response = $this->get("/order/{$fieldId}");

        // assert
        $response->assertStatus(302);
    }

    public function test_detail_order_if_authenticated()
    {
        $this->withoutExceptionHandling();

        $user = User::query()->first();
        $this->actingAs($user);

        $field = BallType::query()->first();

        $response = $this->get('/detail/1');

        $response->assertSee($field->name);
        $response->assertStatus(200);
        $response->assertViewIs('user.order.detail');
    }
}
