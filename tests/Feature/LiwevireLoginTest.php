<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LiwevireLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_login_page()
    {
        $response = $this->get(route('login'));
        $response->assertSuccessful();
    }

    /** @test */
    public function can_login()
    {
        $user = User::create([
            'id' => 1,
            'name'=> 'test',
            "email"=>"marilou.adams@example.org",
            "email_verified_at"=> "2022-02-19 14:07:41",
            "password"=> bcrypt('laravel'),
            "remember_token"=> "1k90A9br2v",
            "created_at"=>"2022-02-19 14:07:41",
            "updated_at"=>"2022-02-19 14:07:41"
        ]);


        $response = Livewire::test('auth.login')
             ->set('name', 'test')
             ->set('password', bcrypt('laravel'))
             ->call('submit');


        $this->assertDatabaseHas('users', [
            'name' => 'test',
        ]);
    }

    /** @test  */
    public function name_fields_are_required_for_login()
    {
        Livewire::test('auth.login')
         ->set('name', '')
         ->call('submit')
         ->assertHasErrors([
             'name' => 'required',
         ]);
    }

    /** @test  */
    public function password_fields_are_required_for_login()
    {
        Livewire::test('auth.login')
          ->set('password', '')
          ->call('submit')
          ->assertHasErrors([
              'password' => 'required',
          ]);
    }

    /** @test  */
    public function name_and_password_fields_are_required_for_login()
    {
        Livewire::test('auth.login')
        ->set('name', '')
        ->set('password', '')
        ->call('submit')
        ->assertHasErrors([
            'name' => 'required',
            'password' => 'required',
        ]);
    }

    /**@test */
    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = User::factory()->make();

        $response = $this->actingAs($user)->get('login');

        $response->assertRedirect('/home');
    }

    /** @test */
    public function can_login_with_correct_credentials()
    {
        $user = User::factory()->create();

        $response = Livewire::test('auth.login')
            ->set('name', $user->name)
            ->set('password', bcrypt($user->password))
            ->call('submit');
        $response->assertRedirect('dashboard/worldwide?en');
    }

    /**@test */
    public function test_user_cannot_login_with_incorrect_password()
    {
        $user = User::factory()->create([
            'password' => bcrypt('i-love-laravel'),
        ]);

        $response = Livewire::test('auth.login')
             ->set('name', $user->name)
             ->set('password', bcrypt('laravel'))
             ->call('submit');

        $response->assertRedirect('dashboard/worldwide?en');
    }
}
