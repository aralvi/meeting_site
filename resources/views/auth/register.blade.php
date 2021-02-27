@extends('layouts.auth.app')
@section('title','Register')
{{-- head start --}}

	@section('extra-css')
	   <style type="text/css">
            .placeholder-color-change::-webkit-input-placeholder {
                color: #e91e63;
             }

       </style>
	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
	<div class="bg-register-img">
            <div class="padding-top-reg main_padding">
                <!-- Modal -info -->

                <!-- USER INFORMATION FIELD SET -->
                <div class="row m-0 box-shadow-reg form-radius rounded-right-reg">
                    <div class="col-md-5 bg-register-img2 p-0">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 padding-bottom-reg inner-padding pr-0">
                                <img src="{{ asset('assets/frontend/images/register_logo.png') }}" alt="" class="img-fluid" />
                                <div class="display-2 font-600 text-white pt-5">Register</div>
                                <div class="progress progress-height mt-5 bg-gray">
                                    <span class="white-dot "></span>
                                    <div class="progress-bar bg-gray" role="progressbar"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="h3 m-0 text-white pt-5 left-text height-bottm">No Credit Cards.
                                <br> No Commitments
                               <br> It takes only 2 minutes.
                            </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                    <div class="col-md-7 padding-right-reg padding-left-reg bg-white rounded-right-reg">
                        <form class="steps" action="{{ route('register') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" id="registerForm" novalidate="">
                            @csrf
                            <fieldset>
                                <div class="text-right pt-4">
                                    <div class="">Already Login?</div>
                                    <div class="pr-4 h5"><a href="#" class="cl-3AC574">Login</a></div>
                                </div>
                                <div class="h1 text-center cl-3AC574 pt-2">Register</div>
                                <div class="pl-5 pr-5">
                                    <div class="input-group mb-3 border-input pt-2">
										<span><img src="{{ asset('assets/frontend/images/shoping cart-8.png') }}" alt="" /></span>
                                        <span class="w-75">
                                            <input type="text" class="form-control border-0" placeholder="What is the name of your business?" name="business_name" id="business_name" aria-label="" aria-describedby="basic-addon1"/>
                                        </span>
                                    </div>
                                    <label class="cl-3AC574 m-0">
                                        <span><img src="{{ asset('assets/frontend/images/Path 122.png') }}" alt="" /></span>
                                        <span class="pl-1 cl-3AC574 h6">Link to your Public Profile</span>
                                    </label>
                                    <div class="input-group mb-3 border-input pt-0 pl-3">
                                        <input type="text" class="form-control border-0 pl-4 pt-0" placeholder="Link.public.profile" name="website" aria-label="" aria-describedby="basic-addon1" />
                                    </div>
                                    <div class="input-group mb-3 border-input pt-3">
                                        <span><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></span>
                                        <span class="w-75"><input type="text" class="form-control border-0" placeholder="Enter your name" id="name" name="name" aria-label="" aria-describedby="basic-addon1" /></span>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-3">
                                        <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                                        <span class="w-75"><input type="email" class="form-control border-0" placeholder="Enter your email" id="email" aria-label="" aria-describedby="basic-addon1" name="email" /></span>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-3">
                                        <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                                        <span class="w-75"><input type="password" class="form-control border-0" placeholder="Enter your password" name="password" id="password" aria-label="" aria-describedby="basic-addon1" /></span>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-3">
                                        <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                                        <span class="w-75"><input type="password" class="form-control border-0" placeholder="Confirm your password" name="password_confirmation" id="confirm_password" aria-label="" aria-describedby="basic-addon1" /></span>
                                    </div>

                                    <input type="button" class="btn bg-3AC574 w-100 mt-3 pt-2 pb-2  text-white btnstep step1" value="Continue Creating Account" />
                                    <div class="pt-2 f-14 cl-gray">
                                        <p class="mb-1">
                                            By Sigining up I agree the
                                            <span ><a href="#" class="cl-3AC574">terms and conditions </a> </span> and
                                            <span ><a href="#" class="cl-3AC574">privacy policy </a> </span>
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <h6 class="m-0 mb-5 pr-4 pb-2 cl-gray f-14">
                                            Message & Data Rates may Apply
                                        </h6>
                                    </div>
                                </div>
                                <span data-page="1" id="" class="inputBtn next action-button" onclick="btnClicK('dot-50','width-50','Enter contact Detail <br> for your business')"></span>
                            </fieldset>

                            <fieldset>
                                <div class="text-right pt-4">
                                    <div class="">Already Login?</div>
                                    <div class="pr-4 h5"><a href="#" class="cl-3AC574">Login</a></div>
                                </div>
                                <div class="h1 text-center cl-3AC574 pt-4">Help Clients find You.</div>
                                <div class="pl-5 pr-5">
                                    <div class="input-group mb-3 border-input pt-5">
                                        <span><img src="{{ asset('assets/frontend/images/phone-8.png') }}" alt="" /></span>
                                        <span class="w-75"> <input type="text" class="form-control border-0" placeholder="What is your business phone number" name="business_phone" id="business_phone" aria-label="" aria-describedby="basic-addon1" /></span>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-4">
                                        <span><img src="{{ asset('assets/frontend/images/location.png') }}" alt="" /></span>
                                        <span class="w-75"><input type="text ml-4" class="form-control border-0" placeholder="Enter your business location" name="business_location" id="business_location" aria-label="" aria-describedby="basic-addon1" /></span>
                                    </div>
                                    <div class="input-group mb-3 border-input pt-4" >
                                        <span><img src="{{ asset('assets/frontend/images/selection-8 (1).png') }}" alt="" /></span>
                                        <span><input type="text" class="form-control border-0" placeholder="Select Category" aria-label="" aria-describedby="basic-addon1" data-toggle="modal" data-target="#exampleModal" /></span>
                                    </div>
                                    <label class="cl-gray m-0 pt-3">
                                        <span><img src="{{ asset('assets/frontend/images/clock-8.png') }}" alt="" /></span>
                                        <span class="pl-1 h6">Opening hours</span>
                                    </label>
                                    <div class="input-group mb-3 border-input pt-0 pl-3">
                                        <input
                                            type="text"
                                            class="form-control border-0 pl-4 pt-0"
                                            placeholder="Monday-Friday                                                   10:00AM - 7:00 PM"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            data-toggle="modal" 
                                            data-target="#exampleModalLong"
                                        />
                                    </div>
                                    <input type="button" class="btn bg-3AC574 w-100 mt-5 pt-2 pb-2 mb-3 text-white btnstep step2" value="Continue" />
                                </div>
                                <span data-page="2" id="" class="inputBtn next action-button" onclick="btnClicK('dot-100','width-100','Please enter your Banking<br>information in order to <br> receive payouts.')"></span>
                            </fieldset>

                            <fieldset>
                                <div class="text-right pt-4">
                                    <div class="">Already Login?</div>
                                    <div class="pr-4 cl-3AC574 h5">Login</div>
                                </div>
                                <div class="h1 text-center cl-3AC574 pt-2">Enter Banking Information</div>
                                <div class="pl-5 pr-5">
                                    <div class="row pt-4">
                                        <div class="col-md-12 d-flex justify-content-center">

                                            <div class="bg-success ml-2 mr-2 pl-2 pr-2 active rounded border">
                                                <input type="radio" class="btn-check" name="payment_method" id="option1" autocomplete="off" checked onclick="radio(this)" value="stripe">
                                                <label class="btn text-white" for="option1">
                                                Stripe  
                                                  </label>
                                            </div>
                                            <div class=" ml-4 mr-4 pl-2 pr-2 rounded border">
                                                <input type="radio" class="btn-check" name="payment_method" id="option2" autocomplete="off" onclick="radio(this)"  value="paypal">
                                                <label class="btn " for="option2">Paypal</label>

                                            </div>
                                            <div class=" ml-2 mr-2 pl-2 pr-2 rounded border">
                                                <input type="radio" class="btn-check" name="payment_method" id="option4" autocomplete="off" onclick="radio(this)" value="payoneer">
                                                <label class="btn " for="option4">Payoneer</label>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="input-group mb-3 border-input pt-4 mb-4 mt-5">
                                        <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                                        <span><input type="email" id="payment_email" class="form-control border-0" placeholder="Enter your email" aria-label="" aria-describedby="basic-addon1" name="payment_email" /></span>
                                    </div>
                                    <div class="input-group mb-3 border-input pt-4 mb-4">
                                        <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                                        <span><input type="password" class="form-control border-0" placeholder="Enter your password" id="payment_password" aria-label="" aria-describedby="basic-addon1" name="payment_password" /></span>
                                    </div>
                                    <input type="button" class="btn bg-3AC574 w-100 mt-5 pt-2 pb-2 mb-3 text-white btnstep step3" value="Continue" />
                                   
                                </div>
                                <span data-page="3" id="" class="inputBtn next action-button"></span>
                            </fieldset>

                            <!-- Modal 1st code start-->
                            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog border-1" role="document">
                                    <div class="modal-content pt-4">
                                        <div class="modal-header border-0 pl-5 pr-5 ">
                                          <h2 class="modal-title cl-gray" id="exampleModalLabel">Main Category</h2>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pl-5 pr-5 pt-0">
                                            <select class="custom-select" name="category_id">
                                                <option value="1">It Service</option>
                                            </select>
                                        </div>
                                            <h2 class="modal-title pl-5 pr-5 cl-gray" id="exampleModalLabel">Business Category</h2>
                                            <div class="border overflow-scroll-reg pl-5 mt-2">
                                                <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" name="sub_category_id[]" id="customCheck1" value="1">
                                                  <label class="custom-control-label" for="customCheck1">Web Development</label>
                                                </div>
                                            </div>

                                        <div class="modal-footer m-auto border-0">
                                          <button type="button" onclick="$('.close').click();" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 1st code end-->

                            <!-- Modal 2nd code start-->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog border-1" role="document">
                                    <div class="modal-content pt-4">
                                        <div class="modal-header  border-0 pl-5 pr-5 ">
                                          <h1 class="modal-title cl-gray" id="exampleModalLabel">Opening hours</h1>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="pl-4 mt-2">
                                            <div class="border-bottom custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck101">
                                            <label class="custom-control-label mr-5" for="customCheck101">Monday</label>

                                            <select class="custom-select-reg ml-5 mr-2">
                                                  <option value="1">1:00 AM</option>
                                                  <option value="2">2:00 AM</option>
                                                  <option value="3">3:00 AM</option>
                                                  <option value="4">4:00 AM</option>
                                                  <option value="5">5:00 AM</option>
                                                  <option value="6">6:00 AM</option>
                                                  <option value="7">7:00 AM</option>
                                                  <option value="8">8:00 AM</option>
                                                  <option value="9">9:00 AM</option>
                                                  <option selected>10:00 AM</option>
                                                  <option value="10">11:00 AM</option>
                                                  <option value="11">12:00 AM</option>
                                            </select>
                                            -
                                            <select class="custom-select-reg ml-2">
                                                <option value="1">1:00 PM</option>
                                                <option value="2">2:00 PM</option>
                                                <option value="3">3:00 PM</option>
                                                <option value="4">4:00 PM</option>
                                                <option value="5">5:00 PM</option>
                                                <option value="6">6:00 PM</option>
                                                <option selected>7:00 PM</option>
                                                <option value="7">8:00 PM</option>
                                                <option value="8">9:00 PM</option>
                                                <option value="9">10:00 PM</option>
                                                <option value="10">11:00 PM</option>
                                                <option value="11">12:00 PM</option>
                                            </select>
                                            <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                            <div class="border-bottom custom-control custom-checkbox">
                                              <input type="checkbox" class="custom-control-input" id="customCheck102">
                                              <label class="custom-control-label mr-5" for="customCheck102">Tuesday</label>

                                                <select class="custom-select-reg ml-5 mr-2">
                                                  <option value="1">1:00 AM</option>
                                                  <option value="2">2:00 AM</option>
                                                  <option value="3">3:00 AM</option>
                                                  <option value="4">4:00 AM</option>
                                                  <option value="5">5:00 AM</option>
                                                  <option value="6">6:00 AM</option>
                                                  <option value="7">7:00 AM</option>
                                                  <option value="8">8:00 AM</option>
                                                  <option value="9">9:00 AM</option>
                                                  <option selected>10:00 AM</option>
                                                  <option value="10">11:00 AM</option>
                                                  <option value="11">12:00 AM</option>
                                                </select>
                                                -
                                                <select class="custom-select-reg ml-2">
                                                    <option value="1">1:00 PM</option>
                                                    <option value="2">2:00 PM</option>
                                                    <option value="3">3:00 PM</option>
                                                    <option value="4">4:00 PM</option>
                                                    <option value="5">5:00 PM</option>
                                                    <option value="6">6:00 PM</option>
                                                    <option selected>7:00 PM</option>
                                                    <option value="7">8:00 PM</option>
                                                    <option value="8">9:00 PM</option>
                                                    <option value="9">10:00 PM</option>
                                                    <option value="10">11:00 PM</option>
                                                    <option value="11">12:00 PM</option>
                                                </select>
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom custom-control custom-checkbox">
                                               <input type="checkbox" class="custom-control-input" id="customCheck103">
                                               <label class="custom-control-label mr-2" for="customCheck103">Wednessday</label>
                                              
                                                <select class="custom-select-reg ml-5 mr-2">
                                                  <option value="1">1:00 AM</option>
                                                  <option value="2">2:00 AM</option>
                                                  <option value="3">3:00 AM</option>
                                                  <option value="4">4:00 AM</option>
                                                  <option value="5">5:00 AM</option>
                                                  <option value="6">6:00 AM</option>
                                                  <option value="7">7:00 AM</option>
                                                  <option value="8">8:00 AM</option>
                                                  <option value="9">9:00 AM</option>
                                                  <option selected>10:00 AM</option>
                                                  <option value="10">11:00 AM</option>
                                                  <option value="11">12:00 AM</option>
                                                </select>
                                                -
                                                <select class="custom-select-reg ml-2">
                                                    <option value="1">1:00 PM</option>
                                                    <option value="2">2:00 PM</option>
                                                    <option value="3">3:00 PM</option>
                                                    <option value="4">4:00 PM</option>
                                                    <option value="5">5:00 PM</option>
                                                    <option value="6">6:00 PM</option>
                                                    <option selected>7:00 PM</option>
                                                    <option value="7">8:00 PM</option>
                                                    <option value="8">9:00 PM</option>
                                                    <option value="9">10:00 PM</option>
                                                    <option value="10">11:00 PM</option>
                                                    <option value="11">12:00 PM</option>
                                                </select>
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                            <div class="border-bottom custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck104">
                                                <label class="custom-control-label mr-4 pr-3" for="customCheck104">Thursday</label>
                                              
                                                <select class="custom-select-reg ml-5 mr-2">
                                                  <option value="1">1:00 AM</option>
                                                  <option value="2">2:00 AM</option>
                                                  <option value="3">3:00 AM</option>
                                                  <option value="4">4:00 AM</option>
                                                  <option value="5">5:00 AM</option>
                                                  <option value="6">6:00 AM</option>
                                                  <option value="7">7:00 AM</option>
                                                  <option value="8">8:00 AM</option>
                                                  <option value="9">9:00 AM</option>
                                                  <option selected>10:00 AM</option>
                                                  <option value="10">11:00 AM</option>
                                                  <option value="11">12:00 AM</option>
                                                </select>
                                                -
                                                <select class="custom-select-reg ml-2">
                                                    <option value="1">1:00 PM</option>
                                                    <option value="2">2:00 PM</option>
                                                    <option value="3">3:00 PM</option>
                                                    <option value="4">4:00 PM</option>
                                                    <option value="5">5:00 PM</option>
                                                    <option value="6">6:00 PM</option>
                                                    <option selected>7:00 PM</option>
                                                    <option value="7">8:00 PM</option>
                                                    <option value="8">9:00 PM</option>
                                                    <option value="9">10:00 PM</option>
                                                    <option value="10">11:00 PM</option>
                                                    <option value="11">12:00 PM</option>
                                                </select>
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                            <div class="border-bottom custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck105">
                                               <label class="custom-control-label mr-5 pr-3" for="customCheck105">Friday</label>
                                              
                                                <select class="custom-select-reg ml-5 mr-2">
                                                    <option value="1">1:00 AM</option>
                                                    <option value="2">2:00 AM</option>
                                                    <option value="3">3:00 AM</option>
                                                    <option value="4">4:00 AM</option>
                                                    <option value="5">5:00 AM</option>
                                                    <option value="6">6:00 AM</option>
                                                    <option value="7">7:00 AM</option>
                                                    <option value="8">8:00 AM</option>
                                                    <option value="9">9:00 AM</option>
                                                    <option selected>10:00 AM</option>
                                                    <option value="10">11:00 AM</option>
                                                    <option value="11">12:00 AM</option>
                                                </select>
                                                -
                                                <select class="custom-select-reg ml-2">
                                                    <option value="1">1:00 PM</option>
                                                    <option value="2">2:00 PM</option>
                                                    <option value="3">3:00 PM</option>
                                                    <option value="4">4:00 PM</option>
                                                    <option value="5">5:00 PM</option>
                                                    <option value="6">6:00 PM</option>
                                                    <option selected>7:00 PM</option>
                                                    <option value="7">8:00 PM</option>
                                                    <option value="8">9:00 PM</option>
                                                    <option value="9">10:00 PM</option>
                                                    <option value="10">11:00 PM</option>
                                                    <option value="11">12:00 PM</option>
                                                </select>
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                            <div class="border-bottom custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck106">
                                                <label class="custom-control-label mr-5" for="customCheck106">Saturday</label>
                                                <span class="ml-5 pr-3 cl-gray">Closed</span>
                                            </div>

                                            <div class="border-bottom custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck107">
                                                <label class="custom-control-label mr-5 pr-3" for="customCheck107">Sunday</label>
                                                
                                                <span class="ml-5 pr-4 cl-gray">Closed</span>
                                             
                                            </div>
                                        </div>
                                        <div class="modal-footer m-auto border-0">
                                          <button type="button" onclick="$('.close').click();" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 2nd code end-->

                        </form>
                    </div>
                </div>
            </div>
        </div>
      


  
    <!-- Modal 1st code start-->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog border-1" role="document">
            <div class="modal-content pt-4">
                <div class="modal-header border-0 pl-5 pr-5 ">
                  <h2 class="modal-title cl-gray" id="exampleModalLabel">Main Category</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pl-5 pr-5 pt-0">
                    <select class="custom-select" name="category_id">
                        <option value="1">It Service</option>
                    </select>
                </div>
                    <h2 class="modal-title pl-5 pr-5 cl-gray" id="exampleModalLabel">Business Category</h2>
                    <div class="border overflow-scroll-reg pl-5 mt-2">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" name="sub_category_id[]" id="customCheck1" value="1">
                          <label class="custom-control-label" for="customCheck1">Web Development</label>
                        </div>
                    </div>

                <div class="modal-footer m-auto border-0">
                  <button type="button" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 1st code end-->

    <!-- Modal 2nd code start-->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog border-1" role="document">
            <div class="modal-content pt-4">
                <div class="modal-header  border-0 pl-5 pr-5 ">
                  <h1 class="modal-title cl-gray" id="exampleModalLabel">Opening hours</h1>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="pl-4 mt-2">
                    <div class="border-bottom custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck101">
                    <label class="custom-control-label mr-5" for="customCheck101">Monday</label>

                    <select class="custom-select-reg ml-5 mr-2">
                          <option value="1">1:00 AM</option>
                          <option value="2">2:00 AM</option>
                          <option value="3">3:00 AM</option>
                          <option value="4">4:00 AM</option>
                          <option value="5">5:00 AM</option>
                          <option value="6">6:00 AM</option>
                          <option value="7">7:00 AM</option>
                          <option value="8">8:00 AM</option>
                          <option value="9">9:00 AM</option>
                          <option selected>10:00 AM</option>
                          <option value="10">11:00 AM</option>
                          <option value="11">12:00 AM</option>
                    </select>
                    -
                    <select class="custom-select-reg ml-2">
                        <option value="1">1:00 PM</option>
                        <option value="2">2:00 PM</option>
                        <option value="3">3:00 PM</option>
                        <option value="4">4:00 PM</option>
                        <option value="5">5:00 PM</option>
                        <option value="6">6:00 PM</option>
                        <option selected>7:00 PM</option>
                        <option value="7">8:00 PM</option>
                        <option value="8">9:00 PM</option>
                        <option value="9">10:00 PM</option>
                        <option value="10">11:00 PM</option>
                        <option value="11">12:00 PM</option>
                    </select>
                    <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                    </div>
                    <div class="border-bottom custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck102">
                      <label class="custom-control-label mr-5" for="customCheck102">Tuesday</label>

                        <select class="custom-select-reg ml-5 mr-2">
                          <option value="1">1:00 AM</option>
                          <option value="2">2:00 AM</option>
                          <option value="3">3:00 AM</option>
                          <option value="4">4:00 AM</option>
                          <option value="5">5:00 AM</option>
                          <option value="6">6:00 AM</option>
                          <option value="7">7:00 AM</option>
                          <option value="8">8:00 AM</option>
                          <option value="9">9:00 AM</option>
                          <option selected>10:00 AM</option>
                          <option value="10">11:00 AM</option>
                          <option value="11">12:00 AM</option>
                        </select>
                        -
                        <select class="custom-select-reg ml-2">
                            <option value="1">1:00 PM</option>
                            <option value="2">2:00 PM</option>
                            <option value="3">3:00 PM</option>
                            <option value="4">4:00 PM</option>
                            <option value="5">5:00 PM</option>
                            <option value="6">6:00 PM</option>
                            <option selected>7:00 PM</option>
                            <option value="7">8:00 PM</option>
                            <option value="8">9:00 PM</option>
                            <option value="9">10:00 PM</option>
                            <option value="10">11:00 PM</option>
                            <option value="11">12:00 PM</option>
                        </select>
                        <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                    </div>

                    <div class="border-bottom custom-control custom-checkbox">
                       <input type="checkbox" class="custom-control-input" id="customCheck103">
                       <label class="custom-control-label mr-2" for="customCheck103">Wednessday</label>
                      
                        <select class="custom-select-reg ml-5 mr-2">
                          <option value="1">1:00 AM</option>
                          <option value="2">2:00 AM</option>
                          <option value="3">3:00 AM</option>
                          <option value="4">4:00 AM</option>
                          <option value="5">5:00 AM</option>
                          <option value="6">6:00 AM</option>
                          <option value="7">7:00 AM</option>
                          <option value="8">8:00 AM</option>
                          <option value="9">9:00 AM</option>
                          <option selected>10:00 AM</option>
                          <option value="10">11:00 AM</option>
                          <option value="11">12:00 AM</option>
                        </select>
                        -
                        <select class="custom-select-reg ml-2">
                            <option value="1">1:00 PM</option>
                            <option value="2">2:00 PM</option>
                            <option value="3">3:00 PM</option>
                            <option value="4">4:00 PM</option>
                            <option value="5">5:00 PM</option>
                            <option value="6">6:00 PM</option>
                            <option selected>7:00 PM</option>
                            <option value="7">8:00 PM</option>
                            <option value="8">9:00 PM</option>
                            <option value="9">10:00 PM</option>
                            <option value="10">11:00 PM</option>
                            <option value="11">12:00 PM</option>
                        </select>
                        <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                    </div>
                    <div class="border-bottom custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck104">
                        <label class="custom-control-label mr-4 pr-3" for="customCheck104">Thursday</label>
                      
                        <select class="custom-select-reg ml-5 mr-2">
                          <option value="1">1:00 AM</option>
                          <option value="2">2:00 AM</option>
                          <option value="3">3:00 AM</option>
                          <option value="4">4:00 AM</option>
                          <option value="5">5:00 AM</option>
                          <option value="6">6:00 AM</option>
                          <option value="7">7:00 AM</option>
                          <option value="8">8:00 AM</option>
                          <option value="9">9:00 AM</option>
                          <option selected>10:00 AM</option>
                          <option value="10">11:00 AM</option>
                          <option value="11">12:00 AM</option>
                        </select>
                        -
                        <select class="custom-select-reg ml-2">
                            <option value="1">1:00 PM</option>
                            <option value="2">2:00 PM</option>
                            <option value="3">3:00 PM</option>
                            <option value="4">4:00 PM</option>
                            <option value="5">5:00 PM</option>
                            <option value="6">6:00 PM</option>
                            <option selected>7:00 PM</option>
                            <option value="7">8:00 PM</option>
                            <option value="8">9:00 PM</option>
                            <option value="9">10:00 PM</option>
                            <option value="10">11:00 PM</option>
                            <option value="11">12:00 PM</option>
                        </select>
                        <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                    </div>
                    <div class="border-bottom custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck105">
                       <label class="custom-control-label mr-5 pr-3" for="customCheck105">Friday</label>
                      
                        <select class="custom-select-reg ml-5 mr-2">
                            <option value="1">1:00 AM</option>
                            <option value="2">2:00 AM</option>
                            <option value="3">3:00 AM</option>
                            <option value="4">4:00 AM</option>
                            <option value="5">5:00 AM</option>
                            <option value="6">6:00 AM</option>
                            <option value="7">7:00 AM</option>
                            <option value="8">8:00 AM</option>
                            <option value="9">9:00 AM</option>
                            <option selected>10:00 AM</option>
                            <option value="10">11:00 AM</option>
                            <option value="11">12:00 AM</option>
                        </select>
                        -
                        <select class="custom-select-reg ml-2">
                            <option value="1">1:00 PM</option>
                            <option value="2">2:00 PM</option>
                            <option value="3">3:00 PM</option>
                            <option value="4">4:00 PM</option>
                            <option value="5">5:00 PM</option>
                            <option value="6">6:00 PM</option>
                            <option selected>7:00 PM</option>
                            <option value="7">8:00 PM</option>
                            <option value="8">9:00 PM</option>
                            <option value="9">10:00 PM</option>
                            <option value="10">11:00 PM</option>
                            <option value="11">12:00 PM</option>
                        </select>
                        <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).parent('div').remove();"><span aria-hidden="true">&times;</span></button> 
                    </div>
                    <div class="border-bottom custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck106">
                        <label class="custom-control-label mr-5" for="customCheck106">Saturday</label>
                        <span class="ml-5 pr-3 cl-gray">Closed</span>
                    </div>

                    <div class="border-bottom custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck107">
                        <label class="custom-control-label mr-5 pr-3" for="customCheck107">Sunday</label>
                        
                        <span class="ml-5 pr-4 cl-gray">Closed</span>
                     
                    </div>
                </div>
                <div class="modal-footer m-auto border-0">
                  <button type="button" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2nd code end-->

	@endsection

