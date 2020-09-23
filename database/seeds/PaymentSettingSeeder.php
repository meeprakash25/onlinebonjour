<?php

use Illuminate\Database\Seeder;

class PaymentSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('settings')->insert([
        //    'name'  => 'sgd',
        //    'value' => '82.2'
        //]);
        DB::table('settings')->insert([
            'name'  => 'usd',
            'value' => '115'
        ]);
    }
}
