<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Livewire\Livewire;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_reset_password_with_correct_credentials()
    {
        $user = User::create([
            'id' => 1,
            'name' => 'dato',
            'email' => 'datolabadze@redberry.ge',
            'password' => bcrypt('dato')
        ]);
        Livewire::test('auth.reset-password')
             ->set('email', 'datolabadze@redberry.ge')
             ->call('submit');
    }
}
