<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


use function PHPUnit\Framework\assertEquals;

class LanguageControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function then_it_can_switch_to_english()
    {
        $response = $this->get(route('change-lang', ['lang' => 'en']));
        $response->assertRedirect('/');
    }

    /** @test */
    public function then_it_can_switch_to_georgia()
    {
        $response = $this->get(route('change-lang', ['lang' => 'ka']));
        $response->assertRedirect('/');
    }
}
