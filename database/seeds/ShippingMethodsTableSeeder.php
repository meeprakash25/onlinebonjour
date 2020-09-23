<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shipping_methods')->insert([
            'shipping_methods_id' => '6',
            'methods_type_link'   => 'ShippingByLocation',
            'isDefault'           => '0',
            'status'              => '1',
            'table_name'          => 'shipping_by_location'
        ]);
    }
}
