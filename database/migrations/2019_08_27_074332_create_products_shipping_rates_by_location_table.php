<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsShippingRatesByLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_shipping_rates_by_location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('districts', 64);
            $table->string('shipping_price')->default(0);
            $table->boolean('products_shipping_status')->default(0);
            $table->timestamps();
        });

        DB::table('product_shipping_rates_by_location')->insert([
            [
                'districts'                => 'Kathmandu',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Bhaktapur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Lalitpur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Bhojpur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Dhankuta',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Ilam',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Jhapa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Khotang',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Morang',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Okhaldhunga',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Panchthar',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Sankhuwasabha',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Solukhumbu',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Sunsari',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Taplejung',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Terhathum',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Udayapur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Saptari',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Siraha',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dhanusa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Mahottari',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Sarlahi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Bara',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Parsa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Rautahat',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Sindhuli',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Ramechhap',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dolakha',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dhading',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kathmandu',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kavrepalanchok',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],

            [
                'districts'                => 'Nuwakot',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Rasuwa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Sindhupalchok',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Chitwan',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Makwanpur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Baglung',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Gorkha',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kaski',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Lamjung',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Manang',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Mustang',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Myagdi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Nawalpur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Parbat',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Syangja',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Tanahun',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kapilvastu',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Parasi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Rupandehi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Arghakhanchi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Gulmi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Palpa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dang',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Pyuthan',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Rolpa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Eastern Rukum',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Banke',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Bardiya',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Western Rukum',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Salyan',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dolpa',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Humla',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Jumla',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kalikot',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Mugu',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Surkhet',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dailekh',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Jajarkot',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kailali',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Achham',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Doti',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Bajhang',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Bajura',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Kanchanpur',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Dadeldhura',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Baitadi',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
            [
                'districts'                => 'Darchula',
                'shipping_price'           => '50',
                'products_shipping_status' => '1',
                'created_at'               => date('Y-m-d h:i:s'),
                'updated_at'               => date('Y-m-d h:i:s'),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_shipping_rates_by_location');
    }
}
