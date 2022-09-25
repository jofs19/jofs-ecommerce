@extends('frontendv2.main_master')
@section('content')


@section('title')
    Vartouhi | Order History
@endsection

<head>

  <style>

      a:hover{
        color: #fff;
        
      }
    

  </style>

</head>

<div class="page-title-overlap bg-dark pt-4">
  <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
    <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
          <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
          <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
          </li>
          <li class="breadcrumb-item text-nowrap active" aria-current="page">Orders history</li>
        </ol>
      </nav>
    </div>
    <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
      <h1 class="h3 text-light mb-0">My orders</h1>
    </div>
  </div>
</div>
<div class="container pb-5 mb-2 mb-md-4">
  <div class="row">


    <!-- ANCHOR Sidebar-->
    @include('frontendv2.common.user_sidebar')
    <!-- Sidebar-->

    

    <!-- Content  -->
    <section class="col-lg-8">
      <!-- Toolbar-->
      <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
        <div class="d-flex align-items-center">
          <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="order-sort">Sort orders:</label>
          <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="order-sort">Sort orders:</label>
          <select class="form-select" id="order-sort">
            <option>All</option>
            <option>Delivered</option>
            <option>In Progress</option>
            <option>Delayed</option>
            <option>Canceled</option>
          </select>
        </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i class="ci-sign-out me-2"></i>Sign out</a>
      </div>
      <!-- Orders list-->
      <div class="table-responsive fs-md mb-4">
        <table class="table table-hover mb-0 text-center">
          <thead>
            <tr>
              <th>#</th>
              <th>Invoice No.</th>
              <th>Date Purchased</th>
              <th>M.O.P.</th>
              <th>Amount</th>
              <th>Order Status</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $order)



                @if($order->status == 'pending')  

                <tr class="bg-faded-light">

                
                @elseif ($order->status == 'confirm')

                <tr class="bg-faded-info">

                @elseif ($order->status == 'processing')

                <tr class="bg-faded-accent">

                @elseif($order->status == 'picked')

                <tr class="bg-faded-warning">

                @elseif($order->status == 'shipped')

                <tr class="bg-faded-primary">

                @elseif($order->status == 'delivered')

                <tr class="bg-faded-success">
              
                @else
                <tr class="bg-faded-danger">

                @endif


              <td class="py-3"> 
                @foreach ($orders as $key => $item)
                    @if ($item->id == $order->id)
                        {{ $orders->firstItem()+$key }}
                    @endif
                      
                @endforeach
              </td>

              <td class="py-3"><a class="nav-link-style fw-medium fs-sm" target="_blank" href="{{ url('user/order_details/'.$order->id ) }}">{{ $order->invoice_no }}</a></td>
              <td class="py-3">{{ $order->order_date }}</td>
              <td class="py-3">{{ $order->payment_method }}</td>
              <td class="py-3">
                @if($order->amount >= 1000)
                 ₱{{ number_format($order->amount,2) }}

                @else
                ₱{{ number_format($order->amount + $order->shipping_charge,2) }}

                @endif
              </td>
              <td class="py-3">
                @if($order->status == 'pending')  

                <span class="badge bg-secondary m-0">Pending</span>

                
                @elseif ($order->status == 'confirm')

                <span class="badge bg-info m-0">Confirmed</span>

                @elseif ($order->status == 'processing')

                <span class="badge bg-accent m-0">Processed</span>

                @elseif($order->status == 'picked')

                <span class="badge bg-warning m-0">Picked</span>

                @elseif($order->status == 'shipped')

                <span class="badge bg-primary m-0">Shipped</span>

                @elseif($order->status == 'delivered')

                <span class="badge bg-success m-0">Delivered</span>


                @if($order->return_order == 1) 

                <br>
                <span class="badge bg-light m-0">Return requested</span>

                @elseif($order->return_order == 2)

                <span class="badge bg-light m-0">Returned Successfully</span>

                @endif

                @else
                <span class="badge bg-danger m-0">Rejected</span>

                @endif

              </td>


              <td class="py-3">
                
                {{-- <a class="nav-link-style fs-ms text-accent action" target="_blank" href="{{ url('user/order_details/'.$order->id ) }}"><i class="ci-eye align-middle me-1"></i>View</a> --}}
                {{-- <a class="nav-link-style fs-normal text-info action" target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}"><i class="ci-download align-middle me-1"></i>Invoice</a>   --}}

                <a class="btn btn-outline-dark rounded-pill btn-icon btn-sm" href="{{ url('user/invoice_download/'.$order->id ) }}" target="_blank">
                  <i class="ci-download"></i>
                </a>
                
                <!-- Toolbar example -->
              
            </td>
            </tr>

            @endforeach
            
          </tbody>
        </table>
      </div>
      <!-- Pagination-->
      {{-- <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>Prev</a></li>
        </ul>
        <ul class="pagination">
          <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
          <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
          <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
        </ul>
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="ci-arrow-right ms-2"></i></a></li>
        </ul>
      </nav> --}}
      {{ $orders->links('vendor.pagination.grid_paginate') }}

    </section>
  </div>
</div>


      <!-- Order Details Modal-->
      {{-- <div class="modal fade" id="order-details">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Order No - 34VB5540K83</h5>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-0">
              @foreach ($carts as $order)
                
              <!-- Item-->
              <div class="d-sm-flex justify-content-between mb-4 pb-3 pb-sm-2 border-bottom">
                <div class="d-sm-flex text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto" href="shop-single-v1.html" style="width: 10rem;"><img src="img/shop/cart/01.jpg" alt="Product"></a>
                  <div class="ps-sm-4 pt-2">
                    <h3 class="h6 product-title mb-2"><a href="shop-single-v1.html">{{ $order->product_name }}</a></h3>
                    <h3 class="product-title fs-base mb-2"><a href="shop-single-v1.html">{{ $order->name }}</a></h3>
                    <div class="fs-sm"><span class="text-muted me-2">Size:</span>8.5</div>
                    <div class="fs-sm"><span class="text-muted me-2">Color:</span>White &amp; Blue</div>
                    <div class="fs-lg text-accent pt-2">$154.<small>00</small></div>
                  </div>
                </div>
                <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                  <div class="text-muted mb-2">Quantity:</div>1
                </div>
                <div class="pt-2 ps-sm-3 mx-auto mx-sm-0 text-center">
                  <div class="text-muted mb-2">Subtotal</div>$154.<small>00</small>
                </div>
              </div>

              @endforeach

              
            </div>
            <!-- Footer-->
            <div class="modal-footer flex-wrap justify-content-between bg-secondary fs-md">
              <div class="px-2 py-1"><span class="text-muted">Subtotal:&nbsp;</span><span>$265.<small>00</small></span></div>
              <div class="px-2 py-1"><span class="text-muted">Shipping:&nbsp;</span><span>$22.<small>50</small></span></div>
              <div class="px-2 py-1"><span class="text-muted">Tax:&nbsp;</span><span>$9.<small>50</small></span></div>
              <div class="px-2 py-1"><span class="text-muted">Total:&nbsp;</span><span class="fs-lg">$297.<small>00</small></span></div>
            </div>
          </div>
        </div>
      </div> --}}


  @endsection