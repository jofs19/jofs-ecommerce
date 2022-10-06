@extends('frontendv2.main_master')
@section('content')
@section('title')
Vartouhi | Beauty & Cosmetics Store
@endsection

<head>
    <style>
        .no-stock {
            filter: grayscale(100%);
            transition: filter 1s ease;
        }

        .no-stock:is(:hover, :focus) {
            filter: grayscale(0%);
        }

        @keyframes rotation {
      0% {
        transform: rotate(0deg); }
      100% {
        transform: rotate(360deg); } }
    #loader-wrapper {
      background-color: #FFFFFF;
      position: fixed;
      z-index: 999;
      width: 100%;
      height: 100%;
      text-align: center; }
    .loader {
      width: 40px;
      height: 40px;
      border: 5px solid #000000;
      border-bottom-color: transparent;
      border-radius: 50%;
      margin-top:calc(50vh - 20px);
      display: inline-block;
      box-sizing: border-box;
      -webkit-animation: rotation 1s linear infinite;
      animation: rotation 1s linear infinite; }

    </style>
</head>



{{-- Slider Area --}}

{{-- src="https://th.bing.com/th/id/R.434ceda8ee73af8be14461dec61208b9?rik=spTmIIQe1B68vw&riu=http%3a%2f%2fdrfoley.com%2fwp-content%2fuploads%2fwoman-enjoying-skincare.png&ehk=In7JA6ftxEU1NFslhyTzXVYFaf1M%2bf9ydcUrZl9lC7c%3d&risl=&pid=ImgRaw&r=0&sres=1&sresct=1" --}}

{{-- src="https://shorebeautyschool.edu/wp-content/uploads/2018/03/Skin-care-Model-large-1.png" --}}
{{-- src="https://www.naturallashandbronze.com/wp-content/uploads/revslider/main_slider/slider_layer_2.png" --}}



