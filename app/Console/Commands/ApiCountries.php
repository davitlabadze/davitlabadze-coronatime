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


    protected function getCountries()
    {
        return Http::get('https://devtest.ge/countries')->json();
    }

    protected function getStatistics()
    {
        $responseCountries = $this->getCountries();
        $point = count($responseCountries);

        $this->output->progressStart($point);
        $statistics = [];
        foreach ($responseCountries as $item) {
            $countryCode = $item['code'];
            $response = Http::post('https://devtest.ge/get-country-statistics', [
                'code' => $countryCode,
             ])->json();
            sleep(2);
            $statistics[] = $response;
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
        return $statistics;
    }

    protected function updateOrCreateCountry()
    {
        $response = $this->getCountries();
        $point    = count($response);
        $this->output->progressStart($point);
        foreach ($response as $data) {
            CountryApi::updateOrCreate(
                ['code' => $data['code']],
                ['name' => [
                    'en' => $data['name']['en'],
                    'ka' => $data['name']['ka'],
                    ]]
            );
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }

    protected function updateOrCreateStatistics()
    {
        $statistics = $this->getStatistics();
        $point = count($statistics);
        $this->output->progressStart($point);
        foreach ($statistics as $item) {
            Statistic::updateOrCreate(
                ['country_api_id' => $item['id'] ,'confirmed' => $item['confirmed']],
                ['recovered' => $item['recovered'], 'critical' => $item['critical'], 'deaths' => $item['deaths']],
            );
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->updateOrCreateCountry();
        $this->updateOrCreateStatistics();
    }
}
