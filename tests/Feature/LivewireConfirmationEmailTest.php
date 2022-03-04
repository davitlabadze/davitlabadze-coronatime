<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LivewireConfirmationEmailTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_view_confirmation_email_in_page()
    {
        $response = $this->get('verify');
        $response->assertStatus(200);
    }
}
