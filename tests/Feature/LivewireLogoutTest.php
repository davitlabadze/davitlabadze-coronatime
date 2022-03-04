<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireLogoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function is_redirected_if_user_has_logged_out()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
         ->test('logout')
         ->call('logout')
         ->assertRedirect('/login?en');
    }

    /** @test */
    public function is_redirected_if_already_logged_out()
    {
        $this->get(route('worldwide'))->assertRedirect('login?en');
    }
}
