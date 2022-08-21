@extends('admin.admin_master')
@section('admin')

@php
	$date = date('d-m-y');
	$today = App\Models\Order::where('order_date',$date)->sum('amount');
	$month = date('F');
	$month = App\Models\Order::where('order_month',$month)->sum('amount');
    $year = date('Y');
	$year = App\Models\Order::where('order_year',$year)->sum('amount');
    $pending = App\Models\Order::where('status','pending')->get();
@endphp

<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-success-light rounded w-60 h-60">
                            <i class="text-success mr-0 font-size-24 glyphicon glyphicon-ok-sign"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Today's Sale</p>
                            <h3 class="text-white mb-0 font-weight-500">${{ $today  }} <small class="text-success"><i class="fa fa-caret-up"></i> Php</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-primary-light rounded w-60 h-60">
                            <i class="text-primary mr-0 font-size-24 glyphicon glyphicon-flag"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Monthly Sale </p>
                            <h3 class="text-white mb-0 font-weight-500">${{ $month }} <small class="text-success"><i class="fa fa-caret-up"></i> Php</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-info-light rounded w-60 h-60">
                            <i class="text-info mr-0 font-size-24 mdi mdi-sale"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Yearly Sale </p>
                            <h3 class="text-white mb-0 font-weight-500">${{ $year }} <small class="text-success"><i class="fa fa-caret-up"></i> Php</small></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-6">
                <div class="box overflow-hidden pull-up">
                    <div class="box-body">							
                        <div class="icon bg-danger-light rounded w-60 h-60">
                            <i class="text-danger mr-0 font-size-24 glyphicon glyphicon-exclamation-sign"></i>
                        </div>
                        <div>
                            <p class="text-mute mt-20 mb-0 font-size-16">Pending Orders </p>
                            <h3 class="text-white mb-0 font-weight-500">{{ count($pending) }} <small class="text-success"><i class="fa fa-caret-up"></i> Order </small></h3>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title align-items-start flex-column">
                           All Recent Orders                             
                           @php
                           $orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->get();
                               @endphp                        
                        </h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table no-border text-center table-striped">
                                <thead>
                                    <tr class="text-uppercase bg-lightest">
                                        <th style="min-width: 250px"><span class="text-white">Date</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Invoice</span></th>
                                        <th style="min-width: 100px"><span class="text-fade">Amount</span></th>
                                        <th style="min-width: 150px"><span class="text-fade">Payment</span></th>
                                        <th style="min-width: 130px"><span class="text-fade">Status</span></th>
                                        <th style="min-width: 120px"><span class="text-fade">View</span> </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($orders as $item)
                                    <tr>										
                                        <td class="pl-0 py-8">
                                             <span class="text-white font-weight-600 d-block font-size-16">
                                                {{-- {{ Carbon\Carbon::parse($item->order_date)->diffForHumans()  }} --}}
                                                {{ $item->order_date }}
                                            </span>
                                        </td>
                            
                                        <td>
                            
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->invoice_no }}
                                            </span>
                                        </td>
                            
                                        <td>
                                            <span class="text-fade font-weight-600 d-block font-size-16">
                                                $ {{ $item->amount }}
                                            </span>
                            
                                        </td>
                            
                                        <td>
                            
                                            <span class="text-white font-weight-600 d-block font-size-16">
                                                {{ $item->payment_method }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-primary-light badge-lg">{{ $item->status }}</span>
                                        </td>
                            
                                        <td>
                                            <a href="{{ route('pending.order.details',$item->id) }}" class="btn btn-info" title="View Data"><i class="fa fa-eye"></i> </a> 
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  @endsection