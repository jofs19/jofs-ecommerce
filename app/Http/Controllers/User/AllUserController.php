<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Order;
use App\Models\OrderItem;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Mail\OrderMail;
use Barryvdh\DomPDF\Facade\PDF;

use Intervention\Image\Facades\Image;




class AllUserController extends Controller
{
    public function MyOrders(){

    	$orders = Order::where('user_id',Auth::id())->orderBy('id','DESC')->paginate(10);
    	return view('frontendv2.user.order.order_view',compact('orders'));

    } //end method

    // public function ProductViewAjax($order_id){
    //     $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
    //     $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();  

    //     return response()->json(array(
    //         'order' => $order,
    //         'orderItem' => $orderItem,
    //     ));
		
	// } // end method 
    

    public function OrderDetails($order_id){

        $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();    	
        return view('frontendv2.user.order.order_details',compact('order','orderItem'));

    } // end method 


    public function InvoiceDownload($order_id){
        $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
         $orderItem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
    	// return view('frontend.user.order.order_invoice',compact('order','orderItem'));
		$pdf = PDF::loadView('frontend.user.order.order_invoice',compact('order','orderItem'))->setPaper('a4')->setOptions([
            'tempDir' => public_path(),
            'chroot' => public_path(),
    ]);
    return $pdf->download('invoice.pdf'); 
 
 
 
     } // end method 


     public function ReturnOrder(Request $request,$order_id){

        // unlink(public_path('upload/return/'.$request->return_image));

        // $return_img = Order::findOrFail($order_id);
        // $img = $return_img->return_image;
        // unlink($img);
        
		if ($request->file('return_image')) {
			$image = $request->file('return_image');
			$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
			Image::make($image)->resize(300,300)->save('upload/return/'.$name_gen);
			$save_url = 'upload/return/'.$name_gen;
			$data['return_image'] = $save_url; 
			}

        Order::findOrFail($order_id)->update([
            'return_date' => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
            'return_image' => $save_url,
            'return_order' => 1,
        ]);


      $notification = array(
            'message' => 'Return Request Send Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('my.orders')->with($notification);

    } // end method 

    public function ReturnOrderList(){

        $orders = Order::where('user_id',Auth::id())->where('return_reason','!=',NULL)->orderBy('id','DESC')->paginate(5);
        return view('frontendv2.user.order.return_order_view',compact('orders'));

    } // end method 


    public function CancelOrders(){

        $orders = Order::where('user_id',Auth::id())->where('status','cancel')->orderBy('id','DESC')->get();
        return view('frontendv2.user.order.cancel_order_view',compact('orders'));

    } // end method 


        ///////////// Order Traking ///////

        public function OrderTraking(Request $request){



            $invoice = $request->code;
            

    
            $track = Order::where('invoice_no',$invoice)->first();
            if ($track) {
    
                // echo "<pre>";
                // print_r($track);
            
            return view('frontendv2.tracking.track_order',compact('track'));
    
            }else{
    
                $notification = array(
                'message' => 'Invoice Code Is Invalid',
                'alert-type' => 'error'
            );
    
            return redirect()->back()->with($notification);
    
            }
    
        } // end method 



}