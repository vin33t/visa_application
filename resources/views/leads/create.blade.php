@extends('layouts.frontend')
@section('css')
	<!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/vendors.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/vendors/css/pickers/daterange/daterangepicker.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/vendors/css/pickers/pickadate/pickadate.css")}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/core/menu/menu-types/vertical-menu.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/plugins/forms/wizard.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/plugins/pickers/daterange/daterange.css")}}">
  <!-- END Page Level CSS-->

  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/app-assets/css/app.css")}}">
  <!-- END STACK CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset("app/front/assets/css/style.css")}}">
  <!-- END Custom CSS-->
@endsection
@section('content')
	
	@if(count($errors)>0)
		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list_group-item text-danger">
					{{ $error }}
				</li>
			@endforeach
		</ul>
	@endif
	<div class="content-header text-center">
    	<h3 class="content-header-title">Create New lead</h3>
    </div>
    <div class="content-body">
	    <section id="number-tabs">
	          <div class="row">
	            <div class="col-12">
	              <div class="card">
	                <div class="card-content collapse show">
	                  <div class="card-body">
	                    <form action="{{route('lead.store')}}" class="number-tab-steps wizard-circle" method="post">
	                    	@csrf
	                      <!-- Step 1 -->
	                      
	                      <fieldset>
	                        <div class="row">
	                          <div class="col-md-12">
	                          	<div class="form-group">
	                              <label for="agent_id">Select Agent :</label>
	                              <select class="custom-select form-control" id="eventType1"
	                              name="agent_id">
	                              	@foreach( $agents as $agent)
									 <option value="{{$agent->id}}">{{$agent->name}}</option>
									@endforeach
	                              </select>
	                            </div>
	                        </div>
	                    </div>
	                        <div class="row">
	                            <div class="col-md-6">
	                            <div class="form-group">
	                              <label for="student_fname">First Name :</label>
	                              <input type="text" class="form-control" name="student_fname">
	                            </div>
	                          </div>
	                          <div class="col-md-6">
	                            <div class="form-group">
	                              <label for="student_lname">Last Name :</label>
	                              <input type="text" class="form-control" name="student_lname">
	                            </div>
	                          </div>
	                          </div>
	                          <div class="row">
		                          <div class="col-md-6">
		                            <div class="form-group">
		                              <label for="email">Email Address :</label>
		                              <input type="email" class="form-control" name="email">
		                            </div>
		                           </div>
		                           <div class="col-md-6">
		                            <div class="form-group">
		                              <label for="mobile">Mobile :</label>
		                              <input type="text" class="form-control" name="Mobile">
		                            </div>
		                           </div>
	                          </div>
	                        	           
	                      </fieldset>
	                      <!-- Step 2 -->
	                      
	                      <fieldset>
	                        <div class="row">
	                          <div class="col-md-6">
	                            <div class="form-group">
	                              <label for="address">Address:</label>
	                              <input type="text" class="form-control" name="address">
	                            </div>
	                            </div>
	                            <div class="col-md-6">
	                            <div class="form-group">
	                              <label for="postal_code">Postal code :</label>
	                              <input type="text" class="form-control" name="postal_code">
	                            </div>
	                        </div>
	                        </div>
	                        <div class="row">
	                        	<div class="col-md-12">
	                            <div class="form-group">
	                              <label for="description">Short Description :</label>
	                              <textarea name="description" id="description" rows="4" class="form-control"></textarea>
	                            </div>
	                          </div>
	                        </div>
	                      </fieldset>
	                      <div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Add lead</button>
					</div>
				</div>

	                    </form>
	                  </div>
	                </div>
	              </div>
	            </div>
	          </div>
	    </section>
    </div>



	{{-- <div class="card-header">Create a new lead</div>
		<div class="card-body">
			<form action="{{route('lead.store')}}" method='post'>
				{{csrf_field()}}
				<div class="form-group">
				<label for="agent_id">Select Agent</label><br>
				<select name="agent_id" class="form-control">
					@foreach( $agents as $agent)
					 <option value="{{$agent->id}}">{{$agent->name}}</option>
					@endforeach
				</select>
				</div>
				<div class="form-group">
					<label for="student_fname">First name</label>
					<input type="text" name='student_fname' class="form-control">
				</div>
				<div class="form-group">
					<label for="student_lname">Last name</label>
					<input type="text" name='student_lname' class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name='email' class="form-control">
				</div>
				<div class="form-group">
					<label for="Mobile">Moblie</label>
					<input type="text" name='Mobile' class="form-control">
				</div>
				<div class="form-group">
					<label for="address">address</label>
					<input type="text" name='address' class="form-control">
				</div>
				<div class="form-group">
					<label for="postal_code">Postal code</label>
					<input type="text" name='postal_code' class="form-control">
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" cols="5" rows="5" class="form-control"></textarea>
					
				<div class="form-group">
					<div class="text-center">
						<button class="btn btn-success" type="submit">Add lead</button>
					</div>
				</div>
				
			</form>
		</div>

 --}}
@stop
@section('js')
	<!-- BEGIN VENDOR JS-->
  <script src="{{asset("app/front/app-assets/vendors/js/vendors.min.js")}}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="{{asset("app/front/app-assets/vendors/js/extensions/jquery.steps.min.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js")}}"
  type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/daterange/daterangepicker.js")}}"
  type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/pickadate/picker.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/pickers/pickadate/picker.date.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/vendors/js/forms/validation/jquery.validate.min.js")}}"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{asset("app/front/app-assets/js/core/app-menu.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/js/core/app.js")}}" type="text/javascript"></script>
  <script src="{{asset("app/front/app-assets/js/scripts/customizer.js")}}" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="{{asset("app/front/app-assets/js/scripts/forms/wizard-steps.js")}}" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
@endsection