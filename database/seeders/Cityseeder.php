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
        City::create(['city' => 'Jhapa', 'states_id' => 1]);
        City::create(['city' => 'Morang','states_id'=>1]);
        City::create(['city' => 'Sunsari','states_id'=>1]);
        City::create(['city' => 'Udaypur','states_id'=>1]);
        City::create(['city' => 'Ilam','states_id'=>1]);
        City::create(['city' => 'Dhankuta','states_id'=>1]);
        City::create(['city' => 'Bhojpur','states_id'=>1]);
        City::create(['city' => 'Khotang','states_id'=>1]);
        City::create(['city' => 'Kathmandu','states_id'=>2]);
        City::create(['city' => 'Bhaktapur','states_id'=>2]);
        City::create(['city' => 'Bharatpur','states_id'=>2]);
        City::create(['city' => 'lalitpur','states_id'=>2]);
        City::create(['city' => 'Birgunj','states_id'=>2]);
        City::create(['city' => 'Biratnagar','states_id'=>2]);
        City::create(['city' => 'Gaur','states_id'=>3]);
        City::create(['city' => 'Siraha','states_id'=>3]);
        City::create(['city' => 'Malangwa','states_id'=>3]);
        City::create(['city' => 'RajBiraj','states_id'=>3]);
        City::create(['city' => 'Jaleshwor','states_id'=>3]);
        City::create(['city' => 'Janakpur','states_id'=>3]);
        City::create(['city' => 'Lahan','states_id'=>3]);
        City::create(['city' => 'Pokhara','states_id'=>4]);
        City::create(['city' => 'Gorkha','states_id'=>4]);
        City::create(['city' => 'Baglung','states_id'=>4]);
        City::create(['city' => 'Tanahun','states_id'=>4]);
        City::create(['city' => 'Syangja','states_id'=>4]);
        City::create(['city' => 'Nawalpur','states_id'=>4]);
        City::create(['city' => 'Butwal','states_id'=>5]);
        City::create(['city' => 'Nepagunj','states_id'=>5]);
        City::create(['city' => 'Sidharthanagar','states_id'=>5]);
        City::create(['city' => 'Tulsipur','states_id'=>5]);
        City::create(['city' => 'Ghorahi','states_id'=>5]);
        City::create(['city' => 'Tansen','states_id'=>5]);
        City::create(['city' => 'Birendranagar','states_id'=>6]);
        City::create(['city' => 'ChandaNath','states_id'=>6]);
        City::create(['city' => 'Dullu','states_id'=>6]);
        City::create(['city' => 'Simikot','states_id'=>6]);
        City::create(['city' => 'Tribeni','states_id'=>6]);
        City::create(['city' => 'Manma','states_id'=>6]);
        City::create(['city' => 'Dunai','states_id'=>6]);
        City::create(['city' => 'Dhangadhi','states_id'=>7]);
        City::create(['city' => 'Bhimdutta','states_id'=>7]);
        City::create(['city' => 'Mahendranagar','states_id'=>7]);
        City::create(['city' => 'Tikapur','states_id'=>7]); 
    }
}
