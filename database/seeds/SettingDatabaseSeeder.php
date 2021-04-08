<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([

            'default_locale' => 'en',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled'  => true ,
            'auto_approve_reviews' => true ,
            'supported_currencies'   => ['USD' ,'EGP' ,'EUR'] ,
            'deafult_currency'     => 'USD' ,
            'store_email'    => 'admin@ecommerce.com' ,
            'search_engine'  => 'mySql' ,
            'free_shipping_cost'  => 0,
            'local_shipping_cost'  => 0,
            'outer_shipping_cost'  => 0,

            'translatable'  => [
                'store_name' => 'BeeShop' ,
                'free_shipping_label'  => 'Free Shipping',
                'local_label'   => 'local Shipping',
                'outer_label'  => 'Outer Shipping',
            ],

        ]);
    }
}


/*
[
            'default_locale' => 'en',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled'  => true ,
            'auto_approve_reviews' => true ,
            'supported_currencies'   => 'USD' ,
            'deafult_currency'     => 'USD' ,
            'store_email'    => 'admin@ecommerce.com' ,
            'search_engine'  => 'mySql' ,
            'free_shipping_cost'  => 0,
            'local_shipping_cost'  => 0,
            'outer_shipping_cost'  => 0,

            'translatable'  => [
                'store_name' => 'BeeShop' ,
                'free_shipping_label'  => 'Free Shipping',
                'local_label'   => 'local Shipping',
                'outer_label'  => 'Outer Shipping',
            ],

        ]
*/
