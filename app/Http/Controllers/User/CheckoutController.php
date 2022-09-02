<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

use App\Models\Order;

class CheckoutController extends Controller
{
    public function DistrictGetAjax($division_id){

    	$ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name','ASC')->get();
    	return json_encode($ship);

    } // end method 


     public function StateGetAjax($district_id){

    	$ship = ShipState::where('district_id',$district_id)->orderBy('state_name','ASC')->get();
    	return json_encode($ship);

    } // end method 


    public function CheckoutStore(Request $request){
		// dd(	$request->all());
		// $request->validate([
        //     'receipt' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
      
        // $imageName = time().'.'.$request->receipt->extension();  
       
        // $request->receipt->move(public_path('upload/receipt'), $imageName);
		// $receipt = 'upload/receipt/'.$imageName;
		
		// $image = $request->file('receipt');
    	// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	// Image::make($image)->resize(917,1000)->save('upload/receipt/'.$name_gen);
    	// $save_url = 'upload/receipt/'.$name_gen;

		

		// $imageName = time().'.'.$request->receipt->extension();
		// $request->receipt->move(public_path('upload/receipt'), $imageName);
		// $receipt = 'upload/receipt/'.$imageName;

		// $image = $request->file('receipt');
		// $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
		// Image::make($image)->resize(917,1000)->save('upload/receipt/'.$name_gen);
		// $save_url = 'upload/receipt/'.$name_gen;

		$request->validate([
            'receipt' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

		if ($request->file('receipt')) {
			$image = $request->file('receipt');
			$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->resize(720,1253)->save('upload/receipt/'.$name_gen);
			$save_url = 'upload/receipt/'.$name_gen;
			$data = array();
			$data['shipping_name'] = $request->shipping_name;
			$data['shipping_email'] = $request->shipping_email;
			$data['shipping_phone'] = $request->shipping_phone;
			$data['shipping_address'] = $request->shipping_address;
			$data['shipping_address2'] = $request->shipping_address2;
			$data['post_code'] = $request->post_code;
			$data['division_id'] = $request->division_id;
			$data['district_id'] = $request->district_id;
			$data['state_id'] = $request->state_id;
			$data['shipping_charge'] = $request->shipping_charge;
			$data['change_amount'] = $request->change_amount;
			$data['notes'] = $request->notes;
			$data['receipt'] = $save_url;
			$cartTotal = Cart::total();

		}else{

			$data = array();
			$data['shipping_name'] = $request->shipping_name;
			$data['shipping_email'] = $request->shipping_email;
			$data['shipping_phone'] = $request->shipping_phone;
			$data['shipping_address'] = $request->shipping_address;
			$data['shipping_address2'] = $request->shipping_address2;
			$data['post_code'] = $request->post_code;
			$data['division_id'] = $request->division_id;
			$data['district_id'] = $request->district_id;
			$data['state_id'] = $request->state_id;
			$data['shipping_charge'] = $request->shipping_charge;
			$data['change_amount'] = $request->change_amount;
			$data['notes'] = $request->notes;
			$data['receipt'] = '';
			$cartTotal = Cart::total();

		}

		
            	// dd($request->all());






    	if ($request->payment_method == 'stripe') {
			return view('frontend.payment.stripe',compact('data','cartTotal'));    	
		}elseif ($request->payment_method == 'card') {
    		return 'card';
    	}else{
            return view('frontend.payment.cash',compact('data','cartTotal'));    	
		}


		// return view('frontendv2.paymentPage',compact('data','cartTotal'));

    }// end method. 
}
