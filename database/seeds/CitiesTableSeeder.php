<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $city=new \App\City;
       $city->name='Ha Noi';
       $city->save();
        $city=new \App\City;
        $city->name='Bac Ninh';
        $city->save();
        $city=new \App\City;
        $city->name='Bac Giang';
        $city->save();
    }
}
