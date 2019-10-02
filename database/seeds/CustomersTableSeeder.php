<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $customer=new \App\Customer;
       $customer->name='Ho Chi Minh';
        $customer->email='minh@gmail.com';
        $customer->city_id=3;
        $customer->save();

        $customer=new \App\Customer;
        $customer->name='Nguyen Quang Trung';
        $customer->email='trung@gmail.com';
        $customer->city_id=4;
        $customer->save();

        $customer=new \App\Customer;
        $customer->name='Nguyen Hue';
        $customer->email='huenguyen@gmail.com';
        $customer->city_id=3;
        $customer->save();

        $customer=new \App\Customer;
        $customer->name='Nguyen Trai';
        $customer->email='nguyentrai@gmail.com';
        $customer->city_id=4;
        $customer->save();

        $customer=new \App\Customer;
        $customer->name='Nguyen Du';
        $customer->email='dunguyen@gmail.com';
        $customer->city_id=5;
        $customer->save();

        $customer=new \App\Customer;
        $customer->name='Phan Dinh Phung';
        $customer->email='phanphung@gmail.com';
        $customer->city_id=6;
        $customer->save();

    }
}
