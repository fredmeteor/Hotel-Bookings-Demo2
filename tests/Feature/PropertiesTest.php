<?php

namespace Tests\Feature;

use App\Models\Role;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PropertiesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_property_owner_has_access_to_properties_feature()
    {
        
        // $owner = User::factory()->create(['role_id' => Role::ROLE_OWNER]);
        // $response = $this->actingAs($owner)->getJson('/api/owner/properties');

        // $response->assertStatus(200);
        $this->markTestIncomplete('Pending Test');
        
    }

    public function test_user_does_not_have_access_to_properties_feature()
    {
        // $owner = User::factory()->create(['role_id' => Role::ROLE_USER]);
        // $response = $this->actingAs($owner)->getJson('/api/owner/properties');

        // $response->assertStatus(403);
        $this->markTestIncomplete('Pending Test');
    }
}
