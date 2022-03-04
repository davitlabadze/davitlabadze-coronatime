<?php

namespace Tests\Feature;

use App\Http\Livewire\Auth\SigninAfterConfirmationEmail;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireSigninAfterConfirmationEmailTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_sign_in_page()
    {
        $user = User::factory(User::class)->create();
        $response = $this->actingAs($user);
        $response = $this->get(route('signed'));
        $response->assertSuccessful();
    }

    /** @test */
    public function test_after_logout_show_login_page()
    {
        $user = User::factory(User::class)->create();

        Livewire::actingAs($user)
        ->test(SigninAfterConfirmationEmail::class)
        ->call('submit')
        ->assertRedirect(route('login'));
    }
}
