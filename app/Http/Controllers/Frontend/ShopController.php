<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand; 
use App\Models\Product;
class ShopController extends Controller
{
    public function ShopPage(){
        $products = Product::query();
        if (!empty($_GET['category'])) {
            $slugs = explode(',',$_GET['category']);
            $catIds = Category::select('id')->whereIn('category_slug_en',$slugs)->pluck('id')->toArray();
            $products = $products->whereIn('category_id',$catIds)->paginate(6);
        }
         if (!empty($_GET['brand'])) {
            $slugs = explode(',',$_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('brand_slug_en',$slugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id',$brandIds)->paginate(6);
        }
        else{
             $products = Product::where('status',1)->orderBy('id','DESC')->paginate(6);
        }

        if(!empty($_GET['price'])){
         $price = explode('-',$_GET['price']);
         $products = $products->whereBetween('selling_price',$price);
      }


        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        return view('frontendv2.shop.shop_page',compact('products','categories','brands'));

    } // end Method 



    public function ShopFilter(Request $request){
        // dd($request->all());

        $data = $request->all();

        // Filter Category

        $catUrl = "";
            if (!empty($data['category'])) {
               foreach ($data['category'] as $category) {
                  if (empty($catUrl)) {
                     $catUrl .= '&category='.$category;
                  }else{
                    $catUrl .= ','.$category;
                  }
               } // end foreach condition
            } // end if condition 


 // Filter Brand 

        $brandUrl = "";
            if (!empty($data['brand'])) {
               foreach ($data['brand'] as $brand) {
                  if (empty($brandUrl)) {
                     $brandUrl .= '&brand='.$brand;
                  }else{
                    $brandUrl .= ','.$brand;
                  }
               } // end foreach condition
            } // end if condition 


         $priceRangeUrl = "";
         if (!empty($data['price_range'])) {
            $priceRangeUrl .= '&price='.$data['price_range'];
         }



            return redirect()->route('shop.page',$catUrl.$brandUrl.$priceRangeUrl);

    } // end Method 





    
          
            
    

          
    
    
  
}