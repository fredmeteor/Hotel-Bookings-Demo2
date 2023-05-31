<?php

namespace Tests\Feature;

use App\Models\Role;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_user_has_access_to_bookings_feature()
    {
        $owner = User::factory()->create(['role_id' => Role::ROLE_USER]);
        $response = $this->actingAs($owner)->getJson('/api/user/bookings');

        $response->assertStatus(200);
    }

    public function test_property_owner_does_not_have_access_to_bookings_feature()
    {
        $owner = User::factory()->create(['role_id' => Role::ROLE_OWNER]);
        $response = $this->actingAs($owner)->getJson('/api/user/bookings');

        $response->assertStatus(403);
    }
}