{{-- content section end --}}

{{-- footer section start --}}


	@section('extra-script')

	   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    	<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    	<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    	<script src="{{ asset('assets/frontend/js/jquery.validate.js') }}"></script>
        <script>
            const radio = (ele) => {

                $(ele).parent().addClass('bg-success');
                $(ele).parent().siblings().removeClass('bg-success');
                $(ele).parent().siblings().find('label').removeClass('text-white');
                // $(ele).siblings().removeClass('text-white');
                $(ele).siblings().addClass('text-white');

            }
           
            function inptFieldValidate(id)
            {
                if($(id).val() =='')
                {
                    $(id).addClass('placeholder-color-change');
                    $(id).parent('span').parent('div').removeClass('border-input');
                    $(id).parent('span').parent('div').css("border-bottom" ,"1px solid #e91e63");
                    return false;
                }
                $(id).removeClass('placeholder-color-change');
                $(id).parent('span').parent('div').css("border-bottom" ,"1px solid #3ac574");
                return true;
            }

        </script>

    	<script>
                const btnClicK =(className,parentClass ,txtLeft)=>{
                  let v =  $('.white-dot')
                 $('.left-text').html(txtLeft);
                  v.addClass(className);
                  v.siblings().addClass(parentClass);
                }
        </script>
        <script>
            var testObject = [];
            const button = document.getElementById("submit");

            const name = document.getElementById("legaNmae");
            const DBA = document.getElementById("DBA");
            const business = document.getElementById("business");
            const city = document.getElementById("city");

            function handleClick() {
                testObject.push({
                    name: name.value,
                    DBA: DBA.value,
                    business: business.value,
                    city: city.value,
                });
                localStorage.setItem("FormData", JSON.stringify(testObject));
                console.log(testObject);
            }
            // button.addEventListener("click", function() {

            // })
            // function handleClick(){
            //     let a = document.getElementById("DBA").value
            //     let b = document.getElementById("address").value
            //     let c = document.getElementById("city").value
            //     console.log(a,b,c)
            // }
            /* Fundraising Grader
             *
             * Generic Copyright, yadda yadd yadda
             *
             * Plug-ins: jQuery Validate, jQuery
             * Easing
             */

            $(document).ready(function () {
                var current_fs, next_fs, previous_fs;
                var left, opacity, scale;
                var animating;
                $(".steps").validate({
                    errorClass: "invalid",
                    errorElement: "span",
                    errorPlacement: function (error, element) {
                        error.insertAfter(element.next("span").children());
                    },
                    highlight: function (element) {
                        $(element).next("span").show();
                    },
                    unhighlight: function (element) {
                        $(element).next("span").hide();
                    },
                });
                $(".next").click(function () {
                    $(".steps").validate({
                        errorClass: "invalid",
                        errorElement: "span",
                        errorPlacement: function (error, element) {
                            error.insertAfter(element.next("span").children());
                        },
                        highlight: function (element) {
                            $(element).next("span").show();
                        },
                        unhighlight: function (element) {
                            $(element).next("span").hide();
                        },
                    });
                    if (!$(".steps").valid()) {
                        return true;
                    }
                    if (animating) return false;
                    animating = false;
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                    

                    next_fs.show();
                    current_fs.animate(
                        {
                            opacity: 0,
                        },
                        {
                            step: function (now, mx) {
                                scale = 1 - (1 - now) * 0.2;
                                // left = now * 50 + "%";
                                opacity = 1 - now;
                                current_fs.css({
                                    transform: "scale(" + scale + ")",
                                });
                                next_fs.css({
                                    //   left: left,
                                    opacity: opacity,
                                });
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            easing: "easeInOutExpo",
                        }
                    );
                });
                $(".submit").click(function () {
                    $(".white-dot").css({"right": "170px" });
                    $(".steps").validate({
                        errorClass: "invalid",
                        errorElement: "span",
                        errorPlacement: function (error, element) {
                            error.insertAfter(element.next("span").children());
                        },
                        highlight: function (element) {
                            $(element).next("span").show();
                        },
                        unhighlight: function (element) {
                            $(element).next("span").hide();
                        },
                    });
                    if (!$(".steps").valid()) {
                        return false;
                    }
                    if (animating) return false;
                    animating = true;
                    current_fs = $(this).parent();
                    next_fs = $(this).parent().next();
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                  

                    next_fs.show();
                    current_fs.animate(
                        {
                            opacity: 0,
                        },
                        {
                            step: function (now, mx) {
                                scale = 1 - (1 - now) * 0.2;
                                // left = now * 50 + "%";
                                
                                opacity = 1 - now;
                                current_fs.css({
                                    transform: "scale(" + scale + ")",
                                });
                                next_fs.css({
                                    //   left: left,
                                    
                                    opacity: opacity,
                                });
                                white-dot.css({
                                    left: "30px",

                                });
                            },
                            duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            easing: "easeInOutExpo",
                        }
                    );
                });
                $(".previous").click(function () {
                    if (animating) return false;
                    animating = true;
                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();
                    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                    previous_fs.show();
                    current_fs.animate(
                        {
                            opacity: 0,
                        },
                        {
                            step: function (now, mx) {
                                scale = 0.8 + (1 - now) * 0.2;
                                // left = (1 - now) * 50 + "%";
                                opacity = 1 - now;
                                current_fs.css({
                                    //   left: left,
                                });
                                previous_fs.css({
                                    transform: "scale(" + scale + ")",
                                    opacity: opacity,
                                });
                            },
                            //   duration: 800,
                            complete: function () {
                                current_fs.hide();
                                animating = false;
                            },
                            easing: "easeInOutExpo",
                        }
                    );
                });
            });
            jQuery(document).ready(function () {
                jQuery(
                    "#edit-submitted-acquisition-amount-1,#edit-submitted-acquisition-amount-2,#edit-submitted-cultivation-amount-1,#edit-submitted-cultivation-amount-2,#edit-submitted-cultivation-amount-3,#edit-submitted-cultivation-amount-4,#edit-submitted-retention-amount-1,#edit-submitted-retention-amount-2,#edit-submitted-constituent-base-total-constituents"
                ).keyup(function () {
                    calcTotal();
                });
            });

            function calcTotal() {
                var grade = 0;
                var donorTotal = Number(jQuery("#edit-submitted-constituent-base-total-constituents").val().replace(/,/g, ""));
                if (donorTotal) {
                    donorTotal = parseFloat(donorTotal);
                } else {
                    donorTotal = 0;
                }
                grade += getBonusDonorPoints(donorTotal);
                var acqAmount1 = Number(jQuery("#edit-submitted-acquisition-amount-1").val().replace(/,/g, ""));
                var acqAmount2 = Number(jQuery("#edit-submitted-acquisition-amount-2").val().replace(/,/g, ""));
                var acqTotal = 0;
                if (acqAmount1) {
                    acqAmount1 = parseFloat(acqAmount1);
                } else {
                    acqAmount1 = 0;
                }
                if (acqAmount2) {
                    acqAmount2 = parseFloat(acqAmount2);
                } else {
                    acqAmount2 = 0;
                }
                if (acqAmount1 > 0 && acqAmount2 > 0) {
                    acqTotal = (((acqAmount2 - acqAmount1) / acqAmount1) * 100).toFixed(2);
                } else {
                    acqTotal = 0;
                }
                jQuery("#edit-submitted-acquisition-percent-change").val(acqTotal + "%");
                grade += getAcquisitionPoints(acqTotal);
                console.log(grade);
                var cultAmount1 = Number(jQuery("#edit-submitted-cultivation-amount-1").val().replace(/,/g, ""));
                var cultAmount2 = Number(jQuery("#edit-submitted-cultivation-amount-2").val().replace(/,/g, ""));
                var cultTotal = 0;
                if (cultAmount1) {
                    cultAmount1 = parseFloat(cultAmount1);
                } else {
                    cultAmount1 = 0;
                }
                if (cultAmount2) {
                    cultAmount2 = parseFloat(cultAmount2);
                } else {
                    cultAmount2 = 0;
                }
                if (cultAmount1 > 0 && cultAmount2 > 0) {
                    cultTotal = (((cultAmount2 - cultAmount1) / cultAmount1) * 100).toFixed(2);
                } else {
                    cultTotal = 0;
                }
                jQuery("#edit-submitted-cultivation-percent-change1").val(cultTotal + "%");
                grade += getAcquisitionPoints(cultTotal);
                var cultAmount3 = Number(jQuery("#edit-submitted-cultivation-amount-3").val().replace(/,/g, ""));
                var cultAmount4 = Number(jQuery("#edit-submitted-cultivation-amount-4").val().replace(/,/g, ""));
                if (cultAmount3) {
                    cultAmount3 = parseFloat(cultAmount3);
                } else {
                    cultAmount3 = 0;
                }
                if (cultAmount4) {
                    cultAmount4 = parseFloat(cultAmount4);
                } else {
                    cultAmount4 = 0;
                }
                if (cultAmount3 > 0 && cultAmount4 > 0) {
                    cultTotal2 = (((cultAmount4 - cultAmount3) / cultAmount3) * 100).toFixed(2);
                } else {
                    cultTotal2 = 0;
                }
                jQuery("#edit-submitted-cultivation-percent-change2").val(cultTotal2 + "%");
                grade += getAcquisitionPoints(cultTotal2);
                var retAmount1 = Number(jQuery("#edit-submitted-retention-amount-1").val().replace(/,/g, ""));
                var retAmount2 = Number(jQuery("#edit-submitted-retention-amount-2").val().replace(/,/g, ""));
                var retTotal = 0;
                if (retAmount1) {
                    retAmount1 = parseFloat(retAmount1);
                } else {
                    retAmount1 = 0;
                }
                if (retAmount2) {
                    retAmount2 = parseFloat(retAmount2);
                } else {
                    retAmount2 = 0;
                }
                if (retAmount1 > 0 && retAmount2 > 0) {
                    retTotal = ((retAmount2 / retAmount1) * 100).toFixed(2);
                } else {
                    retTotal = 0;
                }
                jQuery("#edit-submitted-retention-percent-change").val(retTotal + "%");
                grade += getAcquisitionPoints(retTotal);
                jQuery("#edit-submitted-final-grade-grade").val(grade + " / 400");
            }

            function getAcquisitionPoints(val) {
                if (val < 1) {
                    return 0;
                } else if (val >= 1 && val < 6) {
                    return 50;
                } else if (val >= 6 && val < 11) {
                    return 60;
                } else if (val >= 11 && val < 16) {
                    return 70;
                } else if (val >= 16 && val < 21) {
                    return 75;
                } else if (val >= 21 && val < 26) {
                    return 80;
                } else if (val >= 26 && val < 31) {
                    return 85;
                } else if (val >= 31 && val < 36) {
                    return 90;
                } else if (val >= 36 && val < 41) {
                    return 95;
                } else if (val >= 41) {
                    return 100;
                }
            }

            function getCultivationGiftPoints(val) {
                if (val < 1) {
                    return 0;
                } else if (val >= 1 && val < 4) {
                    return 50;
                } else if (val >= 4 && val < 7) {
                    return 60;
                } else if (val >= 7 && val < 10) {
                    return 70;
                } else if (val >= 10 && val < 13) {
                    return 75;
                } else if (val >= 13 && val < 16) {
                    return 80;
                } else if (val >= 16 && val < 21) {
                    return 85;
                } else if (val >= 21 && val < 26) {
                    return 90;
                } else if (val >= 26 && val < 51) {
                    return 95;
                } else if (val >= 51) {
                    return 100;
                }
            }

            function getCultivationDonationPoints(val) {
                if (val < 1) {
                    return 0;
                } else if (val >= 1 && val < 6) {
                    return 50;
                } else if (val >= 6 && val < 11) {
                    return 60;
                } else if (val >= 11 && val < 16) {
                    return 70;
                } else if (val >= 16 && val < 21) {
                    return 75;
                } else if (val >= 21 && val < 26) {
                    return 80;
                } else if (val >= 26 && val < 31) {
                    return 85;
                } else if (val >= 31 && val < 36) {
                    return 90;
                } else if (val >= 36 && val < 41) {
                    return 95;
                } else if (val >= 41) {
                    return 100;
                }
            }

            function getRetentionPoints(val) {
                if (val < 1) {
                    return 0;
                } else if (val >= 1 && val < 51) {
                    return 50;
                } else if (val >= 51 && val < 56) {
                    return 60;
                } else if (val >= 56 && val < 61) {
                    return 70;
                } else if (val >= 61 && val < 66) {
                    return 75;
                } else if (val >= 66 && val < 71) {
                    return 80;
                } else if (val >= 71 && val < 76) {
                    return 85;
                } else if (val >= 76 && val < 81) {
                    return 90;
                } else if (val >= 81 && val < 91) {
                    return 95;
                } else if (val >= 91) {
                    return 100;
                }
            }

            function getBonusDonorPoints(val) {
                if (val < 10001) {
                    return 0;
                } else if (val >= 10001 && val < 25001) {
                    return 10;
                } else if (val >= 25001 && val < 50000) {
                    return 15;
                } else if (val >= 50000) {
                    return 20;
                }
            }
        </script>

        <script>
           
            $(document.body).on("click", "input.step1", function () {

                if(inptFieldValidate($('#business_name')) && inptFieldValidate($('#name')) && inptFieldValidate($('#email')) && inptFieldValidate($('#password')))
                {$(this).parent("div").siblings("span.inputBtn").click();}
            });

            $(document.body).on("click", "input.step2", function () {
                if(inptFieldValidate($('#business_phone')) && inptFieldValidate($('#business_location')))
                {$(this).parent("div").siblings("span.inputBtn").click();}
            });

            $(document.body).on("click", "input.step3", function () {
                if(inptFieldValidate($('#payment_email')) && inptFieldValidate($('#payment_password')))
                {
                    $('#registerForm').submit();
                }
                // let v = $(this).parent("div").siblings("span.inputBtn").click();
            });
        </script>
		

	@endsection

{{-- footer section end --}}

