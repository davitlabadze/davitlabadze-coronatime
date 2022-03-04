<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LiwevireCountriesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_country_page()
    {
        $user = User::factory()->make();

        Livewire::actingAs($user)
            ->test('countries')
            ->set('search', 'ukraine');
    }

    /** @test */
    public function test_table_sortby()
    {
        $user = User::factory()->make();

        Livewire::actingAs($user)
            ->test('countries')
            ->call('sortBy', 'countires');
    }
}
