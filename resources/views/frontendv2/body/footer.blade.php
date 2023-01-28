<footer class="footer bg-dark pt-5">
  <div class="container">
    <div class="row pb-2">
      <div class="col-md-4 col-sm-6">
        <div class="widget widget-links widget-light pb-2 mb-4">
          <h3 class="widget-title text-light">Shop departments</h3>
          <ul class="widget-list">

            @php
            $categories = App\Models\Category::orderBy('category_name_en','ASC')->get();
            @endphp

            @foreach ($categories as $category)
              
            <li class="widget-list-item"><a class="widget-list-link" href="#">@if(session()->get('language') ==
              'filipino') {{ $category->category_name_fil }} @else {{ $category->category_name_en }} @endif</a></li>
            
            @endforeach
          </ul>
        </div>
        <div class="widget widget-links widget-light pb-2 mb-4">
          <h3 class="widget-title text-light">About us</h3>
          <ul class="widget-list">
            <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="widget widget-links widget-light pb-2 mb-4">
          <h3 class="widget-title text-light">Account &amp; shipping info</h3>
          <ul class="widget-list">
            <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
            <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
          </ul>
        </div>

      </div>
      <div class="col-md-4">
        <div class="widget pb-2 mb-4">
          <h3 class="widget-title text-light pb-1">Stay informed</h3>
          <form class="subscription-form validate" action="https://jofs.us14.list-manage.com/subscribe/post?u=d6d165c0bc229154dcc19fcf2&amp;id=7512903f44&amp;f_id=008682e0f0" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
            <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
              <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
              <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
            </div>
            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
              <input class="subscription-form-antispam" type="text" name="b_d6d165c0bc229154dcc19fcf2_7512903f44" tabindex="-1">
            </div>
            <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
            <div class="subscription-status"></div>
          </form>
        </div>
        {{-- <div class="widget pb-2 mb-4">
          <h3 class="widget-title text-light pb-1">Download our app</h3>
          <div class="d-flex flex-wrap">
            <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
            <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
  <div class="pt-5 bg-darker">
    <div class="container">
      <div class="row pb-3">
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
            <div class="ps-3">
              <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
              <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="d-flex"><i class="ci-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
            <div class="ps-3">
              <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
              <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
            <div class="ps-3">
              <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
              <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
            <div class="ps-3">
              <h6 class="fs-base text-light mb-1">Secure online payment</h6>
              <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="hr-light mb-5">
      <div class="row pb-2">
        <div class="col-md-6 text-center text-md-start mb-4">
          <div class="text-nowrap mb-4">
            <a class="d-inline-block align-middle mt-n1 me-2" href="#"><img class="d-block" src="{{ asset('frontendv2/assets/img/vartouhi-logoss.png') }}" width="117" alt="vartouhi"></a>
            
            <div class="btn-group dropdown disable-autohide">
              {{-- <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img class="me-2" src="{{ asset('frontendv2/assets/img/flags/en.png') }}" width="20" alt="English">English</button> --}}


                @if(session()->get('language') == 'filipino')
                <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img
                        alt="File:Flag of the Philippines.svg"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/800px-Flag_of_the_Philippines.svg.png?20210924060643"
                        decoding="async" width="20"
                        srcset="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1200px-Flag_of_the_Philippines.svg.png?20210924060643 1.5x, https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Flag_of_the_Philippines.svg/1600px-Flag_of_the_Philippines.svg.png?20210924060643 2x"
                        data-file-width="1200" data-file-height="600" class="me-2">Lengguwahe </button>
                @else
                <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img alt="US Flag"
                        src="{{ asset('frontendv2/assets/img/flags/en.png') }}" width="20" class="me-2">
                    Language</button>
                @endif

                <ul class="dropdown-menu my-1">

                
                
              
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

              </ul>
            </div>
          </div>
          <div class="widget widget-links widget-light">
            <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
              <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a></li>
              <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Affiliates</a></li>
              <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a></li>
              <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a></li>
              <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of use</a></li>
            </ul>
          </div>
        </div>

        @php
        $setting = App\Models\SiteSetting::find(1);
         @endphp

        <div class="col-md-6 text-center text-md-end mb-4">
          <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="{{ $setting->twitter }}"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="{{ $setting->facebook }}"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="https://www.instagram.com"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-linkedin ms-2 mb-2" href="{{ $setting->linkedin }}"><i class="ci-linkedin"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="{{ $setting->youtube }}"><i class="ci-youtube"></i></a></div>
          <img class="d-inline-block" src="{{ asset('frontendv2/assets/img/cards-alt.png') }}" width="187" alt="Payment methods">
        </div>
      </div>
      <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">John Oliver Santiago</a></div>
    </div>
  </div>
</footer>