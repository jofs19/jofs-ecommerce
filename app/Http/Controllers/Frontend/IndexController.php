<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\MultiImg;
use App\Models\Brand;
use App\Models\BlogPost;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use App\Models\Review;

class IndexController extends Controller
{
    public function index()
    {
        
        $blogpost = BlogPost::latest()->get();
        $products = Product::where('status',1)->orderBy('id','DESC')->limit(8)->get();
        $products_category = Product::where('status',1)->orderBy('id','DESC')->get();
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->get();
    	$categories = Category::orderBy('category_name_en','ASC')->get();
        // $reviews = Review::where('status',1)->orderBy('id','DESC')->limit(3)->get();
        $reviews = Review::where('status',1)->orderBy('id','DESC')->get();

    	$featured = Product::where('featured',1)->where('status',1)->orderBy('id','DESC')->get(); //done
        $hot_deals = Product::where('hot_deals',1)->where('status',1)->orderBy('id','DESC')->limit(4)->get(); //done = best seller	
        $special_offer = Product::where('special_offer',1)->where('discount_price','!=',NULL)->where('status',1)->orderBy('id','DESC')->limit(1)->get();
    	$special_deals = Product::where('special_deals',1)->where('status',1)->orderBy('id','DESC')->limit(4)->get(); //done = trending products
        $discounted_products = Product::where('discount_price','!=',NULL)->where('status',1)->orderBy('id','DESC')->limit(4)->get(); //done
        $skip_category_0 = Category::skip(3)->first();
    	$skip_product_0 = Product::where('status',1)->where('category_id',$skip_category_0->id)->orderBy('id','DESC')->get();
        
    	$skip_category_1 = Category::skip(1)->first();
    	$skip_product_1 = Product::where('status',1)->where('category_id',$skip_category_1->id)->orderBy('id','DESC')->get();

    	$skip_brand_1 = Brand::skip(1)->first();
    	$skip_brand_product_1 = Product::where('status',1)->where('brand_id',$skip_brand_1->id)->orderBy('id','DESC')->get();


    	// return $skip_category->id;
    	// die();

    	return view('frontendv2.index',compact('categories','sliders','products','featured','hot_deals','special_offer','special_deals','skip_category_0','skip_product_0','skip_category_1','skip_product_1','skip_brand_1','skip_brand_product_1','blogpost','reviews', 'products_category','discounted_products'));
    }

    public function UserLogout()
    {

        Auth::logout();
        Session::flush();

        return redirect()->route('login');

    }

