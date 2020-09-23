<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;

class AdminShippingByLocationController extends Controller
{
    public function shppingbylocation()
    {
        if (session('shipping_methods_view') == 0) {
            print Lang::get("labels.You do not have to access this route");
        } else {

            $title = array('pageTitle' => 'Shipping Price By Location');

            $products_shipping = DB::table('product_shipping_rates_by_location')->where('products_shipping_status', '1')->get();

            $result['products_shipping'] = $products_shipping;

            return view("admin.shppingbylocation", $title)->with('result', $result);
        }
    }

    public function updateShppingLocationPrice(Request $request)
    {
        if (session('shipping_methods_update') == 0) {
            print Lang::get("labels.You do not have to access this route");
        } else {
            //dd($request->shipping_price[0]);

            for ($i = 1; $i <= count($request->all()); $i++) {
                DB::table('product_shipping_rates_by_location')->where('id', $i)->update([
                    'shipping_price'  => $request->shipping_price[$i-1],
                ]);
            }

            $message = Lang::get("labels.WeightPriceUpdatedSuccessMessage");
            return redirect()->back()->withErrors([$message]);

        }
    }
}
