<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Models\Statistic;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class StatisticTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test  */
    public function statistics_database_has_expected_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('statistics', [
            'id','country_id', 'confirmed', 'recovered', 'critical','deaths','created_at','updated_at'
        ]),
            1
        );
    }

    /** @test */
    public function id_belongs_to_country()
    {
        $country = Country::create([
            'id' => 999,
            'code' => 'TS',
            'name' => [
                'en' => 'test',
                'ka' => 'ტესტ'
            ]

        ]);
        $statistic = Statistic::create([
            'id' => 999,
            'country_id' => $country->id,
            'confirmed' =>1,
            'recovered' =>1,
            'critical' =>1,
            'deaths' => 1
        ]);

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Model', $statistic->country);
    }
}
