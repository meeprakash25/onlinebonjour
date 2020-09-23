<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingDescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_description')->insert([
            'name'        => 'Shipping By Location',
            'language_id' => '1',
            'table_name'  => 'shipping_by_location',
            'sub_labels'  => '1',
        ]);
    }
}
