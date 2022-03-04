<?php

namespace Tests\Feature;

use App\Models\Statistic;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LivewireWorldwideTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_wordlwide_page()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response = Statistic::create([
            'id' => 999,
            'country_id' => 999,
            'confirmed' => 5,
            'recovered' => 5,
            'critical' =>5,
            'deaths' => 5,
        ]);
        $response = $this->get(route('worldwide'));
        $response->assertSuccessful();
    }
}
