{{-- <i><span class="ci-globe"></span></i>Language --}}

<header class="shadow-sm">
  <!-- Topbar-->
  <div class="topbar topbar-dark bg-dark">
      <div class="container">
          <div>
              <div class="topbar-text dropdown disable-autohide">

                  @if(session()->get('language') == 'filipino')
                  <a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img
                          alt="File:Flag of the Philippines.svg"
                          src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/800px-Flag_of_the_Philippines.svg.png?20210924060643"
                          decoding="async" width="20"
                          srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1200px-Flag_of_the_Philippines.svg.png?20210924060643 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1600px-Flag_of_the_Philippines.svg.png?20210924060643 2x"
                          data-file-width="1200" data-file-height="600" class="me-2">Pumili ng Wika</a>
                  @else
                  <a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img alt="US Flag"
                          src="{{ asset('frontendv2/assets/img/flags/en.png') }}" width="20" class="me-2">Select
                      Language</a>
                  @endif

                  <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end border border-light">

                      {{-- <li><a class="dropdown-item" href="#"><img alt="US Flag" src="{{ asset('frontendv2/assets/img/flags/en.png') }}"
                      width="20" class="me-2">English</a></li> --}}

                      @if(session()->get('language') == 'filipino')
                      <li><a class="dropdown-item" href="{{ route('english.language') }}"><img alt="US Flag"
                                  src="{{ asset('frontendv2/assets/img/flags/en.png') }}" width="20"
                                  class="me-2">English</a></li>
                      @else
                      <li><a class="dropdown-item" href="{{ route('filipino.language') }}"><img
                                  alt="File:Flag of the Philippines.svg"
                                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/800px-Flag_of_the_Philippines.svg.png?20210924060643"
                                  decoding="async" width="20"
                                  srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1200px-Flag_of_the_Philippines.svg.png?20210924060643 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1600px-Flag_of_the_Philippines.svg.png?20210924060643 2x"
                                  data-file-width="1200" data-file-height="600" class="me-2">Filipino</a></li>


                      @endif

                      {{-- <li><a class="dropdown-item" href="#"><img alt="File:Flag of the Philippines.svg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/800px-Flag_of_the_Philippines.svg.png?20210924060643" decoding="async" width="20" srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1200px-Flag_of_the_Philippines.svg.png?20210924060643 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1600px-Flag_of_the_Philippines.svg.png?20210924060643 2x" data-file-width="1200" data-file-height="600" class="me-2">Filipino</a></li> --}}

                  </ul>
              </div>
              <div class="topbar-text text-nowrap d-none d-md-inline-block border-start border-light ps-3 ms-3"><span
                      class="text-muted me-1">Available 24/7 at</span><a class="topbar-link"
                      href="tel:00331697720">(00) 33 169 7720</a></div>
          </div>
          <div class="topbar-text dropdown d-md-none ms-auto"><a class="topbar-link dropdown-toggle" href="#"
                  data-bs-toggle="dropdown">Wishlist / Compare / Track</a>
              <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="account-wishlist.html"><i
                              class="ci-heart text-muted me-2"></i>Wishlist (3)</a></li>
                  <li><a class="dropdown-item" href="comparison.html"><i
                              class="ci-compare text-muted me-2"></i>Compare (3)</a></li>
                  <li><a class="dropdown-item" href="order-tracking.html"><i
                              class="ci-location text-muted me-2"></i>Order tracking</a></li>
              </ul>
          </div>
          <div class="d-none d-md-block ms-3 text-nowrap"><a class="topbar-link d-none d-md-inline-block"
                  href="account-wishlist.html"><i class="ci-heart mt-n1"></i>Wishlist (3)</a><a
                  class="topbar-link ms-3 ps-3 border-start border-light d-none d-md-inline-block"
                  href="comparison.html"><i class="ci-compare mt-n1"></i>Compare (3)</a><a
                  class="topbar-link ms-3 border-start border-light ps-3 d-none d-md-inline-block"
                  href="order-tracking.html"><i class="ci-location mt-n1"></i>Order tracking</a></div>
      </div>
  </div>
  <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
  <div class="navbar-sticky bg-light">
      <div class="navbar navbar-expand-lg navbar-dark bg-darker py-0 my-0">
          <div class="container">
              <a class="navbar-brand d-none d-sm-block me-3 flex-shrink-0" href="{{ url('/') }}">
                  <img src="{{ asset('frontendv2/assets/img/vartouhi-logoss.png') }}" width="142" alt="Cartzilla"></a>
              <a class="navbar-brand d-sm-none me-2" href="index.html">
                  <img src="{{ asset('frontendv2/assets/img/vartouhi-logoss.png') }}" width="74" alt="Cartzilla">
              </a>
              <!-- Search-->
              <div class="input-group d-none d-lg-flex flex-nowrap ms-3 me-4"><i
                      class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                  <input class="form-control rounded-start w-100" type="text" placeholder="Search for products">
                  <select class="form-select flex-shrink-0" style="width: 10.5rem;">
                      <option>All categories</option>
                      <option>Computers</option>
                      <option>Smartphones</option>
                      <option>TV, Video, Audio</option>
                      <option>Cameras</option>
                      <option>Headphones</option>
                      <option>Wearables</option>
                      <option>Printers</option>
                      <option>Video Games</option>
                      <option>Home Music</option>
                      <option>Data Storage</option>
                  </select>
              </div>


              <!-- Toolbar-->
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a
                      class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Toggle
                          menu</span>
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div>
                  </a>

                  @auth
                  @php
                  $id = Auth::user()->id;
                  $user = App\Models\User::find($id);
                  @endphp
                  <div class="navbar-tool dropdown ms-2"><a class="navbar-tool-icon-box border dropdown-toggle"
                          href="dashboard-sales.html"><img class="rounded-circle"
                              src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}"
                              alt="User Profile"></a><a class="navbar-tool-text ms-n1"
                          href="dashboard-sales.html"><small>User Account</small>{{ Auth::user()->name }}</a>
                      <div class="dropdown-menu dropdown-menu-end">
                          <div style="min-width: 14rem;">
                              <h6 class="dropdown-header">Account</h6><a
                                  class="dropdown-item d-flex align-items-center" href="{{ route('login') }}"><i
                                      class="ci-settings opacity-60 me-2"></i>Settings</a><a
                                  class="dropdown-item d-flex align-items-center" href="dashboard-purchases.html"><i
                                      class="ci-basket opacity-60 me-2"></i>Purchases</a><a
                                  class="dropdown-item d-flex align-items-center" href="dashboard-favorites.html"><i
                                      class="ci-heart opacity-60 me-2"></i>Favorites<span
                                      class="fs-xs text-muted ms-auto">4</span></a>
                              <div class="dropdown-divider"></div>
                              <h6 class="dropdown-header">Seller Dashboard</h6><a
                                  class="dropdown-item d-flex align-items-center" href="dashboard-sales.html"><i
                                      class="ci-dollar opacity-60 me-2"></i>Sales<span
                                      class="fs-xs text-muted ms-auto">$1,375.00</span></a><a
                                  class="dropdown-item d-flex align-items-center" href="dashboard-products.html"><i
                                      class="ci-package opacity-60 me-2"></i>Products<span
                                      class="fs-xs text-muted ms-auto">5</span></a><a
                                  class="dropdown-item d-flex align-items-center"
                                  href="dashboard-add-new-product.html"><i
                                      class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a><a
                                  class="dropdown-item d-flex align-items-center" href="dashboard-payouts.html"><i
                                      class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a>
                              <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center"
                                  href="{{ route('user.logout') }}"><i class="ci-sign-out opacity-60 me-2"></i>Sign
                                  Out</a>
                          </div>
                      </div>
                  </div>
                  @else
                  <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                      <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                      <div class="navbar-tool-text ms-n3"><small>Hello, Sign in</small>My Account</div>
                  </a>
                  @endauth


                  {{-- My Cart Area --}}
                  <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle"
                          href="shop-cart.html"><span class="navbar-tool-label">4</span><i
                              class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text"
                          href="shop-cart.html"><small>My Cart</small>$ 1000.00</a>
                      <!-- Cart dropdown-->
                      <div class="dropdown-menu dropdown-menu-end">
                          <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                              <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">

                                  {{-- Mini Cart Item Area --}}
                                  <div class="widget-cart-item pb-2 border-bottom">
                                      <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                              aria-hidden="true">&times;</span></button>
                                      <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                              href="shop-single-v2.html"><img
                                                  src="{{ asset('frontendv2/assets/img/shop/cart/widget/05.jpg') }}"
                                                  width="64" alt="Product"></a>
                                          <div class="ps-2">
                                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Bluetooth
                                                      Headphones</a></h6>
                                              <div class="widget-product-meta"><span
                                                      class="text-accent me-2">$259.<small>00</small></span><span
                                                      class="text-muted">x 1</span></div>
                                          </div>
                                      </div>
                                  </div>
                                  {{-- End Mini Cart Item Area --}}


                                  <div class="widget-cart-item py-2 border-bottom">
                                      <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                              aria-hidden="true">&times;</span></button>
                                      <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                              href="shop-single-v2.html"><img
                                                  src="{{ asset('frontendv2/assets/img/shop/cart/widget/06.jpg') }}"
                                                  width="64" alt="Product"></a>
                                          <div class="ps-2">
                                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Cloud
                                                      Security Camera</a></h6>
                                              <div class="widget-product-meta"><span
                                                      class="text-accent me-2">$122.<small>00</small></span><span
                                                      class="text-muted">x 1</span></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="widget-cart-item py-2 border-bottom">
                                      <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                              aria-hidden="true">&times;</span></button>
                                      <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                              href="shop-single-v2.html"><img
                                                  src="{{ asset('frontendv2/assets/img/shop/cart/widget/07.jpg') }}"
                                                  width="64" alt="Product"></a>
                                          <div class="ps-2">
                                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Android
                                                      Smartphone S10</a></h6>
                                              <div class="widget-product-meta"><span
                                                      class="text-accent me-2">$799.<small>00</small></span><span
                                                      class="text-muted">x 1</span></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="widget-cart-item py-2 border-bottom">
                                      <button class="btn-close text-danger" type="button" aria-label="Remove"><span
                                              aria-hidden="true">&times;</span></button>
                                      <div class="d-flex align-items-center"><a class="d-block flex-shrink-0"
                                              href="shop-single-v2.html"><img
                                                  src="{{ asset('frontendv2/assets/img/shop/cart/widget/08.jpg') }}"
                                                  width="64" alt="Product"></a>
                                          <div class="ps-2">
                                              <h6 class="widget-product-title"><a href="shop-single-v2.html">Android
                                                      Smart TV Box</a></h6>
                                              <div class="widget-product-meta"><span
                                                      class="text-accent me-2">$67.<small>00</small></span><span
                                                      class="text-muted">x 1</span></div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                  <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span
                                          class="text-accent fs-base ms-1">$1,247.<small>00</small></span></div><a
                                      class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i
                                          class="ci-arrow-right ms-1 me-n1"></i></a>
                              </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i
                                      class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                          </div>
                      </div>
                  </div>
                  {{-- End My Cart Area --}}



              </div>
          </div>
      </div>
      <div class="navbar navbar-expand-lg navbar-dark bg-darker navbar-stuck-menu mt-n3 pt-0 pb-2">
          <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <!-- Search-->
                  <div class="input-group d-lg-none my-3"><i
                          class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                      <input class="form-control rounded-start" type="text" placeholder="Search for products">
                  </div>
                  <!-- Departments menu-->
                  <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#"
                              data-bs-toggle="dropdown" data-bs-auto-close="outside"><i
                                  class="ci-menu align-middle mt-n1 me-2"></i>@if(session()->get('language') ==
                              'filipino') Mga Kategorya @else Categories @endif</a>

                          {{-- bg- for mobile
                   navbar- for pc
              --}}
                          <ul class="dropdown-menu navbar-dark bg-light">

                              @php
                              $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
                              @endphp

                              @foreach ($categories as $category)

                              <li class="dropdown mega-dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown"><i
                                          class="{{ $category->category_icon }} opacity-60 fs-lg mt-n1 me-2"></i>
                                          @if(session()->get('language') ==
                              'filipino') {{ $category->category_name_fil }} @else {{ $category->category_name_en }} @endif</a>
                                  <div class="dropdown-menu p-0">
                                      <div class="d-flex flex-wrap flex-sm-nowrap px-2">

                                        @php
                                        $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                        @endphp

                                        @foreach ($subcategories as $subcategory)

                                        <div class="mega-dropdown-column pt-4 pb-0 py-sm-4 px-3">
                                          <div class="widget widget-links">

                                           <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}"> <h6 class="fs-base mb-3">
                                            @if(session()->get('language') ==
                              'filipino') {{ $subcategory->subcategory_name_fil }} @else {{ $subcategory->subcategory_name_en }} @endif
                                            </h6></a>



                                            @php
                                            $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                            @endphp   

                            @foreach($subsubcategories as $subsubcategory)



                                              <ul class="widget-list">
                                                  <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                    href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en ) }}">
                                                    @if(session()->get('language') ==
                              'filipino') {{ $subsubcategory->subsubcategory_name_fil }} @else {{ $subsubcategory->subsubcategory_name_en }} @endif
                                                    </a>
                                                  </li>
                                                  
                                              </ul>
                            @endforeach                    
                              
                                          </div>
                                      </div>
                                          
                                        @endforeach




                                          {{-- <div class="mega-dropdown-column py-4 px-3">
                                              <div class="widget widget-links">
                                                  <h6 class="fs-base mb-3">Accessories</h6>
                                                  <ul class="widget-list">
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Monitors</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Bags, Cases &amp; Sleeves</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Batteries</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Charges &amp; Adapters</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Cooling Pads</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Mounts</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Replacement Screens</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Security Locks</a></li>
                                                      <li class="widget-list-item pb-1"><a class="widget-list-link"
                                                              href="#">Stands</a></li>
                                                  </ul>
                                              </div>
                                          </div> --}}
                                          <div class="mega-dropdown-column d-none d-lg-block py-4 text-center"><a
                                                  class="d-block mb-2" href="#"><img
                                                      src="{{ asset('frontendv2/assets/img/shop/departments/07.jpg') }}"
                                                      alt="Computers &amp; Accessories"></a>
                                              <div class="fs-sm mb-3">Starting from <span
                                                      class='fw-medium'>$149.<small>80</small></span></div><a
                                                  class="btn btn-primary btn-shadow btn-sm" href="#">See offers<i
                                                      class="ci-arrow-right fs-xs ms-1"></i></a>
                                          </div>
                                      </div>
                                  </div>
                              </li>

                              @endforeach



                          </ul>
                      </li>
                  </ul>
                  <!-- Primary menu-->
                  <ul class="navbar-nav">
                      <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#"
                              data-bs-toggle="dropdown">@if(session()->get('language') == 'filipino') Home @else Home
                              @endif</a>
                          <ul class="dropdown-menu navbar-dark bg-light">
                              <li class="dropdown position-static mb-0"><a class="dropdown-item border-bottom py-2"
                                      href="home-nft.html"><span class="d-block text-heading">NFT Marketplace<span
                                              class="badge bg-danger ms-1">NEW</span></span><small
                                          class="d-block text-muted">NFTs, Multi-vendor, Auctions</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-nft.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th08.jpg') }}"
                                              alt="NFT Marketplace"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                      href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion
                                          Store v.1</span><small class="d-block text-muted">Classic shop
                                          layout</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-fashion-store-v1.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th01.jpg') }}"
                                              alt="Fashion Store v.1"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                      href="home-electronics-store.html"><span
                                          class="d-block text-heading">Electronics Store</span><small
                                          class="d-block text-muted">Slider + Promo banners</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-electronics-store.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th03.jpg') }}"
                                              alt="Electronics Store"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                      href="home-marketplace.html"><span
                                          class="d-block text-heading">Marketplace</span><small
                                          class="d-block text-muted">Multi-vendor, digital goods</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-marketplace.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th04.jpg') }}"
                                              alt="Marketplace"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                      href="home-grocery-store.html"><span class="d-block text-heading">Grocery
                                          Store</span><small class="d-block text-muted">Full width + Side
                                          menu</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-grocery-store.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th06.jpg') }}"
                                              alt="Grocery Store"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                      href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery
                                          Service</span><small class="d-block text-muted">Food &amp; Beverages
                                          delivery</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-food-delivery.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th07.jpg') }}"
                                              alt="Food Delivery Service"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom"
                                      href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion
                                          Store v.2</span><small class="d-block text-muted">Slider + Featured
                                          categories</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-fashion-store-v2.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th02.jpg') }}"
                                              alt="Fashion Store v.2"></a></div>
                              </li>
                              <li class="dropdown position-static mb-0"><a class="dropdown-item py-2"
                                      href="home-single-store.html"><span class="d-block text-heading">Single Product
                                          Store</span><small class="d-block text-muted">Single product / mono
                                          brand</small></a>
                                  <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block"
                                          href="home-single-store.html" style="width: 250px;"><img
                                              src="{{ asset('frontendv2/assets/img/home/preview/th05.jpg') }}"
                                              alt="Single Product / Brand Store"></a></div>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                              data-bs-toggle="dropdown">@if(session()->get('language') == 'filipino') Pamilihan @else
                              Shop @endif</a>
                          <div class="dropdown-menu p-0 bg-light navbar-dark">
                              <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                  <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                      <div class="widget widget-links mb-4">
                                          <h6 class="fs-base mb-3">Shop layouts</h6>
                                          <ul class="widget-list">
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                                          </ul>
                                      </div>
                                      <div class="widget widget-links mb-4">
                                          <h6 class="fs-base mb-3">Marketplace</h6>
                                          <ul class="widget-list">
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="marketplace-category.html">Category Page</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="marketplace-single.html">Single Item Page</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="marketplace-vendor.html">Vendor Page</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="marketplace-cart.html">Cart</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="marketplace-checkout.html">Checkout</a></li>
                                          </ul>
                                      </div>
                                      <div class="widget widget-links">
                                          <h6 class="fs-base mb-3">Grocery store</h6>
                                          <ul class="widget-list">
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="grocery-catalog.html">Product Catalog</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="grocery-single.html">Single Product Page</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="grocery-checkout.html">Checkout</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                      <div class="widget widget-links mb-4">
                                          <h6 class="fs-base mb-3">Food Delivery</h6>
                                          <ul class="widget-list">
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="food-delivery-category.html">Category Page</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="food-delivery-single.html">Single Item (Restaurant)</a>
                                              </li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="food-delivery-cart.html">Cart (Your Order)</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="food-delivery-checkout.html">Checkout (Address &amp;
                                                      Payment)</a></li>
                                          </ul>
                                      </div>
                                      <div class="widget widget-links">
                                          <h6 class="fs-base mb-3">NFT Marketplace<span
                                                  class="badge bg-danger ms-1">NEW</span></h6>
                                          <ul class="widget-list">
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-catalog-v1.html">Catalog v.1</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-catalog-v2.html">Catalog v.2</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-single-auction-live.html">Single Item - Auction
                                                      Live</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-single-auction-ended.html">Single Item - Auction
                                                      Ended</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-single-buy.html">Single Item - Buy Now</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-vendor.html">Vendor Page</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-connect-wallet.html">Connect Wallet</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="nft-create-item.html">Create New Item</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="mega-dropdown-column pt-1 pt-lg-4 px-2 px-lg-3">
                                      <div class="widget widget-links mb-4">
                                          <h6 class="fs-base mb-3">Shop pages</h6>
                                          <ul class="widget-list">
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-categories.html">Shop Categories</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-single-v1.html">Product Page v.1</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-single-v2.html">Product Page v.2</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="shop-cart.html">Cart</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="checkout-details.html">Checkout - Details</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="checkout-shipping.html">Checkout - Shipping</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="checkout-payment.html">Checkout - Payment</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="checkout-review.html">Checkout - Review</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="checkout-complete.html">Checkout - Complete</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="order-tracking.html">Order Tracking</a></li>
                                              <li class="widget-list-item"><a class="widget-list-link"
                                                      href="comparison.html">Product Comparison</a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                              data-bs-toggle="dropdown" data-bs-auto-close="outside">@if(session()->get('language') ==
                              'filipino') Aking Account @else My Account @endif
                        </a>
                          <ul class="dropdown-menu bg-light navbar-dark">
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Shop User Account</a>
                                  <ul class="dropdown-menu ">
                                      <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                                      <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a>
                                      </li>
                                      <li><a class="dropdown-item" href="account-address.html">Account Addresses</a>
                                      </li>
                                      <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a>
                                      </li>
                                      <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                                      <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                                      <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Vendor Dashboard</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                                      <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                                      <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                                      <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                                      <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                                      <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New
                                              Product</a></li>
                                      <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">NFT Marketplace<span
                                          class="badge bg-danger ms-1">NEW</span></a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="nft-account-settings.html">Profile
                                              Settings</a></li>
                                      <li><a class="dropdown-item" href="nft-account-payouts.html">Wallet &amp;
                                              Payouts</a></li>
                                      <li><a class="dropdown-item" href="nft-account-my-items.html">My Items</a></li>
                                      <li><a class="dropdown-item" href="nft-account-my-collections.html">My
                                              Collections</a></li>
                                      <li><a class="dropdown-item" href="nft-account-favorites.html">Favorites</a>
                                      </li>
                                      <li><a class="dropdown-item"
                                              href="nft-account-notifications.html">Notifications</a></li>
                                  </ul>
                              </li>
                              <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                              <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                              data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                          <ul class="dropdown-menu bg-light navbar-dark">
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Navbar Variants</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a>
                                      </li>
                                      <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a>
                                      </li>
                                      <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a>
                                      </li>
                                      <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a>
                                      </li>
                                      <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a>
                                      </li>
                                      <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a>
                                      </li>
                                      <li><a class="dropdown-item" href="home-electronics-store.html">Electronics
                                              Store</a></li>
                                      <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                                      <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu
                                              (Grocery)</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="about.html">About Us</a></li>
                              <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Help Center</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                                      <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                                      <li><a class="dropdown-item" href="help-submit-request.html">Submit a
                                              Request</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">404 Not Found</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                                      <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="sticky-footer.html">Sticky Footer Demo</a></li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                              data-bs-toggle="dropdown" data-bs-auto-close="outside">Blog</a>
                          <ul class="dropdown-menu bg-light navbar-dark">
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Blog List Layouts</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a>
                                      </li>
                                      <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Blog Grid Layouts</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a>
                                      </li>
                                      <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                                  </ul>
                              </li>
                              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#"
                                      data-bs-toggle="dropdown">Single Post Layouts</a>
                                  <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with
                                              Sidebar</a></li>
                                      <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                              data-bs-toggle="dropdown">Docs / Components</a>
                          <ul class="dropdown-menu bg-light navbar-dark">
                              <li><a class="dropdown-item" href="docs/dev-setup.html">
                                      <div class="d-flex">
                                          <div class="lead text-muted pt-1"><i class="ci-book"></i></div>
                                          <div class="ms-2"><span
                                                  class="d-block text-heading">Documentation</span><small
                                                  class="d-block text-muted">Kick-start customization</small></div>
                                      </div>
                                  </a></li>
                              <li class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="components/typography.html">
                                      <div class="d-flex">
                                          <div class="lead text-muted pt-1"><i class="ci-server"></i></div>
                                          <div class="ms-2"><span class="d-block text-heading">Components<span
                                                      class="badge bg-info ms-2">40+</span></span><small
                                                  class="d-block text-muted">Faster page building</small></div>
                                      </div>
                                  </a></li>
                              <li class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="docs/changelog.html">
                                      <div class="d-flex">
                                          <div class="lead text-muted pt-1"><i class="ci-edit"></i></div>
                                          <div class="ms-2"><span class="d-block text-heading">Changelog<span
                                                      class="badge bg-success ms-2">v2.4.0</span></span><small
                                                  class="d-block text-muted">Regular updates</small></div>
                                      </div>
                                  </a></li>
                              <li class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="mailto:support@createx.studio">
                                      <div class="d-flex">
                                          <div class="lead text-muted pt-1"><i class="ci-help"></i></div>
                                          <div class="ms-2"><span class="d-block text-heading">Support</span><small
                                                  class="d-block text-muted">support@createx.studio</small></div>
                                      </div>
                                  </a></li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
</header>
