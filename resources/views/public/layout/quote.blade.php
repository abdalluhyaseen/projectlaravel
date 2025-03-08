@extends('public.masterpage')
@section('content')

<section id="center" class="center_o">
 <div class="container">
  <div class="row center_o1">
   <div class="col-md-12">
	 <h5 class="normal col_1 mb-0"><a class="col_2" href="#">Home</a> <span class="col_2">/</span> <a class="col_2" href="#">Pages</a> <span class="col_2">/</span> Quote  </h5>
   </div>
  </div>
 </div>
</section>

<section id="login">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="login_1">
	 <h3 class="col_1">Your Requirements</h3>
	 <p>by filling this simple form</p>
	<div class="appoint_1li row">
	   <div class="col-md-6">
	    <div class="appoint_1lil">
		  <input type="text" class="form-control" placeholder="Your Name">
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="appoint_1lil">
		  <input type="text" class="form-control" placeholder="Your Phone">
		</div>
	   </div>
	 </div>
	 <div class="appoint_1li mt-3 row">
	   <div class="col-md-6">
	    <div class="appoint_1lil">
		  <input type="text" class="form-control" placeholder="Your Email">
		</div>
	   </div>
	   <div class="col-md-6">
	    <div class="appoint_1lil">
			<select class="form-select">
			<option value="0">Select Course</option>
			<option value="1">Learn To Drive Slowly</option>
			<option value="2">Courses For Adults</option>
			<option value="3">Lessons For Teens</option>
			</select>
		</div>
	   </div>
	 </div>
	 <div class="appoint_1li mt-3 row">
	   <div class="col-md-12">
	    <div class="appoint_1lil">
			<textarea style="height:130px;" class="form-control" placeholder="Your Message"></textarea>
			<h6 class="mt-4 mb-0"><a class="button" href="#">GET QUOTE  <i style="margin-left:5px;" class="fa fa-long-arrow-right"></i></a></h6>
		</div>
	   </div>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section>
@endsection
