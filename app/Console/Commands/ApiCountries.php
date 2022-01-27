<?php

namespace App\Console\Commands;

// use App\Http\Livewire\Country;
use App\Models\CountryApi;
use App\Models\Coutry;
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
    protected $signature = 'ct:api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //get
        $responseCountries = Http::get('https://devtest.ge/countries')->json();

        foreach ($responseCountries as $item) {
            CountryApi::create([
                "code" => $item["code"],
                "name" => $item["name"],
            ]);
        }

        $statistics = [];
        foreach ($responseCountries as $item) {
            $this->output->progressStart(1);
            $countryCode = $item['code'];

            $response = Http::post('https://devtest.ge/get-country-statistics', [
                "code"=> $countryCode,
            ])->json();

            sleep(2);
            $this->output->progressAdvance();

            $statistics[] = $response;
            $this->output->progressFinish();
        }

        // $response = Http::post('https://devtest.ge/get-country-statistics', [
        //     "id"=> 29,
        //     "country"=> "Georgia",
        //     "code"=> "GE",
        //     "confirmed"=> 2398,
        //     "recovered"=> 3147,
        //     "critical"=> 2349,
        //     "deaths"=> 477,
        //     "created_at"=> "2021-09-13T11:43:39.000000Z",
        //     "updated_at"=> "2021-09-13T11:43:39.000000Z"
        // ])->json();

        // Statistic::create([
        //     'category_id' => $response['id'],
        //     "confirmed"   => $response['confirmed'],
        //     "recovered"   => $response['recovered'],
        //     "critical"    => $response['critical'],
        //     "deaths"      => $response['deaths']
        // ]);


        foreach ($statistics as $item) {
            $this->output->progressStart(1);
            Statistic::create([
                'country_api_id' => $item['id'],
                "confirmed"   => $item['confirmed'],
                "recovered"   => $item['recovered'],
                "critical"    => $item['critical'],
                "deaths"      => $item['deaths']
            ]);
            $this->output->progressAdvance();
        }
        $this->output->progressFinish();
    }
}
