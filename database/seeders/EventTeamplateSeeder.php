<?php

namespace Database\Seeders;

use App\Http\Controllers\EventTeamplateController;
use App\Models\EventTeamplate;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTeamplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Factory::create();
        DB::table('event_teamplates')->truncate();
        for ($i = 0; $i < 100; $i++) {
            EventTeamplate::create([
                'eventName' => $fake->name,
                'bandNames' => $fake->useName,
                'startDate' => $fake->date('Y-m-d'),
                'endDate' => $fake->date('Y-m-d'),
                'portfolio' => $fake->name,
                'ticketPrice' => random_int(10000, 1000000),
                'status' => random_int(0, 3)
            ]);
        }
    }
}
