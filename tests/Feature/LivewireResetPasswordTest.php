<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireResetPasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function email_fields_are_required_for_reset_password()
    {
        Livewire::test('auth.reset-password')
        ->set('email', '')
        ->call('submit')
        ->assertHasErrors([
            'email' => 'required',
        ]);
    }

    /** @test */
    public function can_send_email_with_correct_credentials()
    {
        $user = User::factory()->make();
        Livewire::test('auth.reset-password')
            ->set('email', $user->email)
            ->call('submit');
    }
}
