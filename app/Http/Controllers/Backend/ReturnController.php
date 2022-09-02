<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class ReturnController extends Controller
{
    public function ReturnRequest(){

    	$orders = Order::where('return_order',1)->orderBy('id','DESC')->get();
    	return view('backend.return_order.return_request',compact('orders'));

    }


    public function ReturnRequestApprove($order_id){

    	Order::where('id',$order_id)->update(['return_order' => 2]);

    	$notification = array(
            'message' => 'Order Returned Successfully',
            'alert-type' => 'success'
        );

        return view('backend.return_order.all_return_request')->with($notification);



    } // end method 


    public function ReturnRequestView($order_id){

    	$orders = Order::findOrFail($order_id);
    	return view('backend.return_order.return_request_view',compact('orders'));

    } // end method


    public function ReturnAllRequest(){

    	$orders = Order::where('return_order',2)->orderBy('id','DESC')->get();
    	return view('backend.return_order.all_return_request',compact('orders'));

    } // end method 



}
