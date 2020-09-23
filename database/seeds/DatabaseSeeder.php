<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PaymentSettingSeeder::class);
         //$this->call(ShippingMethodsTableSeeder::class);
         //$this->call(ShippingDescriptionTableSeeder::class);
    }
}
