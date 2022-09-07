{{-- @extends('frontend.main_master')
@section('content')

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Reset Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Reset Password</h4>

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

<br>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" id="email" name="email" class="form-control unicase-form-control text-input" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" id="password" name="password" class="form-control unicase-form-control text-input" >
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
		    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input" >
		</div>
	  	
		
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Reset Password</button>
	</form>					
</div>
<!-- Sign-in -->
</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
@include('frontend.body.brands')
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection --}}



@extends('frontendv2.main_master')
@section('content')

<div class="container py-4 py-lg-5 my-4">
	<div class="row justify-content-center">
	  <div class="col-lg-8 col-md-10">
		<h3 class="h3 mb-4">Get new Password</h3>
		
		<div class="card py-2 mt-4">
		  <form class="card-body needs-validation" novalidate  method="POST" action="{{ route('password.update') }}">
			@csrf

			<input type="hidden" name="token" value="{{ $request->route('token') }}">


			<div class="mb-3">
			  <label class="form-label" for="recover-email">Enter your email address</label>
			  <input class="form-control" type="email" id="email" name="email" required>
			  <div class="invalid-feedback">Please provide valid email address.</div>
			</div>

			<div class="mb-3">
				<label class="form-label" for="recover-email">Enter new password</label>
				<input class="form-control" type="password" id="password" name="password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$">
				<div class="form-text"><strong>Password must contain:</strong> Minimum of <strong>8</strong> characters; atleast <strong>1</strong> Alphabet and <strong>1</strong> Number.</div>
				<div class="invalid-feedback">Please provide valid password.</div>
			  </div>

			  <div class="mb-3">
				<label class="form-label" for="recover-email">Confirm new password</label>
				<input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>


				<div class="invalid-feedback">Please provide the corresponding password.</div>
			  </div>

			<button class="btn btn-primary" type="submit">Reset password</button>
		  </form>
		</div>
	  </div>
	</div>
  </div>


  <script type="text/javascript">
    window.onload = function () {
        var txtPassword = document.getElementById("password");
        var txtConfirmPassword = document.getElementById("password_confirmation");
        txtPassword.onchange = ConfirmPassword;
        txtConfirmPassword.onkeyup = ConfirmPassword;
        function ConfirmPassword() {
            txtConfirmPassword.setCustomValidity("");
            if (txtPassword.value != txtConfirmPassword.value) {
                txtConfirmPassword.setCustomValidity("Passwords do not match.");
            }
        }
    }
</script>

  @endsection