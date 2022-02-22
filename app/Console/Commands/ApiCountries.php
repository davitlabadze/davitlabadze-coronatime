<?php

namespace App\Console\Commands;

use App\Models\CountryApi;
use App\Models\Statistic;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class ApiCountries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command fetches covid statistic from provided API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $countries = Http::get('https://devtest.ge/countries')->json();
        $this->output->progressStart(count($countries));
        foreach ($countries as $country) {
            CountryApi::updateOrCreate(
                ['code' => $country['code']],
                ['name' => [
                    'en' => $country['name']['en'],
                    'ka' => $country['name']['ka'],
                ]]
            );
            $statistic = Http::post('https://devtest.ge/get-country-statistics', [
                'code' => $country['code'],
             ])->json();
            sleep(2);
            Statistic::updateOrCreate(
                ['country_api_id' => $statistic['id']],
                ['confirmed' => $statistic['confirmed'],'recovered' => $statistic['recovered'], 'critical' => $statistic['critical'], 'deaths' => $statistic['deaths']],
            );
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }
}
