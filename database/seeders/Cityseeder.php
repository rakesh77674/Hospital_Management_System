<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['city' => 'Jhapa', 'state_id' => 1]);
        City::create(['city' => 'Morang','state_id'=>1]);
        City::create(['city' => 'Sunsari','state_id'=>1]);
        City::create(['city' => 'Udaypur','state_id'=>1]);
        City::create(['city' => 'Ilam','state_id'=>1]);
        City::create(['city' => 'Dhankuta','state_id'=>1]);
        City::create(['city' => 'Bhojpur','state_id'=>1]);
        City::create(['city' => 'Khotang','state_id'=>1]);
        City::create(['city' => 'Kathmandu','state_id'=>2]);
        City::create(['city' => 'Bhaktapur','state_id'=>2]);
        City::create(['city' => 'Bharatpur','state_id'=>2]);
        City::create(['city' => 'lalitpur','state_id'=>2]);
        City::create(['city' => 'Birgunj','state_id'=>2]);
        City::create(['city' => 'Biratnagar','state_id'=>2]);
        City::create(['city' => 'Gaur','state_id'=>3]);
        City::create(['city' => 'Siraha','state_id'=>3]);
        City::create(['city' => 'Malangwa','state_id'=>3]);
        City::create(['city' => 'RajBiraj','state_id'=>3]);
        City::create(['city' => 'Jaleshwor','state_id'=>3]);
        City::create(['city' => 'Janakpur','state_id'=>3]);
        City::create(['city' => 'Lahan','state_id'=>3]);
        City::create(['city' => 'Pokhara','state_id'=>4]);
        City::create(['city' => 'Gorkha','state_id'=>4]);
        City::create(['city' => 'Baglung','state_id'=>4]);
        City::create(['city' => 'Tanahun','state_id'=>4]);
        City::create(['city' => 'Syangja','state_id'=>4]);
        City::create(['city' => 'Nawalpur','state_id'=>4]);
        City::create(['city' => 'Butwal','state_id'=>5]);
        City::create(['city' => 'Nepagunj','state_id'=>5]);
        City::create(['city' => 'Sidharthanagar','state_id'=>5]);
        City::create(['city' => 'Tulsipur','state_id'=>5]);
        City::create(['city' => 'Ghorahi','state_id'=>5]);
        City::create(['city' => 'Tansen','state_id'=>5]);
        City::create(['city' => 'Birendranagar','state_id'=>6]);
        City::create(['city' => 'ChandaNath','state_id'=>6]);
        City::create(['city' => 'Dullu','state_id'=>6]);
        City::create(['city' => 'Simikot','state_id'=>6]);
        City::create(['city' => 'Tribeni','state_id'=>6]);
        City::create(['city' => 'Manma','state_id'=>6]);
        City::create(['city' => 'Dunai','state_id'=>6]);
        City::create(['city' => 'Dhangadhi','state_id'=>7]);
        City::create(['city' => 'Bhimdutta','state_id'=>7]);
        City::create(['city' => 'Mahendranagar','state_id'=>7]);
        City::create(['city' => 'Tikapur','state_id'=>7]);
    }
}
