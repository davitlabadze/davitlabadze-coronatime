<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;

use Tests\TestCase;

class FetchCountriesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_json_response()
    {
        Http::fake([
            'https://devtest.ge/countries' => Http::response(
                json_decode(file_get_contents('tests/countries.json'), true),
                200
            ),
        ]);

        Http::fake([
            'https://devtest.ge/get-country-statistics' => Http::response(
                json_decode(file_get_contents('tests/statistics.json'), true),
                200
            ),
        ]);
        $this->artisan('data:generate');
        $this->assertTrue(true);
    }
}
