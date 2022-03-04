<?php

namespace Tests\Feature;

use App\Http\Livewire\StatusFilter;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireStatusFilterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function dashboard_page_contains_status_filters_livewire_component()
    {
        $user = User::factory()->create();

        Livewire::actingAs($user)
         ->test('dashboard')
         ->assertSeeLivewire('status-filter');
    }


    /** @test */
    public function if_checked_status_filter_is_wordlwide()
    {
        $user = User::factory()->create();

        $response = Livewire::actingAs($user)
        ->test(StatusFilter::class)
        ->call('setStatus', 'worldwide');
    }

    /** @test */
    public function if_checked_status_filter_is_country()
    {
        $user = User::factory()->create();

        $response = Livewire::actingAs($user)
        ->test(StatusFilter::class)
        ->set('status', 'country')
        ->call('setStatus', 'country');
    }
}
