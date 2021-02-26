@extends('layouts.auth.app')
@section('title','Email')
{{-- head start --}}

	@section('extra-css')

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/forgot.css') }}">
	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		


		<div class="row">
	      <div class="col s12">
	        <div class="container">
	          <div id="forgot-password" class="row">
	            <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card bg-opacity-8">
	              <form class="login-form"  method="POST" action="{{ route('password.email') }}">

	              	@csrf
	                <div class="row">
	                  <div class="input-field col s12 text-center">
	                    <h5 class="ml-4">Forgot Password</h5>
	                    <p class="ml-4">You can reset your password</p>
	                  </div>
	                </div>

	                @if (session('status'))

	                	<div class="card-alert card gradient-45deg-green-teal">
			                <div class="card-content white-text">
			                  <p>
			                    <i class="material-icons">error</i> {{ session('status') }}</p>
			                </div>
			                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
			                  <span aria-hidden="true">×</span>
			                </button>
			             </div>
                    @endif

	                <div class="row margin">
		                <div class="input-field col s12">
		                  	<i class="material-icons prefix pt-2">mail_outline</i>
		                  	<input id="email" type="email" name="email" value="{{ old('email') }}" >
		                  	<label for="email" class="center-align" >Email</label>
		                    @error('email')
                                <span class="red-text" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        	@enderror
		                </div>
		            </div>
		            
		            <div class="row">
		                <div class="input-field col s12">
		                  <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Send Password Reset Link</button>
		                </div>
		            </div>

	              	<div class="row">
	                  <div class="input-field col s6 m6 l6">
	                    <p class="margin medium-small"><a href="{{ route('login') }}">Login</a></p>
	                  </div>
	                  <div class="input-field col s6 m6 l6">
	                    <p class="margin right-align medium-small"><a href="{{ route('register')}}">Register</a></p>
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


	@section('extra-script')

		

	@endsection

{{-- footer section end --}}

