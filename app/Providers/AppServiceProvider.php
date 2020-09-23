<?php

namespace App\Providers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @param Request $request
     * @return void
     */
    public function boot(Request $request)
    {
        // Using Closure based composers...
        $result = array();
        $orders = DB::table('orders')
            ->leftJoin('customers', 'customers.customers_id', '=', 'orders.customers_id')
            ->where('orders.is_seen', '=', 0)
            ->orderBy('orders_id', 'desc')
            ->get();

        $index = 0;
        foreach ($orders as $orders_data) {

            array_push($result, $orders_data);
            $orders_products = DB::table('orders_products')
                ->where('orders_id', '=', $orders_data->orders_id)
                ->get();

            $result[$index]->price          = $orders_products;
            $result[$index]->total_products = count($orders_products);
            $index++;
        }

        //new customers
        $newCustomers = DB::table('customers')
            ->where('is_seen', '=', 0)
            ->orderBy('customers_id', 'desc')
            ->get();

        //products low in quantity
        $lowInQunatity = DB::table('products')
            ->LeftJoin('products_description', 'products_description.products_id', '=', 'products.products_id')
            ->whereColumn('products.products_quantity', '<=', 'products.low_limit')
            ->where('products_description.language_id', '=', '1')
            ->where('products.low_limit', '>', 0)
            //->get();
            ->paginate(10);

        $languages = DB::table('languages')->get();
        view()->share('languages', $languages);

        $web_setting = DB::table('settings')->get();
        view()->share('web_setting', $web_setting);

        view()->share('unseenOrders', $result);
        view()->share('newCustomers', $newCustomers);
        view()->share('lowInQunatity', $lowInQunatity);

        if ($request->server->has('HTTP_X_ORIGINAL_HOST')) {
            $request->server->set('HTTP_HOST', $request->server->get('HTTP_X_ORIGINAL_HOST'));
            $request->headers->set('HOST', $request->server->get('HTTP_X_ORIGINAL_HOST'));
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $settings              = DB::table('settings')->get();
        //dd($settings[63]);
        $facebook_redirect_url = url('/') . '/login/facebook/callback';
        $google_redirect_url   = url('/') . '/login/google/callback';
        Config::set([
            'services.google.client_id'       => $settings[62]->value,
            'services.google.client_secret'   => $settings[63]->value,
            'services.google.redirect'        => $google_redirect_url,
            'services.facebook.client_id'     => $settings[0]->value,
            'services.facebook.client_secret' => $settings[1]->value,
            'services.facebook.redirect'      => $facebook_redirect_url,
        ]);
    }
}