    public function UserProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('frontendv2.profile.user_profile', compact('user'));
    }

    public function UserProfileStore(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

    // $old_img = $request->old_image;
        // if ($request->file('profile_photo_path')) {
		// 	$file = $request->file('profile_photo_path');
		// 	$name_gen = hexdec(uniqid()).'.'.$file->getClientOriginalExtension();
		// 	Image::make($file)->resize(720,1253)->save('upload/user_images/'.$name_gen);
		// 	$save_url = 'upload/user_images/'.$name_gen;
		// 	}
        // if(file_exists($old_img)){
            // unlink($old_img);
            
		// }

        // $cat_id = $request->id;
        // $old_img = $request->old_image;
 
        // if ($request->file('post_image')) { 
        // $image = $request->file('post_image'); 
        
        // $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        // Image::make($image)->resize(1303,906)->save('upload/blog/'.$name_gen);
        // $save_url = 'upload/blog/'.$name_gen;
 
        // if(file_exists($old_img)){
        // unlink($old_img);
        // }


        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);

    } //end method


    public function UserChangePassword()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontendv2.profile.change_password', compact('user'));
    }


    public function UserPasswordUpdate(Request $request){

        // $validateData = $request->validate([
        //     'old_password' => 'required',
        //     'password' => 'required|confirmed',
        //     'new_password_confirmation' => 'required'

        // ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            // $notification = array(
            //     'message' => 'Password Updated Successfully',
            //     'alert-type' => 'success'
            // );
            $notification = array(
                'message' => 'Password Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('user.logout')->with($notification);
        } else {
            $notification = array(
                'message' => 'Old Password is incorrect',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    } //end method


    public function ProductDetails($id,$slug){
		$product = Product::findOrFail($id);

        $color_en = $product->product_color_en;
		$product_color_en = explode(',', $color_en);

		$color_fil = $product->product_color_fil;
		$product_color_fil = explode(',', $color_fil);

		$size_en = $product->product_size_en;
		$product_size_en = explode(',', $size_en);

		$size_fil = $product->product_size_fil;
		$product_size_fil = explode(',', $size_fil);

        $multiImag = MultiImg::where('product_id',$id)->get();
        $cat_id = $product->category_id;
		$relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();

	 	return view('frontendv2.product.product_details',compact('product','multiImag','product_color_en','product_color_fil','product_size_en','product_size_fil','relatedProduct'));

	} //end method


    public function TagWiseProduct($tag){
		$products = Product::where('status',1)->where('product_tags_en',$tag)->orWhere('product_tags_fil',$tag)->orderBy('id','DESC')->paginate(6);
		$categories = Category::orderBy('category_name_en','ASC')->get();
		return view('frontendv2.tags.tags_view',compact('products','categories'));
	} //end method


      // Subcategory wise data
	public function SubCatWiseProduct(Request $request,$subcat_id,$slug){
        $products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id','DESC')->paginate(6);		
        $categories = Category::orderBy('category_name_en','ASC')->get();
		$breadsubcat = SubCategory::with(['category'])->where('id',$subcat_id)->get();

        		///  Load More Product with Ajax 
		if ($request->ajax()) {
            $grid_view = view('frontendv2.product.grid_view_product',compact('products'))->render();
         
            $list_view = view('frontendv2.product.list_view_product',compact('products'))->render();
             return response()->json(['grid_view' => $grid_view,'list_view',$list_view]);	
         
                 }
                 ///  End Load More Product with Ajax 

		return view('frontendv2.product.subcategory_view',compact('products','categories','breadsubcat'));
	} // end method


      // Sub-Subcategory wise data
	public function SubSubCatWiseProduct(Request $request,$subsubcat_id,$slug){
		$products = Product::where('status',1)->where('subsubcategory_id',$subsubcat_id)->orderBy('id','DESC')->paginate(6);
		$categories = Category::orderBy('category_name_en','ASC')->get();
		$breadsubsubcat = SubSubCategory::with(['category','subcategory'])->where('id',$subsubcat_id)->get();

        		///  Load More Product with Ajax 
		if ($request->ajax()) {
            $grid_view = view('frontendv2.product.grid_view_product',compact('products'))->render();
         
            $list_view = view('frontendv2.product.list_view_product',compact('products'))->render();
             return response()->json(['grid_view' => $grid_view,'list_view',$list_view]);	
         
                 }
                 ///  End Load More Product with Ajax 

		return view('frontendv2.product.sub_subcategory_view',compact('products','categories','breadsubsubcat'));
	} //end method
   


             /// Product View With Ajax
	public function ProductViewAjax($id){
        $product_id = Product::findOrFail($id);
        $product = Product::with('category','brand')->findOrFail($id);
		$color = $product->product_color_en;

		$product_color = explode(',', $color);
		$size = $product->product_size_en;
		$product_size = explode(',', $size);

        $multiImage = MultiImg::where('product_id',$id)->get();

		return response()->json(array(
			'product' => $product,
			'color' => $product_color,
			'size' => $product_size,
            'multiImag' => $multiImage,
            'product_id' => $product_id,
		));

	} // end method 


     // Product Seach 
	public function ProductSearch(Request $request){
        $request->validate(["search" => "required"]);
		$item = $request->search;
		// echo "$item";
        $categories = Category::orderBy('category_name_en','ASC')->get();
		$products = Product::where('product_name_en','LIKE',"%$item%")->get();
		return view('frontendv2.product.search',compact('products','categories'));

	}

    	///// Advance Search Options 

	public function SearchProduct(Request $request){
		$request->validate(["search" => "required"]);

		$item = $request->search;		 

		$products = Product::where('product_name_en','LIKE',"%$item%")->select('product_name_en','product_thumbnail','selling_price','id','product_slug_en')->limit(5)->get();

        return view('frontendv2.product.search_product',compact('products'));

	} // end method 


}
