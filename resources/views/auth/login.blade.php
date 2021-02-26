@extends('layouts.auth.app')
@section('title','Login')
{{-- head start --}}
	
	@section('extra-css')

	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
	<div class="bg-register-img">
      <div class="padding-top-reg main_padding">
        <div class="row m-0 box-shadow-reg form-radius rounded-right-reg">
          <div class="col-md-5 bg-register-img2 p-0">
            
              
              <div class="text-center padding-bottom-reg-1 inner-padding">
                <img
                  src="{{ asset('assets/frontend/images/register_logo.png') }}"
                  alt=""
                  class="img-fluid "
                />
                <div class="display-2 font-600 text-white pt-5">Welcome Back!</div>
              
                <div class="h3 m-0 text-white pt-3">To keep connected with us please <br> login with your personal info</div>
         
              </div>
          
            
          </div>
          <div
            class="col-md-7 padding-right-reg padding-left-reg bg-white rounded-right-reg"
          >
            
            <div class="h1 text-center cl-3AC574 padding-top-reg">Signin to Learnmelive</div>
            <div class="pl-5 pr-5">
            
              <div >
                  <div class="row pt-3">
                      <div class="col-md-12 text-center">
                          <img src="{{ asset('assets/frontend/images/fb-icon.png') }}" alt="" class="img-fluid">
                          <img src="{{ asset('assets/frontend/images/google.png') }}" alt="" class="img-fluid">
                          <img src="{{ asset('assets/frontend/images/apple.png') }}" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="row pt-3">
                      <div class="col-md-12 text-center">
                         <h6 class="cl-gray">or use email for login</h6>
                      </div>
                  </div>
              </div>
             
              <div class="input-group mb-3 border-input pt-4">
                <span><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></span>
                <span
                  ><input
                    type="text"
                    class="form-control border-0"
                    placeholder="Email / Username"
                    aria-label=""
                    aria-describedby="basic-addon1"
                /></span>
              </div>
              <div class="input-group border-input pt-4 mb-5">
                <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                <span
                  ><input
                    type="text"
                    class="form-control border-0 "
                    placeholder="Enter your password"
                    aria-label=""
                    aria-describedby="basic-addon1"
                /></span>
              </div>
              <button
                type="button"
                class="btn bg-3AC574 w-100 mt-2 pt-2 pb-2 mb-3 text-white"
              >
                Sign in
              </button>
              <div class="row pt-4 pb-4 cl-gray p-0 m-0 border-bottom">
               <div class="col-md-6 text-left">
                    <div class="form-check pl-0">
                        <input class="form-check-input border-3AC574" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label cl-3AC574 font-600 pl-2" for="defaultCheck1">
                         Remember me
                        </label>
                    </div> 
                </div>
                <div class="col-md-6 text-right">

                    <h6 class="cl-3AC574">Forgotten password</h6>
                </div>
              </div>
              <div class="text-center">
                <h6 class="m-0 mt-4 cl-gray">
                  Not a member yet? 
                  <span class="cl-3AC574"> Join now</span>
                </h6>
              </div>
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

