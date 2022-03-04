<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LivewireSuccessfullyUpdatedPasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_successfuly_updated_password_page()
    {
        $user = User::factory(User::class)->create();
        $response = $this->actingAs($user);
        $response = $this->get(route('password.update'));
        $response->assertSuccessful();
    }
}
