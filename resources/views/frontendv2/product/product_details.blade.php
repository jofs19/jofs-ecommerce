@extends('frontendv2.main_master')
@section('content')

@section('title')
{{ $product->product_name_en }} Product Details
@endsection

      <!-- Custom page title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="{{ route('shop.page') }}">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page"><span id="pname">@if(session()->get('language') == 'filipino') {{ $product->product_name_fil }} @else {{ $product->product_name_en }} @endif</span></li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-2" id="pname">@if(session()->get('language') == 'filipino') {{ $product->product_name_fil }} @else {{ $product->product_name_en }} @endif</h1>
            <div>

                {{-- STAR RATING --}}

            @php 
                $reviewcount = App\Models\Review::where('product_id',$product->id)->where('status',1)->latest()->get();
                $average = App\Models\Review::where('product_id',$product->id)->where('status',1)->avg('rating');
            @endphp 	

              <div class="star-rating">


                @if($average == 0)
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star"></i>                
                @elseif($average == 1 || $average < 2)
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star"></i>
                @elseif($average == 2 || $average < 3)
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star-filled active"></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star "></i>
                <i class="star-rating-icon ci-star"></i>
               @elseif($average == 3 || $average < 4)
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star "></i>
               <i class="star-rating-icon ci-star"></i>
             
               @elseif($average == 4 || $average < 5)
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star"></i>
               @elseif($average == 5 || $average < 5)
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
               <i class="star-rating-icon ci-star-filled active"></i>
                @endif
             
              </div>

              @if(count($reviewcount) < 1)

              <span class="d-inline-block fs-sm text-white opacity-70 align-middle mt-1 ms-1">    
                        No Reviews yet
              </span>


            @else
            @php
                $convertAverage = number_format($average, 0, '.', '');
              @endphp
              <span class="d-inline-block fs-sm text-white opacity-70 align-middle mt-1 ms-1">               
               ({{ $convertAverage }} out of 5)
              
              
              </span>
            @endif

                {{-- END STAR RATING --}}
              
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="bg-light shadow-lg rounded-3">
          <!-- Tabs-->
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link py-4 px-sm-4 active" href="#general" data-bs-toggle="tab" role="tab">Product <span class='d-none d-sm-inline'>Info</span></a></li>
            {{-- <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#specs" data-bs-toggle="tab" role="tab"><span class='d-none d-sm-inline'>Tech</span> Specs</a></li> --}}
            <li class="nav-item"><a class="nav-link py-4 px-sm-4" href="#reviews" data-bs-toggle="tab" role="tab">Reviews <span class="fs-sm opacity-60">({{ count($reviewcount) }})</span></a></li>
          </ul>
          <div class="px-4 pt-lg-3 pb-3 mb-5">
            <div class="tab-content px-lg-3">

              <!-- General info tab-->
              <div class="tab-pane fade show active" id="general" role="tabpanel">
                <div class="row">
                  <!-- Product gallery-->
                  <div class="col-lg-7 pe-lg-0">
                    <div class="product-gallery">

                      <div class="product-gallery-preview order-sm-2">
                        @foreach($multiImag as $img)

                        @if($loop->first)
                        <div class="product-gallery-preview-item active" id="slide{{ $img->id }}"><img class="image-zoom" src="{{ asset($img->photo_name ) }}" data-zoom="{{ asset($img->photo_name ) }}" alt="Product image">
                            <div class="image-zoom-pane"></div>
                          </div>
                        @else
                        <div class="product-gallery-preview-item" id="slide{{ $img->id }}"><img class="image-zoom" src="{{ asset($img->photo_name ) }}" data-zoom="{{ asset($img->photo_name ) }}" alt="Product image">
                            <div class="image-zoom-pane"></div>
                          </div>
                        @endif
               

                        @endforeach

                      </div>
                      <div class="product-gallery-thumblist order-sm-1">
                        @foreach($multiImag as $img)

                        @if($loop->first)

                        <a class="product-gallery-thumblist-item active" href="#slide{{ $img->id }}"><img src="{{ asset($img->photo_name ) }}" alt="Product thumb"></a>

                        @else

                        <a class="product-gallery-thumblist-item" href="#slide{{ $img->id }}"><img src="{{ asset($img->photo_name ) }}" alt="Product thumb"></a>

                        @endif

                        @endforeach
                        {{-- <a class="product-gallery-thumblist-item video-item" href="https://www.youtube.com/watch?v=nrQevwouWn0">
                          <div class="product-gallery-thumblist-item-text"><i class="ci-video"></i>Video</div></a> --}}
                        </div>
                    </div>
                  </div>
                  <!-- Product details-->
                  <div class="col-lg-5 pt-4 pt-lg-0">
                    <div class="product-details ms-auto pb-3">
                        

                      @if ($product->discount_price == NULL)
                      <div class="h3 fw-normal text-accent mb-3 me-1">${{ $product->selling_price }}.<small>00</small></div>
                      @else

                      <div class="mb-3">
                        <del class="text-muted fs-lg me-3">₱ {{ $product->selling_price }}.<small>00</small></del>

                        <span class="h3 fw-normal text-accent me-1">₱ {{ $product->discount_price }}.<small>00</small></span>
                        
                        <span class="badge bg-danger badge-shadow align-middle mt-n2">Sale</span>
                      </div>

                      
                      @endif

                      
                     

                                      
                        
                        
                        {{-- @foreach ($product_color_en as $color)
                          @if($color == null)

                          @else
                          @if($loop->iteration == 1)
                          <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1 ">

                          Variant:
                          
                        </span>
                        <span class="text-muted" id="color">----</span>
                    </div>
                    @endif
                          @endif
                        @endforeach --}}
                                        

<br>

                      <div class="position-relative me-n4 mb-3">

                        

                        @if($product->product_qty < 1)
                        <div class="product-badge product-not-available mt-n1"><i class="ci-security-close"></i>Out of Stock</div>

                        @else
                        <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Product available</div>

                        @endif

                      </div>

                      <br>


                      <!-- Select Color -->
                      @if($product->product_color_en == NULL || $product->product_color_fil == NULL)

                      @else

                      <div class="mb-3">
                        <label for="color" class="form-label">Product Options:</label>
                        <select class="form-select" id="color">
                          <option class="bg-secondary" selected disabled>Select variant...</option>

                          @foreach($product_color_en as $color)
                          <option value="{{ $color }}">{{ ucwords($color) }}</option>		 
                          @endforeach
                          
                        </select>
                      </div>

                      @endif

                      @if($product->product_size_en == null)

                      @else	
                      <div class="mb-3">
                        {{-- <div class="d-flex justify-content-between align-items-center pb-1">
                          <label class="form-label" for="product-size">Choose Size:</label><a class="nav-link-style fs-sm" href="#size-chart" data-bs-toggle="modal"><i class="ci-ruler lead align-middle me-1 mt-n1"></i>Size guide</a>
                        </div> --}}
                        <select class="form-select" id="size">
                          <option selected disabled class="bg-faded-dark">Select size...</option>
                          @foreach($product_size_en as $size)
                          <option value="{{ $size }}">{{ ucwords($size) }}</option>		 
                          @endforeach
                        </select>
                      </div>
                      @endif

                      {{-- <!-- Size options (radio buttons) -->
<div class="form-check form-option form-check-inline mb-2">
  <input type="radio" class="form-check-input" id="xl" name="size" checked>
  <label for="xl" class="form-option-label">50 ML</label>
</div>
<div class="form-check form-option form-check-inline mb-2">
  <input type="radio" class="form-check-input" id="l" name="size" checked>
  <label for="l" class="form-option-label">100 ML</label>
</div>
<div class="form-check form-option form-check-inline mb-2">
  <input type="radio" class="form-check-input" id="m" name="size" checked>
  <label for="m" class="form-option-label">150 ML</label>
</div> --}}

                      
                      
                      <div class="d-flex align-items-center pt-2 pb-4">
                        
                        @if($product->product_qty < 1)
                        <input class="form-control me-3" type="number" id="qty" value="0" min="0"  max="0" style="width: 6rem;">
                        @else
                        <input class="form-control me-3" type="number" id="qty" value="1" min="1"  max="{{ $product->product_qty }}" style="width: 6rem;">
                        @endif


                        @if($product->product_qty < 1)
                        
                        <button class="btn btn-secondary btn-shadow d-block w-100" disabled type="button"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                        @else

           <input type="hidden" id="product_id" value="{{ $product->id }}" min="1">
			    <button type="submit" id="try" onclick="addToCart()" class="btn btn-primary btn-shadow d-block w-100" ><i class="ci-cart fs-lg me-2"></i> ADD TO CART</button>

                        @endif




                      </div>
                      <div class="d-flex mb-4">
                        <div class="w-100 me-3">
                          <button class="btn btn-danger btn-shadow d-block w-100" type="button" data-bs-toggle="tooltip" id="{{ $product->id }}" data-bs-placement="left" onclick="addToWishList(this.id)"><i class="ci-heart fs-lg me-2"></i><span class='d-none d-sm-inline'>Add to </span>Wishlist</button>
                        </div>
                        <div class="w-100">
                          <button class="btn btn-accent btn-shadow d-block w-100" type="button"><i class="ci-compare fs-lg me-2"></i>Compare</button>
                        </div>
                      </div>
                      <!-- Product panels-->
                      <div class="accordion mb-4" id="productPanels">
                        <div class="accordion-item">
                          <h3 class="accordion-header"><a class="accordion-button " href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>General info</a></h3>
                          <div class="accordion-collapse collapse show" id="shippingOptions" data-bs-parent="#productPanels">
                            <div class="accordion-body fs-sm">
                              <div class="d-flex justify-content-between border-bottom pb-2">
                                <div>
                                  <div class="fw-semibold text-dark">Product Brand</div>
                                  <div class="fs-sm text-muted">{{ $product->brand->brand_name_en }}</div>
                                </div>
                                <div>...</div>
                              </div>
                              <div class="d-flex justify-content-between border-bottom py-2">
                                <div>
                                  <div class="fw-semibold text-dark">Product Category</div>
                                  <div class="fs-sm text-muted">{{ $product->category->category_name_en }}</div>
                                </div>
                                <div>...</div>
                              </div>
                              <div class="d-flex justify-content-between border-bottom py-2 ">
                                <div>
                                  <div class="fw-semibold text-dark">Product Tag</div>
                                  <div class="fs-sm text-muted">{{ $product->product_tags_en }}</div>
                                </div>
                                <div>...</div>
                              </div>
                              <div class="d-flex justify-content-between pt-2">
                                <div>
                                  <div class="fw-semibold text-dark">Product Stock</div>
                                  <div class="fs-sm text-muted">{{ $product->product_qty }}</div>
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
                                  <dt class="fw-semibold">@if(session()->get('language') == 'filipino') 
                                    {{ $product->short_descp_fil }} 
                                    @else {{  $product->short_descp_en }} 
                                    @endif</dt>
                                  <dd>@if(session()->get('language') == 'filipino') 
                                    {!! $product->long_descp_fil !!} @else {!! $product->long_descp_en !!} @endif</dd>
                                
                                </dl>                                                        
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Sharing-->
                      <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End General info tab -->

              

              <!-- Reviews tab-->
              <div class="tab-pane fade" id="reviews" role="tabpanel">
                <div class="d-md-flex justify-content-between align-items-start pb-4 mb-4 border-bottom">
                  <div class="d-flex align-items-center me-md-3"><img src="img/shop/single/gallery/th05.jpg" width="90" alt="Product thumb">
                    <div class="ps-3">
                      <h6 class="fs-base mb-2">Smartwatch Youth Edition</h6>
                      <div class="h4 fw-normal text-accent">$124.<small>99</small></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center pt-3">
                    <select class="form-select me-2" style="width: 5rem;">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <button class="btn btn-primary btn-shadow me-2" type="button"><i class="ci-cart fs-lg me-sm-2"></i><span class="d-none d-sm-inline">Add to Cart</span></button>
                    <div class="me-2">
                      <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="ci-heart fs-lg"></i></button>
                    </div>
                    <div>
                      <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="tooltip" title="Compare"><i class="ci-compare fs-lg"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Reviews-->
                <div class="row pt-2 pb-3">
                  <div class="col-lg-4 col-md-5">
                    <h2 class="h3 mb-4">74 Reviews</h2>
                    <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                    <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">43</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">16</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">9</span>
                    </div>
                    <div class="d-flex align-items-center mb-2">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">4</span>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                      <div class="w-100">
                        <div class="progress" style="height: 4px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div><span class="text-muted ms-3">2</span>
                    </div>
                  </div>
                </div>
                <hr class="mt-4 mb-3">
                <div class="row py-4">
                  <!-- Reviews list-->
                  <div class="col-md-7">
                    <div class="d-flex justify-content-end pb-4">
                      <div class="d-flex flex-nowrap align-items-center">
                        <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                        <select class="form-select form-select-sm" id="sort-reviews">
                          <option>Newest</option>
                          <option>Oldest</option>
                          <option>Popular</option>
                          <option>High rating</option>
                          <option>Low rating</option>
                        </select>
                      </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                      <div class="d-flex mb-3">
                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/01.jpg" width="50" alt="Rafael Marquez">
                          <div class="ps-3">
                            <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                          </div>
                        </div>
                        <div>
                          <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                          </div>
                          <div class="fs-ms text-muted">83% of users found this review helpful</div>
                        </div>
                      </div>
                      <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                      <ul class="list-unstyled fs-ms pt-1">
                        <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                        <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                      </ul>
                      <div class="text-nowrap">
                        <button class="btn-like" type="button">15</button>
                        <button class="btn-dislike" type="button">3</button>
                      </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                      <div class="d-flex mb-3">
                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/02.jpg" width="50" alt="Barbara Palson">
                          <div class="ps-3">
                            <h6 class="fs-sm mb-0">Barbara Palson</h6><span class="fs-ms text-muted">May 17, 2019</span>
                          </div>
                        </div>
                        <div>
                          <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                          </div>
                          <div class="fs-ms text-muted">99% of users found this review helpful</div>
                        </div>
                      </div>
                      <p class="fs-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                      <ul class="list-unstyled fs-ms pt-1">
                        <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                        <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                      </ul>
                      <div class="text-nowrap">
                        <button class="btn-like" type="button">34</button>
                        <button class="btn-dislike" type="button">1</button>
                      </div>
                    </div>
                    <!-- Review-->
                    <div class="product-review pb-4 mb-4 border-bottom">
                      <div class="d-flex mb-3">
                        <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/03.jpg" width="50" alt="Daniel Adams">
                          <div class="ps-3">
                            <h6 class="fs-sm mb-0">Daniel Adams</h6><span class="fs-ms text-muted">May 8, 2019</span>
                          </div>
                        </div>
                        <div>
                          <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                          </div>
                          <div class="fs-ms text-muted">75% of users found this review helpful</div>
                        </div>
                      </div>
                      <p class="fs-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                      <ul class="list-unstyled fs-ms pt-1">
                        <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                        <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
                      </ul>
                      <div class="text-nowrap">
                        <button class="btn-like" type="button">26</button>
                        <button class="btn-dislike" type="button">9</button>
                      </div>
                    </div>
                    <div class="text-center">
                      <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>Load more reviews</button>
                    </div>
                  </div>
                  <!-- Leave review form-->
                  <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                    <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                      <h3 class="h4 pb-2">Write a review</h3>
                      <form class="needs-validation" method="post" novalidate>
                        <div class="mb-3">
                          <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                          <input class="form-control" type="text" required id="review-name">
                          <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                          <input class="form-control" type="email" required id="review-email">
                          <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                          <select class="form-select" required id="review-rating">
                            <option value="">Choose rating</option>
                            <option value="5">5 stars</option>
                            <option value="4">4 stars</option>
                            <option value="3">3 stars</option>
                            <option value="2">2 stars</option>
                            <option value="1">1 star</option>
                          </select>
                          <div class="invalid-feedback">Please choose rating!</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                          <textarea class="form-control" rows="6" required id="review-text"></textarea>
                          <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="review-pros">Pros</label>
                          <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                        </div>
                        <div class="mb-4">
                          <label class="form-label" for="review-cons">Cons</label>
                          <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                        </div>
                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Reviews tab-->
              
            </div>
          </div>
        </div>
      </div>
      <!-- Product description-->
      {{-- <div class="container pt-lg-3 pb-4 pb-sm-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2 class="h3 pb-2">
              @if(session()->get('language') == 'filipino') 
              {{ $product->short_descp_fil }} 
              @else {{  $product->short_descp_en }} 
              @endif                     
            </h2>

            
            <p class="text">@if(session()->get('language') == 'filipino') 
              {!! $product->long_descp_fil !!} @else {!! $product->long_descp_en !!} @endif</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            
            <img src="{{ asset('frontendv2/assets/img/shop/single/prod-img2.jpg') }}" alt="Product description">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
          </div>
        </div>
      </div> --}}
      <hr class="mb-5">
      <!-- Product carousel (You may also like) Related Products -->
      <div class="container pt-lg-2 pb-5 mb-md-3">
        <h2 class="h3 text-center pb-4">You may also like</h2>
        <div class="tns-carousel tns-controls-static tns-controls-outside">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">

            @foreach($relatedProduct as $product)
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
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

                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}"><img src="{{ asset($product->product_thumbnail) }}" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">@if(session()->get('language') == 'filipino') {{ $product->category->category_name_fil }} @else {{ $product->category->category_name_en }} @endif</a>
                  <h3 class="product-title fs-sm"><a href="#">
                    @if(session()->get('language') == 'filipino') {{ $product->product_name_fil }} @else {{ $product->product_name_en }} @endif</a></h3>
                  <div class="d-flex justify-content-between">

                    @if($product->discount_price == NULL)

                    <div class="product-price"><span class="text-accent fs-sm">
                            ₱ {{ $product->selling_price }} <small>.00</small>
                        </span></div>

                    @else
                    <div class="product-price">
                        <del class="fs-xs text-muted"> ₱ {{ $product->selling_price }}
                            <small>.00</small></del>
                        <span class="fs-sm text-accent"> ₱ {{ $product->discount_price }}
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
              </div>
            </div>
            <!-- End Product-->
            @endforeach
    
          </div>
        </div>
      </div>
      <!-- Product bundles carousel (Cheaper together)-->
      <div class="container pt-lg-1 pb-5 mb-md-3">
        <div class="card card-body pt-5">
          <h2 class="h3 text-center pb-4">Cheaper together</h2>
          <div class="tns-carousel">
            <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 1, &quot;controls&quot;: false, &quot;nav&quot;: true}">
              <div>
                <div class="row align-items-center">
                  <div class="col-md-3 col-sm-5">
                    <div class="card product-card card-static text-center mx-auto" style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/70.jpg" alt="Product"></a>
                      <div class="card-body py-2"><span class="d-inline-block bg-secondary fs-ms rounded-1 py-1 px-2 mb-3">Your product</span>
                        <h3 class="product-title fs-sm"><a href="#">Smartwatch Youth Edition</a></h3>
                        <div class="product-price text-accent">$124.<small>99</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1 col-sm-2 text-center">
                    <div class="display-4 fw-light text-muted px-4">+</div>
                  </div>
                  <div class="col-md-3 col-sm-5">
                    <div class="card product-card card-static text-center mx-auto" style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/72.jpg" alt="Product"></a>
                      <div class="card-body py-2"><span class="d-inline-block bg-danger fs-ms text-white rounded-1 py-1 px-2 mb-3">-20%</span>
                        <h3 class="product-title fs-sm"><a href="#">Smartwatch Wireless Charger</a></h3>
                        <div class="product-price"><span class="text-accent">$16.<small>00</small></span>
                          <del class="fs-sm text-muted">$20.<small>00</small></del>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block col-md-1 text-center">
                    <div class="display-4 fw-light text-muted px-4">=</div>
                  </div>
                  <div class="col-md-4 pt-3 pt-md-0">
                    <div class="bg-secondary p-4 rounded-3 text-center mx-auto" style="max-width: 20rem;">
                      <div class="h3 fw-normal text-accent mb-3 me-1">$140.<small>99</small></div>
                      <button class="btn btn-primary" type="button">Purchase together</button>
                    </div>
                  </div>
                </div>
              </div>
              <div>
                <div class="row align-items-center">
                  <div class="col-md-3 col-sm-5">
                    <div class="card product-card card-static text-center mx-auto" style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/70.jpg" alt="Product"></a>
                      <div class="card-body py-2"><span class="d-inline-block bg-secondary fs-ms rounded-1 py-1 px-2 mb-3">Your product</span>
                        <h3 class="product-title fs-sm"><a href="#">Smartwatch Youth Edition</a></h3>
                        <div class="product-price text-accent">$124.<small>99</small></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-1 col-sm-2 text-center">
                    <div class="display-4 fw-light text-muted px-4">+</div>
                  </div>
                  <div class="col-md-3 col-sm-5">
                    <div class="card product-card card-static text-center mx-auto" style="max-width: 20rem;"><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/71.jpg" alt="Product"></a>
                      <div class="card-body py-2"><span class="d-inline-block bg-danger fs-ms text-white rounded-1 py-1 px-2 mb-3">-15%</span>
                        <h3 class="product-title fs-sm"><a href="#">Bluetooth Headset Air (White)</a></h3>
                        <div class="product-price"><span class="text-accent">$59.<small>00</small></span>
                          <del class="fs-sm text-muted">$69.<small>00</small></del>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="d-none d-md-block col-md-1 text-center">
                    <div class="display-4 fw-light text-muted px-4">=</div>
                  </div>
                  <div class="col-md-4 pt-3 pt-md-0">
                    <div class="bg-secondary p-4 rounded-3 text-center mx-auto" style="max-width: 20rem;">
                      <div class="h3 fw-normal text-accent mb-3 me-1">$183.<small>99</small></div>
                      <button class="btn btn-primary" type="button">Purchase together</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      

@endsection
