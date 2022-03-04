<?php

namespace Tests\Feature;

use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class LivewireDashboardTest extends TestCase
{
    /** @test */
    public function test_render_dashboard()
    {
        $user = User::factory()->make();
        Livewire::actingAs($user)->test('dashboard');
    }
}
