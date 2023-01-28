@extends('frontendv2.main_master')
@section('content')

{{-- <head>
    <style>
        .btn-primary {
            background-color: #CCAC00;
            border-color: #CCAC00;

        }

        .btn-primary:hover {
            background-color: #000000;
            border-color: #000000;

        }

    </style>
</head> --}}

<div class="page-title-overlap bg-dark pt-4">
    <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
        <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                    <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a>
                    </li>
                    <li class="breadcrumb-item text-nowrap"><a href="#">Account Dashboard</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My Dashboard</h1>
        </div>
    </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
    <div class="row">
        <!-- ANCHOR Sidebar-->

        @include('frontendv2.common.user_sidebar')

        <!-- ANCHOR End Sidebar-->




        <!-- ANCHOR ORDER VIEW Content (transfer it later) -->
        <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
                <div class="d-flex align-items-center">
                   
                </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="{{ route('user.logout') }}"><i
                        class="ci-sign-out me-2"></i>Sign out</a>
            </div>

          


            @php
                $total_spent = App\Models\Order::where('user_id', Auth::user()->id)->where('status', 'delivered')->sum('amount');
                $total_orders = App\Models\Order::where('user_id', Auth::user()->id)->where('status', 'delivered')->count();
                $total_wishlist = App\Models\Wishlist::where('user_id', Auth::user()->id)->count();
                $total_reviews = App\Models\Review::where('user_id', Auth::user()->id)->count();

                $total_return = App\Models\Order::where('user_id', Auth::user()->id)->where('status', 'return')->count();

                $created_at = App\Models\User::where('id', Auth::user()->id)->first()->created_at->format('d M Y');
                $account_created = App\Models\User::where('id', Auth::user()->id)->first()->created_at->format('d M Y');
                $current_date = Carbon\Carbon::now()->format('d M Y');
                $updated_at = App\Models\User::where('id', Auth::user()->id)->first()->updated_at->format('d M Y');

              // most inserted product in wishlist

              // $greatest_boughtProduct = App\Models\Order::select('product_id', DB::raw('count(*) as total'))->groupBy('product_id')->orderBy('total', 'DESC')->first();

              $greatest_wishlist = App\Models\Wishlist::select('product_id', DB::raw('count(*) as total'))->groupBy('product_id')->orderBy('total', 'DESC')->first();
              $greatest_wishlist_name = App\Models\Product::where('id', $greatest_wishlist->product_id)->first()->product_name_en;
              $greatest_wishlist_count = $greatest_wishlist->total;

              $greatest_reviewedProduct = App\Models\Review::select('product_id', DB::raw('count(*) as total'))->groupBy('product_id')->orderBy('total', 'DESC')->first();
              $greatest_reviewedProduct_name = App\Models\Product::where('id', $greatest_reviewedProduct->product_id)->first()->product_name_en;
              $greatest_reviewedProduct_count = $greatest_reviewedProduct->total;

              $best_seller_product = App\Models\OrderItem::with('product')->select('product_id',DB::raw('count(product_id) as total'))->groupBy('product_id')->orderBy('total','DESC')->first();
              $best_seller_product_name = $best_seller_product->product->product_name_en;
              $best_seller_product_count = $best_seller_product->total;

            @endphp

            

                    


              {{-- {{ $greatest_wishlist }} 

                     {{ $greatest_wishlist_name }}        --}}

                    
                     <div class="row mx-n2 pt-2">
                        <div class="col-md-4 col-sm-6 px-2 mb-4">
                          <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                            <h3 class="fs-sm text text-accent">Most Wishlisted Product</h3>
                            <p class="h2 mb-2">{{ $greatest_wishlist_name }}</p>
                            <p class="fs-ms text-muted"> Wishlisted by {{ $greatest_wishlist_count }} users </p>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-6 px-2 mb-4">
                          <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                            <h3 class="fs-sm text text-accent">Most Reviewed Product</h3>
                            <p class="h2 mb-2">{{ $greatest_reviewedProduct_name }}</p>
                            <p class="fs-ms text-muted"> Reviewed by {{ $greatest_reviewedProduct_count }} users </p>
                          </div>
                        </div>

                        <div class="col-md-4 col-sm-6 px-2 mb-4">
                          <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                            <h3 class="fs-sm text text-accent">Best Seller Product</h3>
                            <p class="h2 mb-2">{{ $best_seller_product_name }}</p>
                            <p class="fs-ms text-muted"> Sold by {{ $best_seller_product_count }} users </p>
                          </div>
                        </div>  
                        

                     </div>

                     




                     {{-- <div class="row mx-n2 pt-2">
                      <div class="col-md-4 col-sm-6 px-2 mb-4">
                        <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                          <h3 class="fs-sm text" style="color: #CCAC00;">Most Bought Product</h3>
                          <p class="h2 mb-2">{{ $greatest_boughtProduct_name }}</p>
                          <p class="fs-ms text-muted"> Wishlisted by {{ $greatest_boughtProduct_count }} users </p>
                        </div>
                      </div>

                          

                   </div> --}}



                    

                    


            <h2 class="h3 py-2 text-center text-sm-start">Your total spent / orders</h2>

            <div class="row mx-n2 pt-2">
                <div class="col-md-4 col-sm-6 px-2 mb-4">
                  <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                    <h3 class="fs-sm text-muted">Total spent</h3>
                    <p class="h2 mb-2">₱{{ $total_spent-$total_return }}.<small>00</small> </p>

                    
                    <p class="fs-ms text-muted mb-0">
                        @if ($account_created == $current_date)

                        {{ $account_created }}
                        
                        @else

                        {{ $account_created }} - {{ $current_date }}

                        @endif
                        
                        
                        
                    </p>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 px-2 mb-4">
                  <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                    <h3 class="fs-sm text-muted">Delivered Orders</h3>
                    <p class="h2 mb-2">{{ $total_orders }}</p>
                    <a class="fs-ms text-muted mb-0" href="{{ route('shop.page') }}"><u>Shop now</u></a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12 px-2 mb-4">
                  <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                    <h3 class="fs-sm text-muted">Returned Orders</h3>
                    <p class="h2 mb-2">{{ $total_return }}</p>
                    <a class="fs-ms text-muted mb-0" href="{{ route('return.order.list') }}"><u>View Returned Orders</u></a>
                  </div>
                </div>
              </div>
            <!-- Contacts card: Shadow -->
            {{-- <div class="card border-0 shadow">
                <div class="card-img-top overflow-hidden">
                    <!-- Google map embed iframe goes here -->
                </div>
                <div class="card-body">
                    <h6>New York, USA</h6>
                    <ul class="list-unstyled mb-0">
                        <li class="d-flex pb-3 border-bottom">
                            <i class="ci-location fs-lg mt-2 mb-0 text-primary"></i>
                            <div class="ps-3">
                                <span class="fs-ms text-muted">Find us</span>
                                <a href="#" class="d-block text-heading fs-sm">769, Industrial Dr, West Chicago, IL
                                    60185, USA</a>
                            </div>
                        </li>
                        <li class="d-flex pt-2 pb-3 border-bottom">
                            <i class="ci-phone fs-lg mt-2 mb-0 text-primary"></i>
                            <div class="ps-3">
                                <span class="fs-ms text-muted">Call us</span>
                                <a href="tel:+1212477690000" class="d-block text-heading fs-sm">+1 (212) 477 690 000</a>
                            </div>
                        </li>
                        <li class="d-flex pt-2m">
                            <i class="ci-mail fs-lg mt-2 mb-0 text-primary"></i>
                            <div class="ps-3">
                                <span class="fs-ms text-muted">Write us</span>
                                <a href="newyork:email@example.com"
                                    class="d-block text-heading fs-sm">newyork@example.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div> --}}

            {{-- <div class="row">

                <div class="col-lg-4 col-sm-6">
            <div class="card text-white bg-danger">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title text-white">Dark card title</h5>
                  <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

              <div class="col-lg-4 col-sm-6">

              <div class="card text-white bg-accent">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title text-white">Dark card title</h5>
                  <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

              <div class="col-lg-4 col-sm-6">

              <div class="card text-white bg-success">
                <div class="card-header">Header</div>
                <div class="card-body">
                  <h5 class="card-title text-white">Dark card title</h5>
                  <p class="card-text fs-sm">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>--}}

            </div> 

            

        </section>


        <!-- ANCHOR End ORDER VIEW Content (transfer it later) -->
        

    </div>
    
</div>



@endsection
