<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTransactionTest extends TestCase
{
    public function test_order_not_authenticated()
    {
        $id = 1;
        $response = $this->get("transaction/order/{$id}");
        $response->assertStatus(302);
        $response->assertRedirect("/login");
    }
}
