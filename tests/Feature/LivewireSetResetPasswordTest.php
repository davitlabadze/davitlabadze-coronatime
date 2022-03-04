<?php

namespace Tests\Feature;

use App\Http\Livewire\Auth\SetResetPassword;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Password;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireSetResetPasswordTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function email_fields_are_required_for_set_reset_password()
    {
        Livewire::test('auth.set-reset-password')
         ->set('email', '')
         ->call('submit')
         ->assertHasErrors([
             'email' => 'required',
         ]);
    }

    /** @test  */
    public function token_fields_are_required_for_set_reset_password()
    {
        Livewire::test('auth.set-reset-password')
          ->set('token', '')
          ->call('submit')
          ->assertHasErrors([
              'token' => 'required',
          ]);
    }

    /** @test  */
    public function password_fields_are_required_for_set_reset_password()
    {
        Livewire::test('auth.set-reset-password')
          ->set('password', '')
          ->call('submit')
          ->assertHasErrors([
              'password' => 'required',
          ]);
    }

    /** @test  */
    public function password_confirmation_fields_are_required_for_set_reset_password()
    {
        Livewire::test('auth.set-reset-password')
          ->set('password_confirmation', '')
          ->call('submit')
          ->assertHasErrors([
              'password_confirmation' => 'required',
          ]);
    }

    /** @test */
    public function can_update_with_correct_credentials()
    {
        $user = User::create([
            'id' => 1,
            'name' => 'dato',
            'email' => 'datolabadze@redberry.ge',
            'password' => bcrypt('test')
        ]);

        $token = Password::createToken($user);

        $response = Livewire::test(SetResetPassword::class)
            ->set('token', $token)
            ->set('email', $user->email)
            ->set('password', 'admin')
            ->set('password_confirmation', 'admin')
            ->call('submit');
    }
}
