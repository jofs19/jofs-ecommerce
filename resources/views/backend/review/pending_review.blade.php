@extends('admin.admin_master')
@section('admin')


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">All Pending Reviews </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped text-center">
						<thead>
							<tr>
								<th>Summary  </th>
								<th>Comment </th>
								<th>User </th>
								<th>Product  </th>
								<th>Status </th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($review as $item)
	 <tr>
		<td width="25%"> {{ $item->summary }}  </td>
		<td width="25%"> {{ $item->comment }}  </td>
		<td width="25%">  {{ $item->user->name }}  </td>

		<td width="25%"> {{ $item->product->product_name_en }}  </td>
		<td>
		@if($item->status == 0)
      <span class="badge badge-pill badge-primary">pending </span>
       @elseif($item->status == 1)
       <span class="badge badge-pill badge-success">published </span>
		@endif

		  </td>

		<td width="25%">
  <a href="{{ route('review.approve',$item->id) }}" class="btn btn-danger">Approve </a>
		</td>

	 </tr>
	  @endforeach
						</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->






		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection