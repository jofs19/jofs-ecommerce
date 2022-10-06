<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use Carbon\Carbon; 
use Intervention\Image\Facades\Image;

class ReviewController extends Controller
{
    
    public function ReviewStore(Request $request){

    	$product = $request->product_id;

    	$request->validate([

    		'summary' => 'required',
    		'comment' => 'required',
    	]);

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if($request->file('image')){

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(917,1000)->save('upload/review/'.$name_gen);
            $save_url = 'upload/review/'.$name_gen;

            Review::insert([
                'product_id' => $product,
                'user_id' => Auth::id(),
                'comment' => $request->comment,
                'summary' => $request->summary,
                'name' => $request->name,
                'email' => $request->email,
                'rating' => $request->quality,
                'image' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Review will be reviewed by Admin',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }else{
            Review::insert([
                'product_id' => $product,
                'user_id' => Auth::id(),
                'comment' => $request->comment,
                'summary' => $request->summary,
                'name' => $request->name,
                'email' => $request->email,
                'rating' => $request->quality,
                'created_at' => Carbon::now(),
            ]);

            $notification = array(
                'message' => 'Review will be reviewed by Admin',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }

    	


    } // end method 


    public function PendingReview(){

    	$review = Review::where('status',0)->orderBy('id','DESC')->get();
    	return view('backend.review.pending_review',compact('review'));

    } // end method 



    public function ReviewApprove($id){

    	Review::where('id',$id)->update(['status' => 1]);

    	$notification = array(
            'message' => 'Review Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end mehtod 

    public function PublishReview(){
        $review = Review::where('status',1)->orderBy('id','DESC')->get();
            return view('backend.review.publish_review',compact('review'));
        }
    
    
    
        public function DeleteReview($id){
    
            Review::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Review Deleted Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    
        } // end method 
        

}
