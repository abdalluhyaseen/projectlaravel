@extends('public.masterpage')
@section('content')
<section id="center" class="center_o">
 <div class="container">
  <div class="row center_o1">
   <div class="col-md-12">
	 <h5 class="normal col_1 mb-0"><a class="col_2" href="#">Home</a> <span class="col_2">/</span> <a class="col_2" href="#">Pages</a> <span class="col_2">/</span>  Login  </h5>
   </div>
  </div>
 </div>
</section>

<section id="login">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="login_1">
	 <h3 class="col_1">Login</h3>
	 <p>login with your driven account</p>
	 <h6 style="margin-top:40px;">Email Address</h6>
	 <input type="email" class="form-control" placeholder="Your Email">
	 <h6 style="margin-top:30px;">Password</h6>
	 <input type="email" class="form-control" placeholder="Your Password">
	 <div class="d-flex justify-content-between mt-4">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="remember">
<label class="form-check-label" for="remember">
Remember Me
</label>
</div>
<a href="#" class="col_1">Forgot Password?</a>
</div>
    <h6 class="mt-4 mb-0"><a class="button" href="#">LOGIN  <i style="margin-left:5px;" class="fa fa-sign-in"></i></a></h6>
	<p class="mt-4 mb-0">Don't have an account? <a class="col_1" href="register.html">Register</a></p>
	</div>
   </div>
  </div>
 </div>
</section>
@endsection
