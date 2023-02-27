<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Vendor Dashboard </title>

    <!-- SEO Meta Tags-->
    <meta name="description" content="JOFS E-Commerce">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta name="color-scheme" content="dark"> --}}

    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="John Oliver Santiago">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="{{ asset('frontendv2/assets/img/vartouhi-logo.png') }}" />

    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontendv2/assets/img/vlogoss.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontendv2/assets/img/vlogoss.png') }}">
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
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/flatpickr/dist/flatpickr.min.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">





    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/vendor/nouislider/dist/nouislider.min.css') }}"/>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >



    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('frontendv2/assets/css/theme.min.css') }}">

    <style>

      @include('frontendv2.partials.animation');



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

    .shimmer-btn{
      background-image: linear-gradient(
        -60deg,
        transparent, transparent 40%,
        #ffffff44 40%, #ffffff44 60%,
        transparent 60%, transparent 100%
      );
      background-size: 200% 100%;
      background-repeat: no-repeat;
      background-position-x: 150%;
    }

    .shimmer-btn:hover{
      background-position-x: -150%;
      transition: background-position-x 1s ease-in-out;
    }

    .dropdown-item:not(.lang) {
      color: #000;
      position: relative;
      text-decoration: none;
    }

    .dropdown-item:not(.lang)::before {
      background: #f3f5f9;
      content: "";
      inset: 0;
      position: absolute;
      transform: scaleX(0);
      transform-origin: right;
      transition: transform 0.5s ease-in-out;
      z-index: -1;
    }

    .dropdown-item:hover:not(.lang)::before {
      transform: scaleX(1);
      transform-origin: left;
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

    @media (min-width: 767px) {
      .showCart{
        display: none;
      }
    }


		.confirm{
			visibility: collapse;
		}
		/* if problem persisted, just put this css in first */

    @media screen and (min-width: 1024px) {
      div .wrap{
      width: 280px;
      word-wrap: break-word;

    }

    }


    @media screen and (max-width: 767px) {
      div .wrap{
      width: 158px;
      word-wrap: break-word;

    }

    }



    @media screen and (min-width: 767px) and (max-width: 1024px) {
      div .wrap{
      width: 210px;
      word-wrap: break-word;

    }
  }


	</style>

  </head>

{{--
  <div id="loader-wrapper">
  	<div>
      <img src="{{ asset('frontendv2/assets/img/my-loader.svg') }}" alt="" srcset="" width="80" height="80" style="text-align: center; display:inline-block; margin-top:calc(50vh - 20px);
      ">
    </div>
  </div> --}}
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Sign in / sign up modal-->
    {{-- <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
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
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div> --}}
    <main class="page-wrapper">
      <!-- Navbar Marketplace-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->

      @php
      $id = Auth::user()->id;
      $user = App\Models\User::find($id);
      @endphp

      @include('seller.body.header')

      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">

            @include('seller.body.sidebar')


            @yield('vendor')




          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    @include('seller.body.footer')

    <!-- Toolbar for handheld devices (Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="dashboard-favorites.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$56.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
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

    <script src="{{ asset('frontendv2/assets/vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js') }}"></script>

    <script src="{{ asset('frontendv2/assets/vendor/lg-zoom.js/dist/lg-zoom.min.js') }}"></script>
    <script src="{{ asset('frontendv2/assets/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>


    {{-- add custom js --}}
    <script src="{{ asset('frontendv2/assets/js/custom.js') }}"></script>


    <!-- Main theme script-->
    <script src="{{ asset('frontendv2/assets/js/theme.min.js') }}"></script>
  </body>
</html>