<section class="bg-secondary py-4 pt-md-5">
    <div class="container py-xl-2">
        <div class="row">
            <!-- Slider     -->
            <div class="col-xl-9 pt-xl-4 order-xl-2">
                <div class="tns-carousel">
                    <div class="tns-carousel-inner"
                        data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;mode&quot;: &quot;gallery&quot;}">
                        @foreach ($sliders as $slider)

                        <div>
                            <div class="row align-items-center">
                                <div class="col-md-6 order-md-2">
                                    <img class="d-block mx-auto" src="{{ asset($slider->slider_img) }}"
                                        alt="VR Collection"></div>
                                <div
                                    class="col-lg-5 col-md-6 offset-lg-1 order-md-1 pt-4 pb-md-4 text-center text-md-start">

                                    @php

                                    $count = count($sliders);
                                    $random = rand(1, $count);

                                    $animation = '';

                                    if($random == 1){
                                    if($random == 1){
                                    $animation = 'from-bottom';
                                    }elseif ($random == 2) {
                                    $animation = 'from-top';
                                    }elseif($random == 3){
                                    $animation = 'from-start';
                                    }elseif($random == 4){
                                    $animation = 'from-end';
                                    }

                                    }elseif($random == 2){
                                    if($random == 1){
                                    $animation = 'from-bottom';
                                    }elseif ($random == 2) {
                                    $animation = 'from-top';
                                    }elseif($random == 3){
                                    $animation = 'from-start';
                                    }elseif($random == 4){
                                    $animation = 'from-end';
                                    }
                                    }elseif($random == 3){
                                    if($random == 1){
                                    $animation = 'from-bottom';
                                    }elseif ($random == 2) {
                                    $animation = 'from-top';
                                    }elseif($random == 3){
                                    $animation = 'from-start';
                                    }elseif($random == 4){
                                    $animation = 'from-end';
                                    }
                                    }elseif($random == 4){
                                    if($random == 1){
                                    $animation = 'from-bottom';
                                    }elseif ($random == 2) {
                                    $animation = 'from-top';
                                    }elseif($random == 3){
                                    $animation = 'from-start';
                                    }elseif($random == 4){
                                    $animation = 'from-end';
                                    }

                                    }

                                    @endphp


                                    <h2 class="fw-light pb-1 {{ $animation }}">{{ $slider->title }}</h2>
                                    <h1 class="display-4 {{ $animation }} delay-1">{{ $slider->description }}</h1>
                                    <h5 class="fw-light pb-3 {{ $animation }} delay-2"><small>Only on</small>
                                        <img src="{{ asset('frontendv2/assets/img/vartouhi-logos.svg') }}" width="80"
                                            alt="">
                                    </h5>


                                    <div class="d-table scale-up delay-4 mx-auto mx-md-0"><a
                                            class="btn btn-primary btn-shadow" href="shop-grid-ls.html">Shop Now<i
                                                class="ci-arrow-right ms-2 me-n1"></i></a></div>
                                </div>
                            </div>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>
            <!-- Banner group-->
            <div class="col-xl-3 order-xl-1 pt-4 mt-3 mt-xl-0 pt-xl-0 tilt-in-fwd-tr">
                <div class="table-responsive" data-simplebar>
                    <div class="d-flex d-xl-block"><a
                            class="d-flex align-items-center bg-faded-info rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                            href="#" style="min-width: 16rem;"><img
                                src="{{ asset('frontendv2/assets/img/home/banners/banner-sm01.png') }}" width="125"
                                alt="Banner">
                            <div class="py-4 px-2">
                                <h5 class="mb-2"><span class="fw-light">Next Gen</span><br>Video <span
                                        class="fw-light">with</span><br>360 Cam</h5>
                                <div class="text-info fs-sm">Shop now<i class="ci-arrow-right fs-xs ms-1"></i></div>
                            </div>
                        </a><a class="d-flex align-items-center bg-faded-warning rounded-3 pt-2 ps-2 mb-4 me-4 me-xl-0"
                            href="#" style="min-width: 16rem;"><img
                                src="{{ asset('frontendv2/assets/img/home/banners/banner-sm02.png') }}" width="125"
                                alt="Banner">
                            <div class="py-4 px-2">
                                <h5 class="mb-2"><span class="fw-light">Top Rated</span><br>Gadgets<br><span
                                        class="fw-light">are on </span>Sale</h5>
                                <div class="text-warning fs-sm">Shop now<i class="ci-arrow-right fs-xs ms-1"></i></div>
                            </div>
                        </a><a class="d-flex align-items-center bg-faded-success rounded-3 pt-2 ps-2 mb-4" href="#"
                            style="min-width: 16rem;"><img
                                src="{{ asset('frontendv2/assets/img/home/banners/banner-sm03.png') }}" width="125"
                                alt="Banner">
                            <div class="py-4 px-2">
                                <h5 class="mb-2"><span class="fw-light">Catch Big</span><br>Deals <span
                                        class="fw-light">on</span><br>Earbuds</h5>
                                <div class="text-success fs-sm">Shop now<i class="ci-arrow-right fs-xs ms-1"></i></div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- End Slider Area --}}


{{-- Color Options --}}
@include('frontendv2.common.colorOptions')
{{-- End Color Options --}}


{{-- Trending Products Area --}}

