<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>@yield('title') </title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="JOFS E-Commerce">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="color-scheme" content="dark"> --}}

    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="John Oliver Santiago">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontendv2/assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontendv2/assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/drift-zoom/dist/drift-basic.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/lightgallery.js/dist/css/lightgallery.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/prismjs/themes/prism.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/prismjs/plugins/toolbar/prism-toolbar.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/prismjs/plugins/line-numbers/prism-line-numbers.css') }}"/>


    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/nouislider/dist/nouislider.min.css') }}"/>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/css/theme.min.css') }}">

    <style>

		.confirm{
			visibility: collapse;
		}

        .product-badge.product-unavailable {
        background-color: #dc3545;
        color: #fff;
    }


    .modal-open .container {
    -webkit-filter: blur(5px) grayscale(90%);
    filter: blur(5px) grayscale(90%);
    }

    .center{
      display: block;
      margin-left: auto;
      margin-right: auto;
      padding: 80px 0;
    }

    /* body.modal-open .container{
    -webkit-filter: blur(4px);
    -moz-filter: blur(4px);
    -o-filter: blur(4px);
    -ms-filter: blur(4px);
    filter: blur(4px);
    filter: url("https://gist.githubusercontent.com/amitabhaghosh197/b7865b409e835b5a43b5/raw/1a255b551091924971e7dee8935fd38a7fdf7311/blur".svg#blur);
    filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='4');
    } */
		

	</style>

  </head>



  
  <!-- Body-->
  <body class="handheld-toolbar-enabled"></body>





            


    <main class="page-wrapper">


      <!-- Navbar Electronics Store-->

      {{-- Header Area--}}
      @include('frontendv2.body.header')
      {{-- End Header Area--}}









      <!-- Hero (Banners + Slider)-->
      {{-- Slider Area --}}
      {{-- Products grid Trending Products Area --}}
      {{-- Promo Banner Area --}}
      {{-- Brand Area --}}
      {{-- Product Widgets Area --}}
      {{-- Blog Area --}}
      {{-- Blog + Instagram info cards --}}

      @yield('content')

      <!-- End Hero (Banners + Slider)-->
      {{-- End Slider Area --}}
      {{-- End Products grid Trending Products Area --}}
      {{-- End Promo Banner Area --}}
      {{-- End Brand Area --}}
      {{-- End Product Widgets Area --}}
      {{-- End Blog Area --}}
      {{-- End Blog + Instagram info cards --}}

      {{-- Size chart Modal --}}
      
      {{-- End Size chart Modal --}}

    </main>
    <!-- Footer-->

    {{-- Footer Area --}}
    @include('frontendv2.body.footer')
    {{-- End Footer Area --}}


    @if(request()->is('/') || request()->is('dashboard') || request()->is('product/details/*') || request()->is('user/wishlist')|| request()->is('mycart'))
    {{-- Mobile UI Area for Home Page --}}
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="{{ route('wishlist') }}"><span class="handheld-toolbar-icon"><i class="ci-heart"></i><span class="badge bg-primary rounded-pill ms-1 wishlistQty"></span>
      </span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1 cartQty"></span></span> <span class="handheld-toolbar-label" id="cartSubTotal"></span></a></div>
    </div>
    {{-- End Mobile UI Area --}}

    @elseif (request()->is('shop') || request()->is('product/tag/*') || request()->is('subcategory/*') || request()->is('subsubcategory/*'))

    {{-- Mobile UI Area for Shop Page --}}
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#shop-sidebar"><span class="handheld-toolbar-icon"><i class="ci-filter-alt"></i></span><span class="handheld-toolbar-label">Filters</span></a><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i><span class="badge bg-primary rounded-pill ms-1 wishlistQty"></span></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1 cartQty"></span></span> <span class="handheld-toolbar-label" id="cartSubTotal"></span></a></div>
    </div>
    {{-- End Mobile UI Area for Shop Page --}}
    @endif


    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    {{-- JQUERY CDN --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{-- VENDOR PLUGINS --}}
    {{-- MAIN THEME JS --}}

    <script src="https://js.stripe.com/v3/"></script>


    {{-- TOASTR + SWEETALERT --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>

    {{-- TOASTR + SWEETALERT CDN --}}



<script>
  @if(Session::has('message'))
  var type = "{{ Session::get('alert-type','info') }}"
  switch(type){
     case 'info':
     toastr.info(" {{ Session::get('message') }} ");
     break;
     case 'success':
     toastr.success(" {{ Session::get('message') }} ");
     break;
     case 'warning':
     toastr.warning(" {{ Session::get('message') }} ");
     break;
     case 'error':
     toastr.error(" {{ Session::get('message') }} ");
     break; 
  }
  @endif  
</script> 

    {{-- <script src="{{ asset('frontendv2/assets/js/jquery-1.11.1.min.js') }}"></script>  --}}
    <script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>

    <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js'></script>


    {{-- Sign-in/Sign-up Modal Area --}}
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">

            {{-- ANCHOR SIGN-IN FORM --}}
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab" method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                @csrf

              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="johnoliversantiago@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="password" name="password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="{{ route('password.request') }}">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            {{-- END SIGN-IN FORM --}}

            {{-- ANCHOR SIGN-UP FORM --}}
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab" method="POST" action="{{ route('register') }}" onSubmit = "return checkPassword(this)">
                @csrf
                {{-- <div class="container scroll-me"> --}}

              <div class="mb-3">
                <label class="form-label" for="su-name">Username</label>
                <input class="form-control" type="text" id="name" name="name" placeholder="John Oliver Santiago" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="jofs@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>

              <div class="mb-3">
                <label for="su-address">Street address</label>
                <input class="form-control" type="text" id="address" name="address" placeholder="(e.g. Padilla St. West)" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>

              <div class="mb-3">
                <label for="su-email">Phone number</label>
                <input class="form-control" type="tel" id="phone" name="phone" placeholder="+(63)-012-3456-789" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>


              <div class="mb-2">
				<label class="form-label" for="password">Enter password</label>
				<input class="form-control" type="password" id="password" name="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" data-bs-toggle="tooltip" data-bs-placement="right" title="Password must contain: Minimum of 8 characters; atleast 1 Alphabet and 1 Number.">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                
				{{-- <div class="form-text"><strong>Password must contain:</strong> Minimum of <strong>8</strong> characters; atleast <strong>1</strong> Alphabet and <strong>1</strong> Number.</div> --}}
				<div class="invalid-feedback">Please provide valid password.</div>
			  </div>

			  <div class="mb-0">
				<label class="form-label" for="password_confirmation">Confirm password</label>
				<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">

                {{-- <div class="invalid-feedback">Password does not match!</div> --}}

                <div class="confirm" id="confirm"><small><span class="text-danger"> Password does not match!</span></small></div>
               
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                  <div class="invalid-feedback">{{ $message }}</div>
              </span>	  
                  
                @enderror
			  </div>

              <button class="btn btn-primary btn-shadow d-block w-100" type="submit" id="sign-up">Sign up</button>
            {{-- </div> --}}

            </form>
          </div>
        </div>
      </div>
    </div>
    {{-- END SIGN-UP FORM --}}


        {{-- Product Quick View Area --}}

            <!-- Quick View Modal Area-->

            <div class="modal-quick-view modal fade" id="quick-view-electro" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-header">
                            

                            <h4 class="modal-title product-title"><a id="plink" href="#" data-bs-toggle="tooltip"
                                    data-bs-placement="right" title="Go to product page">
                                    
                                    <strong><span id="pname"></span> </strong> 
                                    

                                    <i class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" id="closeModel"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <!-- Product gallery-->
                                <div class="col-lg-7 pe-lg-0">
                                    <div class="product-gallery">
                                        <div class="product-gallery-preview order-sm-2">
                                            <div class="product-gallery-preview-item active" id="first">
                                                <img class="image-zoom"
                                                    id="pimage"
                                                    
                                                    alt="Product image">
                                                <div class="image-zoom-pane"></div>
                                            </div>

                                            <div class="product-gallery-preview-item" id="second"><img class="image-zoom"
                                                    src="{{ asset('frontendv2/assets/img/shop/single/gallery/06.jp') }}g"
                                                    data-zoom="{{ asset('frontendv2/assets/img/shop/single/gallery/06.jpg') }}"
                                                    alt="Product image">
                                                <div class="image-zoom-pane"></div>
                                            </div>
                                            <div class="product-gallery-preview-item" id="third"><img class="image-zoom"
                                                    src="{{ asset('frontendv2/assets/img/shop/single/gallery/07.jpg') }}"
                                                    data-zoom="{{ asset('frontendv2/assets/img/shop/single/gallery/07.jpg') }}"
                                                    alt="Product image">
                                                <div class="image-zoom-pane"></div>
                                            </div>
                                            <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom"
                                                    src="{{ asset('frontendv2/assets/img/shop/single/gallery/08.jpg') }}"
                                                    data-zoom="{{ asset('frontendv2/assets/img/shop/single/gallery/08.jpg') }}"
                                                    alt="Product image">
                                                <div class="image-zoom-pane"></div>
                                            </div>
                                        </div>
                                        <div class="product-gallery-thumblist order-sm-1">
                                          <a
                                                class="product-gallery-thumblist-item active" href="#first"><img
                                                id="pgallery"

                                                    alt="Product thumb"></a>
                                                    <a class="product-gallery-thumblist-item"
                                                href="#second"><img
                                                    src="{{ asset('frontendv2/assets/img/shop/single/gallery/th06.jpg') }}"
                                                    alt="Product thumb"></a><a class="product-gallery-thumblist-item"
                                                href="#third"><img
                                                    src="{{ asset('frontendv2/assets/img/shop/single/gallery/th07.jpg') }}"
                                                    alt="Product thumb"></a><a class="product-gallery-thumblist-item"
                                                href="#fourth"><img
                                                    src="{{ asset('frontendv2/assets/img/shop/single/gallery/th08.jpg') }}"
                                                    alt="Product thumb"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product details-->
                                <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                                    <div class="product-details ms-auto pb-3">
                                        <div class="mb-2">
                                            <div class="star-rating">
                                                    <i class="star-rating-icon ci-star-filled active"></i>
                                                    <i class="star-rating-icon ci-star-filled active"></i>
                                                    <i class="star-rating-icon ci-star-filled active"></i>
                                                    <i class="star-rating-icon ci-star-filled active"></i>
                                                    <i class="star-rating-icon ci-star"></i>
                                            </div>
                                            <span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74
                                                Reviews</span>
                                        </div>

                                        {{-- <div class="h3 fw-normal text-accent mb-3 me-1"><span id="oldprice"></span>.<small>00</small></div>
                                        <del class="text-danger me-2" id="pprice">.<small>00</small></del><span id="pprice"></span>.<small>00</small> --}}

                                        <div class="product-price">
                                          <del class="fs-sm text-muted" id="oldprice">
                                              <small>.00</small></del>
                                          <span class="text-accent" id="pprice"> 
                                              <small>.00</small></span>
          
                                      </div>

                                      {{-- <label for="color">Choose Color</label>
                                      <select class="form-control" id="color" name="color"> --}}

                                       


                                        {{-- <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span>
                                          
                                          <span class="text-muted" id="colorOptionText">Dark blue/Orange</span></div> --}}
                                        <div class="position-relative me-n4 mb-3">
                                            



                                            

                                            <div id="aviable"></div>
                                            <br>


                                          {{-- </div>  <!-- // end form group -->
                                          <div class="form-group" id="sizeArea">
                                          <label for="size">Choose Size</label>
                                          <select class="form-control" id="size" name="size">
                                            <option>1</option>
                                             
                                          </select>
                                        </div>  <!-- // end form group --> --}}
                                                                              

                                        </div>

                                        <div class="mb-3">
                                          <label for="color" class="form-label">Choose Variant</label>
                                          <select class="form-select" id="color" name="color" style="width:26rem">
                                            <option class="bg-secondary" disabled>Choose option...</option>
                                            
                                          </select>
                                        </div>

                                        <div class="my-3" id="sizeArea">
                                          <label for="size" class="form-label">Choose Size</label>
                                          <select class="form-select" id="size" name="size">
                                            
                                            <option>1</option>
                                                                                        
                                          </select>
                                        </div>



                                        <div class="d-flex align-items-center pt-2 pb-4">
                                          
                                          {{-- <input type="number" class="form-control" id="qty" value="0" min="1"> --}}
                                          <input class="form-control me-3" type="number" id="qty" min="0" value="0"   style="width: 6rem;">

                                         
                                          
                                          <input type="hidden" id="product_id">
<button type="submit" id="try" class="btn btn-primary btn-shadow d-block w-100 btn-shadow" onclick="addToCart()" ><i class="ci-cart fs-lg me-1"></i>Add to Cart</button>

                                              
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="w-100 me-3">



                                              {{-- <button class="btn btn-primary icon" type="button" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i class="fa fa-heart"></i> </button>

                                              <input type="hidden" id="product_id">
<button type="submit" id="try" class="btn btn-primary mb-2" onclick="addToCart()" >Add to Cart</button> --}}

                                              <input type="hidden" id="product_id">
                                                <button class="btn btn-danger d-block w-100 btn-shadow" type="button" title="Add to Wishlist" onclick="addToWishList()"><i
                                                        class="ci-heart fs-lg me-2"></i><span class='d-none d-sm-inline'>Add to</span> Wishlist</button>







                                            </div>
                                            <div class="w-100">
                                                <button class="btn btn-accent d-block w-100 btn-shadow" type="button"><i
                                                        class="ci-compare fs-lg me-2"></i>Compare</button>
                                            </div>
                                        </div>
                                        
                      <!-- Product panels-->
                      <div class="accordion mb-4" id="productPanels">
                        <div class="accordion-item">
                          <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>General info</a></h3>
                          <div class="accordion-collapse collapse" id="shippingOptions" data-bs-parent="#productPanels">
                            <div class="accordion-body fs-sm">
                              <div class="d-flex justify-content-between border-bottom pb-2">
                                <div>
                                  <div class="fw-semibold text-dark">Product Brand</div>
                                  <div class="fs-sm text-muted"><span id="pbrand"></span></div>
                                </div>
                                <div>...</div>
                              </div>
                              <div class="d-flex justify-content-between border-bottom py-2">
                                <div>
                                  <div class="fw-semibold text-dark">Product Category</div>
                                  <div class="fs-sm text-muted">
                                    
                                    @if(session()->get('language') == 'filipino')
                                    <span id="pcategoryFil"></span>
                                    @else
                                    <span id="pcategoryEng"></span>
                                    @endif



                                  </div>
                                </div>
                                <div>...</div>
                              </div>
                              <div class="d-flex justify-content-between border-bottom py-2 ">
                                <div>
                                  <div class="fw-semibold text-dark">Product Tag</div>
                                  <div class="fs-sm text-muted">

                                    @if(session()->get('language') == 'filipino')
                                    <span id="ptagsFil"></span>
                                    @else
                                    <span id="ptagsEng"></span>
                                    @endif


                                  </div>
                                </div>
                                <div>...</div>
                              </div>
                              <div class="d-flex justify-content-between pt-2">
                                <div>
                                  <div class="fw-semibold text-dark">Product Stock</div>
                                  <div class="fs-sm text-muted"><span id="pquantity"></span></div>
                                </div>
                                <div>...</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="ci-list text-muted fs-lg align-middle mt-n1 me-2"></i>Product Description</a></h3>
                          <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                            <div class="accordion-body pt-3 pb-1">                            
                                <dl>
                                  <dt class="fw-semibold">
                                    @if(session()->get('language') == 'filipino') 
                                    <span id="shortDetailsFil" class="text"></span>
                                    @else 
                                    <span id="shortDetailsEng" class="text"></span>

                                    @endif</dt>
                                  <dd @if(session()->get('language') == 'filipino') 
                                    id="longDetailsFil"
                                    @else
                                    id="longDetailsEng"
                                    @endif
                                    >




                                  </dd>
                                
                                </dl>                                                        
                            </div>
                          </div>
                        </div>
                      </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- End Quick View Modal Area --}}


    <script type="text/javascript">
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
    // Start Product View with Modal 
    function productView(id){
        // alert(id)
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/'+id,
            dataType:'json',
            success:function(data){
                // console.log(data)
                $('#product_id').val(id);
                $('#plink').attr('href','/product/details/'+data.product.id+'/'+data.product.product_slug_en);
                $('#pname').text(data.product.product_name_en);
                $('#price').text(data.product.selling_price);
                $('#pcode').text(data.product.product_code);
                $('#pcategoryEng').text(data.product.category.category_name_en);
                $('#pcategoryFil').text(data.product.category.category_name_fil);
                $('#pbrand').text(data.product.brand.brand_name_en);
                $('#pimage').attr('src','/'+data.product.product_thumbnail);
                $('#pimage').attr('data-zoom','/'+data.product.product_thumbnail);
                $('#pgallery').attr('src','/'+data.product.product_thumbnail);
                $('#shortDetailsEng').text(data.product.short_descp_en);
                $('#shortDetailsFil').text(data.product.short_descp_fil);
                $('#ptagsEng').text(data.product.product_tags_en);
                $('#ptagsFil').text(data.product.product_tags_fil);
                $('#longDetailsEng').html(data.product.long_descp_en);
                $('#longDetailsFil').html(data.product.long_descp_fil);
                $('#pquantity').text(data.product.product_qty);                              
                $('#qty').val(1);
                // Product Price 
                if (data.product.discount_price == null) {
                    $('#pprice').text('');
                    $('#oldprice').text('');
                    $('#pprice').html('₱'+data.product.selling_price+'<small>.00</small>');
                }else{
                    $('#pprice').html('₱'+data.product.discount_price+'<small>.00</small>');
                    $('#oldprice').html('₱'+data.product.selling_price+'<small>.00</small>');
                } // end prodcut price 
                // Start Stock opiton
                if (data.product.product_qty > 0) {
                    $('#aviable').text('');
                    $('#stockout').text('');
                    $('#aviable').html(`<div class="product-badge product-available mt-n1"><i class="ci-security-check" ></i>Product Available</div>`);
                    $('#try').attr('disabled',false);
                    $('#qty').attr('max',data.product.product_qty);  
                }else{
                    $('#aviable').text('');
                    $('#stockout').text('');
                    $('#aviable').html(`<div class="product-badge product-not-available mt-n1"><i
                                                    class="ci-security-close" ></i>Out of Stock</div>`);
                    $('#try').attr('disabled',true);

                    $('#qty').attr('max',data.product.product_qty);
    
                } // end Stock Option 



        // Color
        $('select[name="color"]').empty();        
    $.each(data.color,function(key,value){
        $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
    }) // end color

            


         // Size
    $('select[name="size"]').empty();        
    $.each(data.size,function(key,value){
        $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
        if (data.size == "") {
            $('#sizeArea').hide();
        }else{
            $('#sizeArea').show();
        }
    }) // end size


        
     
            }
        })
     
    }
    // Eend Product View with Modal 
    
    
 // Start Add To Cart Product 
    function addToCart(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+id,
            success:function(data){

              miniCart();

                $('#closeModel').click();
                // console.log(data)
                // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        })
    }
  
// End Add To Cart Product 
</script>


    
    
    <script type="text/javascript">
         function miniCart(){
            $.ajax({
                type: 'GET',
                url: '/product/mini/cart',
                dataType:'json',
                success:function(response){
                  $('span[id="cartSubTotal"]').text('₱ '+response.cartTotal);
                    $('.cartQty').text(response.cartQty);
                  var miniCart = ""
                    $.each(response.carts, function(key,value){
                      
                        miniCart += `<div class="widget-cart-item pb-2 border-bottom">
                                      <button class="btn-close text-danger pt-1" type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" aria-label="Remove"><span
                                              aria-hidden="true">&times;</span></button>
                                      <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                              href="shop-single-v2.html"><img
                                                  src="/${value.options.image}" width="64" alt="Product" class="pt-1"></a>
                                          <div class="ps-2">
                                              <h6 class="widget-product-title"><a href="shop-single-v2.html">${value.name}</a></h6>
                                              <div class="widget-product-meta"><span
                                                      class="text-accent me-2"> ₱ ${value.price}.<small>00</small></span><span
                                                      class="text-muted">x ${value.qty}</span></div>
                                          </div>
                                      </div>
                                  </div>`
                    });
                    
                    if(response.cartQty < 1){
                        miniCart += `<div class="d-flex justify-content-center align-items-center py-3">
                          <p class="fs-sm text-muted mb-0">Your cart is currently empty...</p>
                          
                                        
                                    </div>`
                      $('.checkoutMe').addClass('disabled',true);
                    }else{
                      $('.checkoutMe').removeClass('disabled',false);
                    }
                    
                    $('#miniCart').html(miniCart);
                }
            })
         }
     miniCart();
    
    
     /// mini cart remove Start 
     function miniCartRemove(rowId){
            $.ajax({
                type: 'GET',
                url: '/minicart/product-remove/'+rowId,
                dataType:'json',
                success:function(data){
                miniCart();
                 // Start Message 
                    const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          icon: 'success',
                          showConfirmButton: false,
                          timer: 3000
                        })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            title: data.error
                        })
                    }
                    // End Message 
                }
            });
        }
     //  end mini cart remove 
    </script>
    
    
    <!--  /// Start Add Wishlist Page  //// -->
    
    <script type="text/javascript">
        
      function addToWishList(product_id){
          $.ajax({
              type: "POST",
              dataType: 'json',
              url: "/add-to-wishlist/"+product_id,
              success:function(data){
                
                    // Start Message 
                    const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    
                    showConfirmButton: false,
                    timer: 3000
                  })
    
                  if ($.isEmptyObject(data.error)) {
                      Toast.fire({
                          type: 'success',
                          icon: 'success',
                          title: data.success
                      })
                  }else{
                      Toast.fire({
                          type: 'error',
                          icon: 'error',
                          title: data.error
                      })
                  }
                    // End Message 
                    $('.wishlistQty').text(data.wishlistQty);

    
              }
          })
      }
    
      </script>
    
       <!--  /// End Add Wishlist Page  ////   -->
    
    
       <script type="text/javascript">
        function wishlist(){
           $.ajax({
               type: 'GET',
               url: '/user/get-wishlist-product',           
               dataType:'json',
               success:function(response){
                $('.wishlistQty').text(response.wishlistQty);
                   var rows = ""
                   $.each(response.wishlist, function(key,value){
                       rows += ` 
        <div class="d-sm-flex justify-content-between my-4 mt-lg-4 pb-3 pb-sm-4 border-bottom">
          <div class="d-block d-sm-flex align-items-start text-center text-sm-start"><a class="d-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html" style="width: 10rem;"><img src="/${value.product.product_thumbnail}" alt="Product"></a>
            <div class="pt-2">
              <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">${value.product.product_name_en}</a></h3>
              <div class="fs-sm"><span class="text-muted me-2">Sizes:</span>${value.product.product_size_en != null ? `${value.product.product_size_en}` : `----`}</div>
              <div class="fs-sm"><span class="text-muted me-2">Variants:</span>${value.product.product_color_en != null ? `${value.product.product_color_en}` : `----`} </div>
              <div class="fs-lg text-accent pt-2">${value.product.discount_price == null ? `₱ ${value.product.selling_price}` : `<del class="text-muted fs-lg me-1">₱ ${value.product.selling_price}.<small>00</small></del> <span> ₱ ${value.product.discount_price}</span>`}.<small>00</small></div>
            </div>
          </div>
          <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
            
            <button class="btn btn-outline-primary btn-sm" type="submit" href="#quick-view-electro"
                            data-bs-toggle="modal" data-bs-target="#quick-view-electro" id="${value.id}"
                            onclick="productView(${value.product_id})"><i class="ci-cart me-2"></i>Add to Cart</button>
            <button class="btn btn-outline-danger btn-sm" type="submit" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="ci-trash me-2"></i>Remove</button>
          </div>
        </div>`
           });
                   
                   $('#wishlist').html(rows);
               }
           })
        }
    wishlist();
    
    
     ///  Wishlist remove Start 
     function wishlistRemove(id){
            $.ajax({
                type: 'GET',
                url: '/user/wishlist-remove/'+id,            
                dataType:'json',
                success:function(data){
                wishlist();
                 // Start Message 
                    const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          
                          showConfirmButton: false,
                          timer: 3000
                        })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message 
                }
            });
        }
     // End Wishlist remove   
    
    
    </script> 
        
    <!-- /// End Load Wish list Data  -->
    
    
    <!-- /// Load My Cart /// -->
    
    <script type="text/javascript">
      function cart(){
         $.ajax({
             type: 'GET',
             url: '/user/get-cart-product',
             dataType:'json',
             success:function(response){
              // $('.product_max_qty').attr('max',response.product_max_qty);

              
     var rows = ""
     $.each(response.carts, function(key,value){
         rows += `
         <div class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
          <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img src="/${value.options.image}" width="160" alt="Product"></a>
            <div class="pt-2">
              <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">${value.name}</a></h3>
              <div class="fs-sm"><span class="text-muted me-2">Size:</span>${value.options.size == null ? `---`:`${value.options.size}`}</div>
              <div class="fs-sm"><span class="text-muted me-2">Variant:</span>${value.options.color == null ? `---`:`${value.options.color}`}</div>
              <div class="fs-lg text-accent pt-2"> <span class="fs-ms text-dark">₱ ${value.price}.<small>00</small> x <strong>${value.qty}</strong> = </span>   
                ₱ ${value.subtotal}.<small>00</small></div>
            </div>
          </div>
          <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 10rem;">
            <label class="form-label" for="quantity2">Quantity</label>
              <div class="input-group">

                ${value.qty > 1 ?

                `<button class="btn btn-secondary btn-sm fw-small btn-shadow" type="submit" id="${value.rowId}" onclick="cartDecrement(this.id)" data-bs-toggle="tooltip" data-bs-placement="top" title="decrement">-</button>` :

                `<button class="btn btn-secondary btn-sm fw-small btn-shadow disabled" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="decrement">-</button>`
              }

                <input class="form-control text-center" type="text" placeholder="..." readonly value="${value.qty}" min="1">
                



                <button class="btn btn-secondary btn-sm fw-small btn-shadow stop" type="submit" id="${value.rowId}" onclick="cartIncrement(this.id)" data-bs-toggle="tooltip" data-bs-placement="top" title="increment">+</button>

              </div>


            <button class="btn btn-link px-0 text-danger" type="submit" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="ci-close-circle me-2"></i><span class="fs-sm">Remove</span></button>
          </div>
        </div>`
        

         });
         
        if(response.cartQty < 1){
          rows += `<div class="container py-4 mb-lg-3">
    <div class="row justify-content-center pt-lg-4 text-center">
      <div class="col-lg-5 col-md-7 col-sm-9"><img class="d-block mx-auto mb-5" src="{{ asset('frontendv2/assets/img/pages/404.png') }}" width="340"
          alt="404 Error">
        <h1 class="h2">Your Cart is Empty</h1>
      <a href="{{ url('/') }}">
        <p class="fs-md mb-4">
          <u>Add more products to Cart</u>
        </p>
      </a>
      </div>
    </div>
    
  </div>`
        }
                 
                 $('#cartPage').html(rows);
             }
         })
      }
    cart();
    
    
    ///  Cart remove Start 
    function cartRemove(id){     
      $.ajax({
             type: 'GET',
             url: '/user/cart-remove/'+id,
             dataType:'json',
             success:function(data){
                couponCalculation();
              cart();
                miniCart();         
                $('#couponField').show();
                $('#coupon_name').val(''); 
                // Start Message 
                 const Toast = Swal.mixin({
                       toast: true,
                       position: 'top-end',
                       
                       showConfirmButton: false,
                       timer: 3000
                     })
                 if ($.isEmptyObject(data.error)) {
                     Toast.fire({
                         type: 'success',
                         icon: 'success',
                         title: data.success
                     })
                 }else{
                     Toast.fire({
                         type: 'error',
                         icon: 'error',
                         title: data.error
                     })
                 }
                 // End Message 
             }
         });
     }
    // End Cart remove   
    
    
    // -------- CART INCREMENT --------//
    function cartIncrement(rowId){
            $.ajax({
                type:'GET',
                url: "/cart-increment/"+rowId,
                dataType:'json',
                success:function(data){
                    couponCalculation();
                    cart();
                    miniCart();
                }
            });
        }
     // ---------- END CART INCREMENT -----///
    
    
      // -------- CART Decrement  --------//
      function cartDecrement(rowId){
            $.ajax({
                type:'GET',
                url: "/cart-decrement/"+rowId,
                dataType:'json',
                success:function(data){
                    couponCalculation();
                    cart();
                    miniCart();
                }
            });
        }
     // ---------- END CART Decrement -----///
    
    </script>  
    
    <!-- //End Load My cart / -->
    
    <!--  //// =========== Coupon Apply Start ================= ////  -->
    <script type="text/javascript">
        function applyCoupon(){
          var coupon_name = $('#coupon_name').val();
          $.ajax({
              type: 'POST',
              dataType: 'json',
              data: {coupon_name:coupon_name},
              url: "{{ url('/coupon-apply') }}",
              success:function(data){
                couponCalculation();
                if (data.validity == true) {
                    $('#couponField').hide();
                }
    
                // Start Message 
                    const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    
                    showConfirmButton: false,
                    timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
    
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success
                        })
                    }else{
                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error
                        })
                    }
                    // End Message 
              }
          })
        }  
    
        function couponCalculation(){
        $.ajax({
            type:'GET',
            url: "{{ url('/coupon-calculation') }}",
            dataType: 'json',
            success:function(data){
    
                if (data.total) {
                    $('#couponCalField').html(
                        `<div class="widget mb-3">
              <h2 class="widget-title text-center">Subtotal</h2>
              <h3 class="fw-normal text-center my-4">₱ ${data.total}</h3>

    
            </div>
            <ul class="list-unstyled fs-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">₱ ${data.total}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount:</span><span class="text-end">—</span></li>
            </ul>

              <ul class="list-unstyled fs-lead pb-2 ">
                <li class="d-flex justify-content-between align-items-center"><span class="me-2 fw-bold">Grand Total:</span><span class="text-end">₱ ${data.total}</span></li>
            </ul>`
                )
                }else{
                  @php
                    $total = floor(str_replace(',', '', Cart::Subtotal()));
                    
                  @endphp
                     $('#couponCalField').html(
                        `<div class="widget mb-3">
              <h2 class="widget-title text-center">Subtotal</h2>
              <h3 class="fw-normal text-center my-4">₱ ${data.subtotal}</h3>

    
            </div>
            <ul class="list-unstyled fs-sm pb-2 border-bottom">
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">₱ ${data.subtotal}</span></li>
              <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount:</span><span class="text-end">-₱ ${data.discount_amount}<small>.00</small></span></li>
            </ul>

              <ul class="list-unstyled fs-lead pb-2 ">
                <li class="d-flex justify-content-between align-items-center"><span class="me-2 fw-bold">Grand Total:</span><span class="text-end">₱ ${data.total_amount}<small>.00</small></span></li>
            </ul>
            
<div class="alert alert-accent d-flex text-center alert-dismissible fade show" role="alert">
  <div class="alert-icon"> 
    <i class="ci-discount me-1"></i><small>${Math.floor((data.discount_amount / data.total_value)*100)}</small> 
  </div>
  <div class="text-center">${data.coupon_name.length < 16 ? `${data.coupon_name.substring(0, 16)}`:`${data.coupon_name.substring(0, 16)}...`}   <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="couponRemove()"></button>
</div>
  
</div> `
                )
                }
            }
        });
      }
     couponCalculation();
    
      </script>
      <!-- //////////////// =========== End Coupon Apply Start ================= //// -->
    
    
      <!--  //////////////// =========== Start Coupon Remove================= ////  -->
    
    <script type="text/javascript">
         
        function couponRemove(){
           $.ajax({
               type:'GET',
               url: "{{ url('/coupon-remove') }}",
               dataType: 'json',
               success:function(data){
                   couponCalculation();
                   $('#couponField').show();
                   $('#coupon_name').val('');
                    // Start Message 
                   const Toast = Swal.mixin({
                         toast: true,
                         position: 'top-end',
                         
                         showConfirmButton: false,
                         timer: 3000
                       })
                   if ($.isEmptyObject(data.error)) {
                       Toast.fire({
                           type: 'success',
                           icon: 'success',
                           title: data.success
                       })
                   }else{
                       Toast.fire({
                           type: 'error',
                           icon: 'error',
                           title: data.error
                       })
                   }
                   // End Message 
               }
           });
        }
    </script>






    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('frontendv2/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>

    <script src="{{ asset('frontendv2/assets/vendor/prismjs/components/prism-core.min.j') }}s"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/components/prism-markup.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/components/prism-clike.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/components/prism-javascript.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/components/prism-pug.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/plugins/toolbar/prism-toolbar.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/prismjs/plugins/line-numbers/prism-line-numbers.min.js') }}"></script>

    <script src="{{ asset('frontendv2/assets/vendor/drift-zoom/dist/Drift.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/lightgallery.js/dist/js/lightgallery.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/lg-video.js/dist/lg-video.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/nouislider/dist/nouislider.min.js') }}"></script>

    

    <!-- Main theme script-->
    <script src="{{ asset('frontendv2/assets/js/theme.min.js') }}"></script>

  



  </body>
</html>