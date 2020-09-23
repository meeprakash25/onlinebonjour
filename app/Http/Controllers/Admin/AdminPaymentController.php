<?php
/*
Project Name: IonicEcommerce
Project URI: http://ionicecommerce.com
Author: VectorCoder Team
Author URI: http://vectorcoder.com/
Version: 2.9.2
*/
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

//validator is builtin class in laravel
use Validator;

use DB;
use App\Administrator;

use App;
use Lang;

//for authenitcate login data
use Auth;


//for requesting a value 
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;


class AdminPaymentController extends Controller
{
	//braintreeSetting
	public function paymentsetting(Request $request){
		$title = array('pageTitle' => Lang::get("labels.PaymentSetting"));		
		
		$shipping_methods = DB::table('payments_setting')->where('payments_id', '=', '1')->get();
		
		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$result['languages'] = $myVar->getLanguages();

		$cod_description = array();

		foreach($result['languages'] as $languages_data){
			$cod = DB::table('payment_description')->where([
					['language_id', '=', $languages_data->languages_id],
					['payment_name', '=', $shipping_methods[0]->cod_name],
				])->get();
				
			if(count($cod)>0){								
				$cod_description[$languages_data->languages_id]['name'] = $cod[0]->name;
				$cod_description[$languages_data->languages_id]['language_name'] = $languages_data->name;
				$cod_description[$languages_data->languages_id]['languages_id'] = $languages_data->languages_id;										
			}else{
				$cod_description[$languages_data->languages_id]['name'] = '';
				$cod_description[$languages_data->languages_id]['language_name'] = $languages_data->name;
				$cod_description[$languages_data->languages_id]['languages_id'] = $languages_data->languages_id;	
			}
		}

		$result['cod_description'] 		 		 = $cod_description;
		$result['shipping_methods']	= $shipping_methods;
		return view("admin.paymentsetting", $title)->with('result', $result);
	}
	
	//updatePaymentSetting	
	public function updatePaymentSetting(Request $request){
		
		DB::table('payments_setting')->where('payments_id', '=', '1')->update([

				'cash_on_delivery'		 	 =>	  $request->cash_on_delivery,
				'payment_currency'		 	 =>	  $request->payment_currency,
				]);
		$cod_name = $request->cod_name;

		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();
		
		foreach($languages as $languages_data){
			
			$codName = 'cod_name_'.$languages_data->languages_id;			
			$checkExist = DB::table('payment_description')->where('payment_name','=',$cod_name)->where('language_id','=',$languages_data->languages_id)->get();			
			if(count($checkExist)>0){
				DB::table('payment_description')->where('payment_name','=',$cod_name)->where('language_id','=',$languages_data->languages_id)->update([
					'name'  	    		 =>   $request->$codName,
					]);
			}else{
				DB::table('payment_description')->insert([
					'name'  	     		 =>   $request->$codName,
					'language_id'			 =>   $languages_data->languages_id,
					'payment_name'			 =>   $cod_name,
					]);
			}
		}
									
		$message = Lang::get("labels.InformationUpdatedMessage");
		return redirect()->back()->withErrors([$message]);
	}
	
}