<section class="container pt-5">
    <!-- Heading-->



    <div class="d-flex flex-wrap justify-content-between align-items-center pt-1 border-bottom pb-4 mb-4">
        <h2 class="h3 mb-0 pt-3 me-2">New Arrivals</h2>
        <div class="pt-3"><a class="btn btn-outline-accent btn-sm" href="shop-grid-ls.html">More products<i
                    class="ci-arrow-right ms-1 me-n1"></i></a></div>
    </div>
    <!-- Grid-->
    <div class="row pt-2 mx-n2">
        @foreach($products as $product)

        <!-- Product-->
        <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4" >
            <div class="card product-card cardProduct" >

                @php
                $amount = $product->selling_price - $product->discount_price;
                $discount = ($amount/$product->selling_price) * 100;
                @endphp

                @if($product->discount_price == NULL)
                <span class="badge bg-success badge-shadow">
                    New
                </span> @else
                <span class="badge bg-danger badge-shadow">
                   
                   <i class="ci-discount"></i> Sale {{ round($discount) }}%
                </span>
                @endif



                <div class="product-card-actions d-flex align-items-center"><a class="btn-action nav-link-style me-2"
                        href="#"><i class="ci-compare me-1"></i>Compare</a>

                        {{-- <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button> --}}

                        
                        
                    <button class="btn-wishlist btn-sm heartbeat me-1 showCart" type="submit" 
                    href="#quick-view-electro" data-bs-toggle="modal" data-bs-target="#quick-view-electro" id="{{ $product->id }}" onclick="productView(this.id)"><i class="ci-cart"></i></button>

                    <button class="btn-wishlist btn-sm heartbeat" type="button" data-bs-toggle="tooltip" id="{{ $product->id }}" data-bs-placement="left" onclick="addToWishList(this.id)"><i class="ci-heart"></i></button>




                </div>

                @if ($product->product_qty < 1)
                    {{-- 
                <a class="card-img-top d-block overflow-hidden" href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                    <img src="{{ asset($product->product_thumbnail) }}" alt="Product"></a> --}}

                    <!-- Black overlay -->


                    <div>
                        {{-- <div class="position-absolute fw-medium text-white text-shadow text-center px-10 zindex-5">Out of Stock</div> --}}
                        <a class="card-img-top d-block overflow-hidden no-stock"
                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                            <img src="{{ asset($product->product_thumbnail) }}" alt="Product">
                        </a>

                    </div>

                    @else

                    <a class="card-img-top d-block overflow-hidden"
                        href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img
                            src="{{ asset($product->product_thumbnail) }}" alt="Product"></a>

                    @endif




                    <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">

                            @foreach($categories as $category)

                            @if($category->id == $product->category_id)

                            
                            {{ $category->category_name_en }}
                            @endif


                            @endforeach

                        </a>
                        <h3 class="product-title fs-sm"><a
                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">

                                @if(session()->get('language') == 'filipino') {{ $product->product_name_fil }} @else
                                {{ $product->product_name_en }} @endif

                            </a>
                        </h3>
                        <div class="d-flex justify-content-between">

                            @if($product->discount_price == NULL)

                            <div class="product-price"><span class="text-accent">
                                    ₱ {{ $product->selling_price }} <small>.00</small>
                                </span></div>

                            @else
                            <div class="product-price">
                                <del class="fs-sm text-muted"> ₱ {{ $product->selling_price }}
                                    <small>.00</small></del>
                                <span class="text-accent"> ₱ {{ $product->discount_price }}
                                    <small>.00</small></span>

                            </div>

                            @endif



                            @php
                            $reviewcount =
                            App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                            $average =
                            App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
                            @endphp



                            @if($average == 0 || $average < 0) <a
                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                <div class="star-rating"><i class="star-rating-icon ci-star-filled "></i><i
                                        class="star-rating-icon ci-star-filled "></i><i
                                        class="star-rating-icon ci-star-filled "></i><i
                                        class="star-rating-icon ci-star-filled "></i><i
                                        class="star-rating-icon ci-star-filled "></i>
                                </div>
                                {{-- <span class="review">{{ count($reviewcount) }}
                                Review(s)</span> --}}
                                </a>
                                @elseif($average == 1 || $average < 2) <a
                                    href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i
                                            class="star-rating-icon ci-star-filled "></i><i
                                            class="star-rating-icon ci-star-filled "></i><i
                                            class="star-rating-icon ci-star-filled "></i><i
                                            class="star-rating-icon ci-star-filled "></i>
                                    </div>
                                    {{-- <span class="review">{{ count($reviewcount) }}
                                    Review(s)</span> --}}
                                    </a>
                                    @elseif($average == 2 || $average < 3) <a
                                        href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                        <div class="star-rating"><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled active"></i><i
                                                class="star-rating-icon ci-star-filled "></i><i
                                                class="star-rating-icon ci-star-filled "></i><i
                                                class="star-rating-icon ci-star-filled "></i>
                                        </div>
                                        {{-- <span class="review">{{ count($reviewcount) }}
                                        Review(s)</span> --}}
                                        </a>

                                        @elseif($average == 3 || $average < 4) <a
                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                            <div class="star-rating"><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled active"></i><i
                                                    class="star-rating-icon ci-star-filled "></i><i
                                                    class="star-rating-icon ci-star-filled"></i>
                                            </div>
                                            {{-- <span class="review">{{ count($reviewcount) }}
                                            Review(s)</span> --}}
                                            </a>


                                            @elseif($average == 4 || $average < 5) <a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                <div class="star-rating"><i
                                                        class="star-rating-icon ci-star-filled active"></i><i
                                                        class="star-rating-icon ci-star-filled active"></i><i
                                                        class="star-rating-icon ci-star-filled active"></i><i
                                                        class="star-rating-icon ci-star-filled active"></i><i
                                                        class="star-rating-icon ci-star-filled "></i>
                                                </div>
                                                {{-- <span class="review">{{ count($reviewcount) }}
                                                Review(s)</span> --}}
                                                </a>
                                                @elseif($average == 5 || $average < 5) <div class="reviews">
                                                    <a
                                                        href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                        <div class="star-rating"><i
                                                                class="star-rating-icon ci-star-filled active"></i><i
                                                                class="star-rating-icon ci-star-filled active"></i><i
                                                                class="star-rating-icon ci-star-filled active"></i><i
                                                                class="star-rating-icon ci-star-filled active"></i><i
                                                                class="star-rating-icon ci-star-filled active"></i>
                                                        </div>
                                                        {{-- <span class="review">{{ count($reviewcount) }}
                                                        Review(s)</span> --}}
                                                    </a>
                        </div>

                        @endif





                    </div>
            </div>
            <div class="card-body card-body-hidden">
               {{-- <input type="hidden" id="product_id" value="{{ $product->id }}" min="1"> --}}
                @if($product->product_qty < 1) 
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2 btn-shadow" type="submit" 
                    onclick="addToCart(this.id)" id="{{ $product->id }}"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>

                    @else

                    {{-- <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" id="{{ $product->id }}" data-bs-placement="left" onclick="addToWishList(this.id)"><i class="ci-heart"></i></button> --}}

		            {{-- <input type="hidden" id="product_id" value="{{ $product->id }}" min="1"> --}}
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2 btn-shadow" type="submit" 
                    href="#quick-view-electro" data-bs-toggle="modal" data-bs-target="#quick-view-electro" id="{{ $product->id }}" onclick="productView(this.id)"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
       

                    @endif
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view-electro"
                            data-bs-toggle="modal" data-bs-target="#quick-view-electro" id="{{ $product->id }}"
                            onclick="productView(this.id)">
                            <i class="ci-eye align-middle me-1"></i>Quick view</a></div>

            </div>
        </div>
        <hr class="d-sm-none">
    </div>
    <!-- Product-->
    @endforeach


    <!-- Product-->

    <!-- Product-->

    <!-- Product-->

    <!-- Product-->

    <!-- Product-->

    <!-- Product-->

    </div>


</section>

{{-- End Trending Products Area --}}

{{-- Product Featured Product Area --}}
<section class="container pt-5">

@include('frontendv2.common.featured_products_carousel')
</section>

{{-- End Featured Product Area --}}

{{-- Product Category Area --}}
<section class="container pb-5">

@include('frontendv2.common.category_carousel_practice')
</section>

{{-- End Product Category Area --}}





{{-- Promo Banner Area --}}

<section class="container mt-1 mb-grid-gutter">
    <div class="bg-faded-info rounded-3 py-4">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="px-4 pe-sm-0 ps-sm-5"><span class="badge bg-danger">Limited Offer</span>
                    <h3 class="mt-4 mb-1 text-body fw-light">All new</h3>
                    <h2 class="mb-1">Last Gen iPad Pro</h2>
                    <p class="h5 text-body fw-light">at discounted price. Hurry up!</p>
                    <div class="countdown py-2 h4" data-countdown="07/01/2023 07:00:00 PM">
                        <div class="countdown-days"><span class="countdown-value"></span><span
                                class="countdown-label text-muted">d</span></div>
                        <div class="countdown-hours"><span class="countdown-value"></span><span
                                class="countdown-label text-muted">h</span></div>
                        <div class="countdown-minutes"><span class="countdown-value"></span><span
                                class="countdown-label text-muted">m</span></div>
                        <div class="countdown-seconds"><span class="countdown-value"></span><span
                                class="countdown-label text-muted">s</span></div>
                    </div><a class="btn btn-accent" href="#">View offers<i class="ci-arrow-right fs-ms ms-1"></i></a>
                </div>
            </div>

                @foreach ($special_offer as $product)
                
            <div class="col-md-7"><img src="{{ asset($product->product_thumbnail) }}" alt="iPad Pro"></div>


                @endforeach

            
        </div>
    </div>
</section>

{{-- End Promo Banner Area --}}


{{-- Brand Area --}}

<section class="container mb-5">
    <div class="tns-carousel border-end">
        <div class="tns-carousel-inner"
            data-carousel-options="{ &quot;nav&quot;: false, &quot;controls&quot;: false, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000, &quot;loop&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;360&quot;:{&quot;items&quot;:2},&quot;600&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/13.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/14.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/17.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/16.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/15.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/18.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/19.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
            <div><a class="d-block bg-white border py-4 py-sm-5 px-2" href="#" style="margin-right: -.0625rem;"><img
                        class="d-block mx-auto" src="{{ asset('frontendv2/assets/img/shop/brands/20.png') }}"
                        style="width: 165px;" alt="Brand"></a></div>
        </div>
    </div>
</section>

{{-- End Brand Area --}}


{{-- Widgets Area --}}
@include('frontendv2.common.widgets')
{{-- End Widgets Area --}}




{{-- Blog Area --}}

<section class="container pb-5 mb-md-3">
    <div class="border rounded-3 p-3">
        <div class="row">
            <div class="col-md-4 mb-3 mb-md-0">



                <div class="bg-secondary p-5 text-center"><img class="d-block mb-4 mx-auto"
                        src="https://clipart.info/images/ccovers/1509135295Facebook-Logo-Png.png" width="150" alt="Facebook">
                    <div class="d-flex justify-content-center align-items-center mb-4"><img class="me-2"
                            src="{{ asset('frontendv2/assets/img/home/yt-subscribers.png') }}" width="126"
                            alt="Facebook Followers"><span class="fs-sm">4.2k+</span></div><a
                        class="btn btn-primary border-0 btn-sm mb-3" href="https://www.facebook.com/VartouhiOfficial" style="background-color: #4267B2;" target="_blank"><i
                            class="ci-thumb-up me-2"></i>Like/Follow*</a>
                    <p class="fs-sm mb-0">*View our Facebook page.</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="d-flex flex-wrap justify-content-between align-items-center pt-3 pb-2">
                    <h2 class="h4 mb-3">Latest Blogs from Vartouhi</h2><a
                        class="btn btn-outline-accent btn-sm mb-3" href="{{ route('home.blog') }}">More Blogs<i
                            class="ci-arrow-right fs-xs ms-1 me-n1"></i></a>
                </div>
                <div class="row g-0">
                @foreach($blogpost as $blog)

                @if($loop->last)
                    <div class="col-lg-4 col-6 mb-3 d-lg-none">
                @else

                    <div class="col-lg-4 col-6 mb-3">

                @endif
                        
                        
                        <a class="d-block text-decoration-0 px-2"
                            href="{{ route('post.details', $blog->id) }}" data-bs-toggle="video">


                            <div class="position-relative mb-2"><span
                                    class="badge bg-dark position-absolute bottom-0 end-0 mb-2 me-2">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}</span><img
                                    class="w-100" src="{{ asset($blog->post_image) }}"
                                    alt="Video cover"></div>
                            <h6 class="fs-sm pt-1">@if(session()->get('language') == 'filipino') {{ $blog->post_title_fil }} @else {{ $blog->post_title_en }} @endif</h6>
                        </a>
                    </div>
                               
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- End Blog Area --}}


{{-- Container Blog + Instagram Area --}}
<section class="container-fluid px-0">
    <div class="row g-0">
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary"
                href="blog-list-sidebar.html">
                <div class="card-body text-center"><i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                    <h3 class="h5 mb-1">Read the blog</h3>
                    <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
                </div>
            </a></div>
        <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
                <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                    <h3 class="h5 mb-1">Follow on Instagram</h3>
                    <p class="text-muted fs-sm">#ShopWithCartzilla</p>
                </div>
            </a></div>
    </div>
</section>

{{-- End Container Blog + Instagram Area --}}




@endsection

