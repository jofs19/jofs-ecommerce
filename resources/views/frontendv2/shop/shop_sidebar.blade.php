      <!-- Sidebar-->
      <aside class="col-lg-4">
        <!-- Sidebar-->
        <div class="offcanvas offcanvas-collapse bg-white w-100 rounded-3 shadow-lg py-1" id="shop-sidebar" style="max-width: 22rem;">
          <div class="offcanvas-header align-items-center shadow-sm">
            <h2 class="h5 mb-0">Filters</h2>
            <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
            <!-- Categories-->
            <div class="widget widget-categories mb-4 pb-4 border-bottom">
              <h3 class="widget-title">Categories</h3>
              <div class="accordion mt-n1" id="shop-categories">
                <!-- Shoes-->

                {{-- Accordion Category--}}
                @foreach($categories as $category)

                <div class="accordion-item">
                  <h3 class="accordion-header"><a class="accordion-button collapsed" href="#collapse{{ $category->id }}" 
                    role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">@if(session()->get('language') == 'filipino') {{ $category->category_name_fil }} @else {{ $category->category_name_en }} @endif </a></h3>
                  <div class="accordion-collapse collapse" id="collapse{{ $category->id }}" data-bs-parent="#shop-categories">
                    <div class="accordion-body">
                      <div class="widget widget-links widget-filter">
                        <div class="input-group input-group-sm mb-2">
                          <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                        </div>

                        @php
                        $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                        @endphp 


                        <ul class="widget-list widget-filter-list pt-1" style="height: 5rem;" data-simplebar data-simplebar-auto-hide="false">
                            @php
                            $total = 0;
                            @endphp

                            @foreach($subcategories as $subcategory)
                            @php
                            $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                            $total += $subsubcategories->count();
                            @endphp
                            @endforeach
                          {{-- <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{ $category->category_slug_en }}"><span class="widget-filter-item-text">View all</span><span class="fs-xs text-muted ms-3"></span></a></li> --}}

                          @foreach($subcategories as $subcategory)

                          <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}"><span class="widget-filter-item-text">@if(session()->get('language') == 'filipino') {{ $subcategory->subcategory_name_fil }} @else {{ $subcategory->subcategory_name_en }} @endif</span><span class="fs-xs text-muted ms-3">

                            @php
                            $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();

                            $count = App\Models\Product::where('subcategory_id',$subcategory->id)->where('status',1)->count();
                            
                            @endphp   

                            {{ $count }}
                        
                        </span></a></li>   
                          
                          @endforeach

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                @endforeach
                {{-- End Accordion Category--}}

              </div>
            </div>
            <!-- Price range-->
            <div class="widget mb-4 pb-4 border-bottom">
              <h3 class="widget-title">Price</h3>
              <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                <div class="range-slider-ui"></div>
                <div class="d-flex pb-1">
                  <div class="w-50 pe-2 me-2">
                    <div class="input-group input-group-sm"><span class="input-group-text">₱</span>
                      <input class="form-control range-slider-value-min" type="text">
                    </div>
                  </div>
                  <div class="w-50 ps-2">
                    <div class="input-group input-group-sm"><span class="input-group-text">₱</span>
                      <input class="form-control range-slider-value-max" type="text">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Filter by Brand-->
            <div class="widget widget-filter mb-4 pb-4 border-bottom">
              <h3 class="widget-title">Brand</h3>
              <div class="input-group input-group-sm mb-2">
                <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
              </div>
              <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="adidas">
                    <label class="form-check-label widget-filter-item-text" for="adidas">Adidas</label>
                  </div><span class="fs-xs text-muted">425</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ataylor">
                    <label class="form-check-label widget-filter-item-text" for="ataylor">Ann Taylor</label>
                  </div><span class="fs-xs text-muted">15</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="armani">
                    <label class="form-check-label widget-filter-item-text" for="armani">Armani</label>
                  </div><span class="fs-xs text-muted">18</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="banana">
                    <label class="form-check-label widget-filter-item-text" for="banana">Banana Republic</label>
                  </div><span class="fs-xs text-muted">103</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="bilabong">
                    <label class="form-check-label widget-filter-item-text" for="bilabong">Bilabong</label>
                  </div><span class="fs-xs text-muted">27</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="birkenstock">
                    <label class="form-check-label widget-filter-item-text" for="birkenstock">Birkenstock</label>
                  </div><span class="fs-xs text-muted">10</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="klein">
                    <label class="form-check-label widget-filter-item-text" for="klein">Calvin Klein</label>
                  </div><span class="fs-xs text-muted">365</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="columbia">
                    <label class="form-check-label widget-filter-item-text" for="columbia">Columbia</label>
                  </div><span class="fs-xs text-muted">508</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="converse">
                    <label class="form-check-label widget-filter-item-text" for="converse">Converse</label>
                  </div><span class="fs-xs text-muted">176</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="dockers">
                    <label class="form-check-label widget-filter-item-text" for="dockers">Dockers</label>
                  </div><span class="fs-xs text-muted">54</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="fruit">
                    <label class="form-check-label widget-filter-item-text" for="fruit">Fruit of the Loom</label>
                  </div><span class="fs-xs text-muted">739</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="hanes">
                    <label class="form-check-label widget-filter-item-text" for="hanes">Hanes</label>
                  </div><span class="fs-xs text-muted">92</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="choo">
                    <label class="form-check-label widget-filter-item-text" for="choo">Jimmy Choo</label>
                  </div><span class="fs-xs text-muted">17</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="levis">
                    <label class="form-check-label widget-filter-item-text" for="levis">Levi's</label>
                  </div><span class="fs-xs text-muted">361</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="lee">
                    <label class="form-check-label widget-filter-item-text" for="lee">Lee</label>
                  </div><span class="fs-xs text-muted">264</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wearhouse">
                    <label class="form-check-label widget-filter-item-text" for="wearhouse">Men's Wearhouse</label>
                  </div><span class="fs-xs text-muted">75</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="newbalance">
                    <label class="form-check-label widget-filter-item-text" for="newbalance">New Balance</label>
                  </div><span class="fs-xs text-muted">218</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="nike">
                    <label class="form-check-label widget-filter-item-text" for="nike">Nike</label>
                  </div><span class="fs-xs text-muted">810</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="navy">
                    <label class="form-check-label widget-filter-item-text" for="navy">Old Navy</label>
                  </div><span class="fs-xs text-muted">147</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="polo">
                    <label class="form-check-label widget-filter-item-text" for="polo">Polo Ralph Lauren</label>
                  </div><span class="fs-xs text-muted">64</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="puma">
                    <label class="form-check-label widget-filter-item-text" for="puma">Puma</label>
                  </div><span class="fs-xs text-muted">370</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="reebok">
                    <label class="form-check-label widget-filter-item-text" for="reebok">Reebok</label>
                  </div><span class="fs-xs text-muted">506</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="skechers">
                    <label class="form-check-label widget-filter-item-text" for="skechers">Skechers</label>
                  </div><span class="fs-xs text-muted">209</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="hilfiger">
                    <label class="form-check-label widget-filter-item-text" for="hilfiger">Tommy Hilfiger</label>
                  </div><span class="fs-xs text-muted">487</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="armour">
                    <label class="form-check-label widget-filter-item-text" for="armour">Under Armour</label>
                  </div><span class="fs-xs text-muted">90</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="urban">
                    <label class="form-check-label widget-filter-item-text" for="urban">Urban Outfitters</label>
                  </div><span class="fs-xs text-muted">152</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="vsecret">
                    <label class="form-check-label widget-filter-item-text" for="vsecret">Victoria's Secret</label>
                  </div><span class="fs-xs text-muted">238</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wolverine">
                    <label class="form-check-label widget-filter-item-text" for="wolverine">Wolverine</label>
                  </div><span class="fs-xs text-muted">29</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="wrangler">
                    <label class="form-check-label widget-filter-item-text" for="wrangler">Wrangler</label>
                  </div><span class="fs-xs text-muted">115</span>
                </li>
              </ul>
            </div>
            <!-- Filter by Size-->
            <div class="widget widget-filter mb-4 pb-4 border-bottom">
              <h3 class="widget-title">Size</h3>
              <div class="input-group input-group-sm mb-2">
                <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
              </div>
              <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-xs">
                    <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                  </div><span class="fs-xs text-muted">34</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-s">
                    <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                  </div><span class="fs-xs text-muted">57</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-m">
                    <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                  </div><span class="fs-xs text-muted">198</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-l">
                    <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                  </div><span class="fs-xs text-muted">72</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-xl">
                    <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                  </div><span class="fs-xs text-muted">46</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-39">
                    <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                  </div><span class="fs-xs text-muted">112</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-40">
                    <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                  </div><span class="fs-xs text-muted">85</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-41">
                    <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                  </div><span class="fs-xs text-muted">210</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-42">
                    <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                  </div><span class="fs-xs text-muted">57</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-43">
                    <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                  </div><span class="fs-xs text-muted">30</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-44">
                    <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                  </div><span class="fs-xs text-muted">61</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-45">
                    <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                  </div><span class="fs-xs text-muted">23</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-46">
                    <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                  </div><span class="fs-xs text-muted">19</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-47">
                    <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                  </div><span class="fs-xs text-muted">15</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-48">
                    <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                  </div><span class="fs-xs text-muted">12</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-49">
                    <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                  </div><span class="fs-xs text-muted">8</span>
                </li>
                <li class="widget-filter-item d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="size-50">
                    <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                  </div><span class="fs-xs text-muted">6</span>
                </li>
              </ul>
            </div>
            <!-- Filter by Color-->
            <div class="widget mb-4 pb-4 border-bottom">
              <h3 class="widget-title">Color</h3>
              <div class="d-flex flex-wrap">
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-blue-gray">
                  <label class="form-option-label rounded-circle" for="color-blue-gray"><span class="form-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">Blue-gray</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-burgundy">
                  <label class="form-option-label rounded-circle" for="color-burgundy"><span class="form-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">Burgundy</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-teal">
                  <label class="form-option-label rounded-circle" for="color-teal"><span class="form-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-teal">Teal</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-brown">
                  <label class="form-option-label rounded-circle" for="color-brown"><span class="form-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-brown">Brown</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-coral-red">
                  <label class="form-option-label rounded-circle" for="color-coral-red"><span class="form-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">Coral red</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-navy">
                  <label class="form-option-label rounded-circle" for="color-navy"><span class="form-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-navy">Navy</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-charcoal">
                  <label class="form-option-label rounded-circle" for="color-charcoal"><span class="form-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">Charcoal</label>
                </div>
                <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                  <input class="form-check-input" type="checkbox" id="color-sky-blue">
                  <label class="form-option-label rounded-circle" for="color-sky-blue"><span class="form-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                  <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">Sky blue</label>
                </div>
              </div>
            </div>

            {{-- Product Tags --}}

            @include('frontendv2.common.product_tags')

            {{-- End Product Tags --}}
            

          </div>
        </div>
      </aside>