@extends('layouts.auth.app')
@section('title','Login')
{{-- head start --}}
	
	@section('extra-css')

		<link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/pages/login.css') }}">

	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
		<div class="row">
	      <div class="col s12">
	        <div class="container"><div id="login-page" class="row">
	          <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
	            <form class="login-form"  method="POST" action="{{ route('login') }}">
	            	@csrf
	              	<div class="row">
		                <div class="input-field col s12 text-center">
		                  <h5 class="ml-4">Sign in</h5>
		                </div>

		                <div class="input-field col s12">
		                	@if (session('message'))

		                		<div class="card-alert card gradient-45deg-red-pink">
					                <div class="card-content white-text">
					                  <p>
					                    <i class="material-icons">error</i> {{ session('message') }}</p>
					                </div>
					               {{--  <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
					                  <span aria-hidden="true">×</span>
					                </button> --}}
					             </div>
						    @endif
		                </div>
	              	</div>

	                <div class="row margin">
		                <div class="input-field col s12">
		                  <i class="material-icons prefix pt-2">person_outline</i>
		                  <input id="username" type="text" name="email" value="{{ old('email') }}">
		                  <label for="username" class="center-align">Email</label>
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

	              	<div class="row">
		                <div class="col s12 m12 l12 ml-2 mt-1">
		                  <p>
		                    <label>
		                      <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
		                      <span>Remember Me</span>
		                    </label>
		                  </p>
		                </div>
	              	</div>

	                <div class="row">
		                <div class="input-field col s12">
		                  <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
		                </div>
		            </div>

	              <div class="row">
	                <div class="input-field col s6 m6 l6">
	                  <p class="margin medium-small"><a href="{{ route('register') }}">Register Now!</a></p>
	                </div>

	                @if (Route::has('password.request'))

                        <div class="input-field col s6 m6 l6">
		                  <p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
		                </div>

                    @endif

	                
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

