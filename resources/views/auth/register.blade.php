@extends('layouts.auth.app')
@section('title','Register')
{{-- head start --}}

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
		                <div class="input-field col s12 text-center">
		                  <h5 class="ml-4">Register</h5>
		                  <p class="ml-4">Join to our community now !</p>
		                </div>
		            </div>

		            <div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">person_outline</i>
		                  <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}">
		                  <label for="first_name" class="center-align" >First Name</label>
		                    @error('first_name')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
		                </div>
		            </div>

		             <div class="row margin">
		                <div class="input-field col s12">
		                    <i class="material-icons prefix pt-2">person_outline</i>
		                    <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}">
		                    <label for="last_name" class="center-align">Last Name</label>
		                    @error('last_name')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
		                </div>
		            </div>

		            <div class="row margin">
		                <div class="input-field col s12">
		                    <i class="material-icons prefix pt-2">mail_outline</i>
		                  	<input id="email" type="email" name="email" value="{{ old('email') }}">
		                  	<label for="email">Email</label>
		                  	@error('email')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

		                </div>

		            </div>

	              	<div class="row margin">
		                <div class="input-field col s12">
		                    <i class="material-icons prefix pt-2">lock_outline</i>
		                    <input id="password" type="password" name="password">
		                    <label for="password">Password</label>
		                    @error('password')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
		                </div>
		            </div>

	              	<div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">lock_outline</i>
		                  <input id="password-again" type="password" name="password_confirmation">
		                  <label for="password-again">Confirm Password</label>
		                </div>
		            </div>

		            {{-- <div class="row margin">
		                <div class="input-field col s12">
		                  	<i class="material-icons prefix pt-2">person_outline</i>
		                  	<select name="user_type">
		                  		<option disabled="" selected="">Select User Type</option>
		                  		<option @if(old('user_type')==2) selected="" @endif value="2">Admin</option>
		                  		<option @if(old('user_type')==3) selected="" @endif value="3">User</option>
		                  		<option @if(old('user_type')==4) selected="" @endif value="4">Manager</option>
		                  	</select>
		                    @error('user_type')
                                    <span class="red-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
		                </div>
		            </div> --}}
		            
		            <div class="row">
		                <div class="input-field col s12">
		                  <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12 register-btn">Register</button>
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


	@section('extra-script')

		

	@endsection

{{-- footer section end --}}

