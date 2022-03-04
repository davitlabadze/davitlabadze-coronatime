<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireRegisterTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function can_view_register_page()
    {
        $this->get(route('register'))->assertSeeLivewire('auth.register');
    }

    /** @test  */
    public function email_fields_are_required_for_register()
    {
        Livewire::test('auth.register')
        ->set('email', '')
        ->call('submit')
        ->assertHasErrors([
            'email' => 'required',
        ]);
    }

    /** @test  */
    public function name_fields_are_required_for_register()
    {
        Livewire::test('auth.register')
         ->set('name', '')
         ->call('submit')
         ->assertHasErrors([
             'name' => 'required',
         ]);
    }


    /** @test  */
    public function password_fields_are_required_for_register()
    {
        Livewire::test('auth.register')
           ->set('password', '')
           ->call('submit')
           ->assertHasErrors([
               'password' => 'required',
           ]);
    }

    /** @test  */
    public function password_confirmation_fields_are_required_for_register()
    {
        Livewire::test('auth.register')
           ->set('password_confirmation', '')
           ->call('submit')
           ->assertHasErrors([
               'password_confirmation' => 'required',
           ]);
    }

    /** @test */
    public function can_register_with_correct_credentials()
    {
        Livewire::test('auth.register')
            ->set('email', 'admin@admin.ge')
            ->set('name', 'admin')
            ->set('password', 'admin')
            ->set('password_confirmation', 'admin')
            ->call('submit');
    }
}
