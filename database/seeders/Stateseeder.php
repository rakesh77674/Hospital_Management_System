<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::create(['state' => 'Sagarmatha Province']);
        State::create(['state' => 'Bagmati Province']);
        State::create(['state' => 'Madhesh Province']);
        State::create(['state' => 'Gandaki Province']);
        State::create(['state' => 'lumbini Province']);
        State::create(['state' => 'Karnali Province']);
        State::create(['state' => 'Sudurpachim Province']);
    }
}
