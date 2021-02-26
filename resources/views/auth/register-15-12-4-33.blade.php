@extends('layouts.auth.app')

{{-- head start --}}
	
	@section('head')

		@include('includes.auth.head')

	@endsection

	@section('extra-css')

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/register.css') }}">
	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
		<div class="row">
	      <div class="col s12">
	        <div class="container"><div id="register-page" class="row">
	          <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
	            <form class="login-form" method="POST" action="{{ route('register') }}">
	            	@csrf
              		<div class="row">
		                <div class="input-field col s12">
		                  <h5 class="ml-4">Register</h5>
		                  <p class="ml-4">Join to our community now !</p>
		                </div>
		            </div>

		            <div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">person_outline</i>
		                  <input id="first_name" type="text">
		                  <label for="first_name" class="center-align">First Name</label>
		                </div>
		            </div>

		             <div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">person_outline</i>
		                  <input id="last_name" type="text">
		                  <label for="last_name" class="center-align">Last Name</label>
		                </div>
		            </div>

		            <div class="row margin">
		                	<div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">mail_outline</i>
		                  <input id="email" type="email">
		                  <label for="email">Email</label>
		                </div>
		            </div>

	              	<div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">lock_outline</i>
		                  <input id="password" type="password">
		                  <label for="password">Password</label>
		                </div>
		            </div>

	              	<div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">lock_outline</i>
		                  <input id="password-again" type="password">
		                  <label for="password-again">Password again</label>
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="input-field col s12">
		                  <button type="button" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 register-btn">Register</button>
		                </div>
		            </div>

	              <div class="row">
	                <div class="input-field col s12">
	                  <p class="margin medium-small"><a href="{{ route('login') }}">Already have an account? Login</a></p>
	                </div>
	              </div>
	            </form>
	          </div>
	        </div>
	        </div>
	      </div>
	    </div>
	@endsection

{{-- content section end --}}

{{-- footer section start --}}

	@section('script')

		<!-- BEGIN VENDOR JS-->
	    <script src="{{ asset('assets/admin/js/vendors.min.js') }}" type="text/javascript"></script>
	    <!-- BEGIN VENDOR JS-->

	    <!-- BEGIN PAGE VENDOR JS-->
	    <script src="{{ asset('assets/admin/vendors/chartjs/chart.min.js') }}"></script>
	    <!-- END PAGE VENDOR JS-->

	    <!-- BEGIN THEME  JS-->
	    <script src="{{ asset('assets/admin/js/plugins.js') }}" type="text/javascript"></script>
	    <script src="{{ asset('assets/admin/js/custom/custom-script.js') }}" type="text/javascript"></script>
	    <!-- END THEME  JS-->

	    <!-- BEGIN PAGE LEVEL JS-->
	    <script src="{{ asset('assets/admin/s/scripts/dashboard-ecommerce.js') }}" type="text/javascript"></script>
	    <!-- END PAGE LEVEL JS-->

	@endsection


	@section('extra-script')

		<script type="text/javascript">
			$(document).ready(function(){
				$('.register-btn').click(function(){
					let first_name = $('#first_name').val();
					let last_name = $('#last_name').val();
					let email = $('#email').val();
					let password = $('#password').val();
					let password_again = $('#passwords-again').val();
					let _token = $('input[name=_token]').val();
					$.ajax({
						url:"{{ route('admin_user_store') }}",
						type:"get",
						data:{first_name:first_name,last_name:last_name,email:email,password:password,password_confirmation:password_again,_token:_token},
						success:function(data)
						{
							if(data.status=='error')
							{
								alert("this is error");
							}
						},

					});

				});
				
			});
		</script>

	@endsection

{{-- footer section end --}}

