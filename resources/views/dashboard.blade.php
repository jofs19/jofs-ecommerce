@extends('frontendv2.main_master')
@section('content')

<head>
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
</head>

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
            <!-- Contacts card: Shadow -->
            <div class="card border-0 shadow">
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
            </div>


            

        </section>


        <!-- ANCHOR End ORDER VIEW Content (transfer it later) -->
        

    </div>
    
</div>



@endsection
