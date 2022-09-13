{{-- <i><span class="ci-globe"></span></i>Language --}}

<header class="shadow-sm">
  <!-- Topbar-->
  <div class="topbar topbar-dark bg-dark">
      <div class="container">
          <div>
              <div class="topbar-text dropdown disable-autohide">

                  @if(session()->get('language') == 'filipino')
                  <a class="topbar-link dropdown-toggle d-sm-block text-xs" href="#" data-bs-toggle="dropdown"><img
                          alt="File:Flag of the Philippines.svg"
                          src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/800px-Flag_of_the_Philippines.svg.png?20210924060643"
                          decoding="async" width="20"
                          srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1200px-Flag_of_the_Philippines.svg.png?20210924060643 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1600px-Flag_of_the_Philippines.svg.png?20210924060643 2x"
                          data-file-width="1200" data-file-height="600" class="me-2">Lengguwahe </a>
                  @else
                  <a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img alt="US Flag"
                          src="{{ asset('frontendv2/assets/img/flags/en.png') }}" width="20" class="me-2">
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
                      href="tel:00331697720">(+63) 947 5220 247</a></div>
          </div>
          <div class="topbar-text dropdown d-md-none ms-auto"><a class="topbar-link dropdown-toggle" href="#"
                  data-bs-toggle="dropdown">Wishlist / Compare / Track</a>
              <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="account-wishlist.html"><i
                              class="ci-heart text-muted me-2"></i>@if(session()->get('language') ==
                              'filipino') Kagustuhan (3) @else Wishlist (3) @endif</a></li>
                  <li><a class="dropdown-item" href="comparison.html"><i
                              class="ci-compare text-muted me-2"></i>@if(session()->get('language') ==
                              'filipino') Ikumpara (3) @else Compare (3) @endif </a></li>
                  <li><a class="dropdown-item" href="order-tracking.html"><i
                              class="ci-location text-muted me-2"></i>@if(session()->get('language') ==
                              'filipino') Sundan ang Order @else Order Tracking @endif </a></li>
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
              <a class="navbar-brand d-sm-none me-2" href="{{ url('/') }}">
                  <img src="{{ asset('frontendv2/assets/img/vartouhi-logoss.png') }}" width="100" alt="Cartzilla">
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
                          href="{{ route('login') }}"><img class="rounded-circle"
                              src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}"
                              alt="User Profile"></a><a class="navbar-tool-text ms-n1"
                          href="{{ route('login') }}"><small>User Account</small>{{ Auth::user()->name }}</a>
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
                          href="shop-cart.html"><small>My Cart</small>₱ 1200.00</a>
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
                      <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}"> 
                            <i class="ci-home align-middle mt-n1 me-2"></i> @if(session()->get('language') == 'filipino') Home @else Home
                              @endif
                        </a>
                          
                      </li>

                      <li class="nav-item {{ (request()->is('shop')) || (request()->is('product/tag/*')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('shop.page') }}">
                        <i class="ci-store align-middle mt-n1 me-2"></i>@if(session()->get('language') == 'filipino') Pamilihan @else
                              Shop @endif</a>
                          
                      </li>


                      {{-- <li class="nav-item dropdown">
                        <a class="nav-link" href="#"
                              data-bs-toggle="dropdown" data-bs-auto-close="outside"><i class="ci-user-circle align-middle mt-n1 me-2"></i>@if(session()->get('language') ==
                              'filipino') Aking Account @else My Account @endif
                        </a>
                          
                      </li> --}}

                      <li class="nav-item"><a class="nav-link" href="#" data-bs-auto-close="outside">
                        <i class="ci-briefcase align-middle mt-n1 me-2"></i>@if(session()->get('language') == 'filipino') Tungkol sa Amin @else
                              About Us @endif</a>
                          
                      </li>
                      
                      <li class="nav-item"><a class="nav-link" href="#" data-bs-auto-close="outside">
                        <i class="ci-phone align-middle mt-n1 me-2"></i>@if(session()->get('language') == 'filipino') Kontakin kami @else
                              Contact Us @endif</a>
                          
                      </li>
                      <li class="nav-item"><a class="nav-link" href="#">
                        <i class="ci-image align-middle mt-n1 me-2"></i>@if(session()->get('language') == 'filipino') Talaan @else
                              Blog @endif</a>
                          
                      </li>
                  </ul>
              </div>
              
          </div>
      </div>
  </div>
</header>
