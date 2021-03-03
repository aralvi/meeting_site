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
                                    <div class="">Already Registerd?</div>
                                    <div class="pr-4 h5"><a href="{{route('login')}}" class="cl-3AC574">Login</a></div>
                                </div>
                                <div class="h1 text-center cl-3AC574 pt-2">Register</div>

                                <div class="row pt-4">
                                    
                                    <div class="col-md-12 d-flex justify-content-center">

                                        <div class="bg-3AC574 ml-2 mr-2 pl-4 pr-4 active rounded border">
                                            <input type="radio" class="btn-check" name="user_type" id="specialist" autocomplete="off" checked onclick="radio(this)" value="specialist">
                                            <label class="btn text-white" for="specialist">
                                            Specialist
                                              </label>
                                        </div>
                                        <div class=" ml-4 mr-4 pl-4 pr-4 rounded border">
                                            <input type="radio" class="btn-check" name="user_type" id="client" autocomplete="off" onclick="radio(this)"  value="client">
                                            <label class="btn " for="client">Client</label>

                                        </div>

                                    </div>

                                </div>

                                <div class="pl-5 pr-5 first-step-html-change">
                                    <div class="input-group mb-3 border-input pt-2">
										<span><img src="{{ asset('assets/frontend/images/shoping cart-8.png') }}" alt="" /></span>
                                        <span class="w-75">
                                            <input type="text" class="form-control border-0" placeholder="Create a username" name="business_name" id="business_name" aria-label="" aria-describedby="basic-addon1"/>
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
                                        <span class="w-75"><input type="text" class="form-control border-0" placeholder="Enter your full name" id="name" name="name" aria-label="" aria-describedby="basic-addon1" /></span>
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
                                    <div class="pt-4 f-14 cl-gray text-center">
                                        <p class="mb-1">
                                            By Sigining up I agree the
                                            <span ><a href="#" class="cl-3AC574">terms and conditions </a> </span> and
                                            <span ><a href="#" class="cl-3AC574">privacy policy </a> </span>
                                        </p>
                                    </div>
                                    <div class="text-center">
                                        <h6 class="border-bottom m-0 mb-5 pr-4 pb-2 cl-gray f-14">
                                            Message & Data Rates may Apply
                                        </h6>
                                    </div>
                                </div>
                                <span data-page="1" id="" class="inputBtn next action-button" onclick="btnClicK('dot-50','width-50','Enter contact Detail <br> for your business')"></span>
                            </fieldset>

                            <fieldset>
                                <div class="text-right pt-4">
                                    <div class="">Already Registerd?</div>
                                    <div class="pr-4 h5"><a href="{{route('login')}}" class="cl-3AC574">Login</a></div>
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
                                        <span><input type="text" class="form-control border-0" placeholder="Select Category" id="select_category" aria-label="" aria-describedby="basic-addon1" data-toggle="modal" data-target="#exampleModal" /></span>
                                    </div>

                                    <label class="cl-gray m-0 pt-3">
                                        <span><img src="{{ asset('assets/frontend/images/clock-8.png') }}" alt="" /></span>
                                        <span class="pl-1 h6">Days & Hours of Availability </span>
                                    </label>
                                    <div class="input-group mb-3 border-input pt-0 pl-3">
                                        <input
                                            type="text"
                                            class="form-control border-0 pl-4 pt-0"
                                            placeholder="Select Opening Hours"
                                            id="select_opening_hours"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            data-toggle="modal" 
                                            data-target="#exampleModalLong"
                                            readonly
                                        />
                                    </div>
                                    <input type="button" class="btn bg-3AC574 w-25 mt-5 pt-2 pb-2 mb-3 text-white btnstep step2 float-right" value="Continue" />
                                    <input type="button" data-page="4" name="previous" class=" btn bg-3AC574 w-25 mt-5 pt-2 pb-2 mb-3 text-white btnstep backstep2" value="Previous" />
                                    
                                </div>
                                <span data-page="2" id="" class="inputBtn next action-button" onclick="btnClicK('dot-100','width-100','Please enter your Banking<br>information in order to <br> receive payouts.')"></span>
                                <span data-page="1" id="" class="previous action-button btn-step-back"  onclick="btnClicKBack('dot-50','width-50','dot-0','width-0','No Credit Cards. <br> No Commitments <br> It takes only 2 minutes.')"></span>
                                
                            </fieldset>

                            <fieldset>
                                <div class="text-right pt-4">
                                    <div class="">Already Registerd?</div>
                                    <div class="pr-4 cl-3AC574 h5"><a href="{{route('login')}}" class="cl-3AC574">Login</a></div>
                                </div>

                                <div class="h1 text-center cl-3AC574 pt-2">Enter Banking Information</div>
                                <div class="pl-5 pr-5">
                                    <div class="row pt-4">
                                        <div class="col-md-12 d-flex justify-content-center">

                                            <div class="bg-3AC574 ml-2 mr-2 pl-4 pr-4 active rounded border">
                                                <input type="radio" class="btn-check" name="payment_method" id="option1" autocomplete="off" checked onclick="paymentRadio(this)" value="stripe">
                                                <label class="btn text-white" for="option1">
                                                Stripe  
                                                  </label>
                                            </div>
                                            <div class=" ml-4 mr-4 pl-4 pr-4 rounded border">
                                                <input type="radio" class="btn-check" name="payment_method" id="option2" autocomplete="off" onclick="paymentRadio(this)"  value="paypal">
                                                <label class="btn " for="option2">Paypal</label>

                                            </div>
                                            <div class=" ml-2 mr-2 pl-3 pr-3 rounded border">
                                                <input type="radio" class="btn-check" name="payment_method" id="option4" autocomplete="off" onclick="paymentRadio(this)" value="payoneer">
                                                <label class="btn " for="option4">Payoneer</label>

                                            </div>

                                        </div>

                                    </div>

                                    <div id="payment_selection_html">
                                        
                                        <div class="input-group mb-3 border-input pt-3 mt-3">
                                            <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                                            <span><input type="text" id="payment_name" class="form-control border-0" placeholder="Enter your name" aria-label="" aria-describedby="basic-addon1" name="payment_name" /></span>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3">
                                            <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                                            <span><input type="text" id="payment_phone" class="form-control border-0" placeholder="Enter your phone" aria-label="" aria-describedby="basic-addon1" name="payment_phone" /></span>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3">
                                            <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                                            <span><input type="date" id="payment_date_birth" class="form-control border-0" placeholder="" aria-label="" aria-describedby="basic-addon1" name="payment_birth_date" /></span>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3">
                                            <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                                            <span><input type="number" class="form-control border-0" placeholder="Last 4 Digits of SSN (for US only)" id="payment_ssn" aria-label="" aria-describedby="basic-addon1" name="payment_ssn" /></span>
                                        </div>

                                    </div>
                                    
                                    <input type="button" class="btn bg-3AC574 w-25 mt-5 pt-2 pb-2 mb-3 text-white btnstep step3 float-right" value="Continue" />
                                    <input type="button" data-page="2" name="previous" class=" btn bg-3AC574 w-25 mt-5 pt-2 pb-2 mb-3 text-white btnstep backstep2" value="Previous" />
                                    <div class="row">
                                        <div class="col-md-12 pt-4 alerMsg" style="display: none;">
                                            <div class="alert alert-success">You have registered successfully</div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <span data-page="3" id="" class="inputBtn next action-button"></span>
                                <span data-page="1" id="" class="previous action-button btn-step-back"  onclick="btnClicKBack('dot-100','width-100','dot-50','width-50','Enter contact Detail <br> for your business')"></span>
                            </fieldset>

                            <!-- Modal 1st code start-->
                            <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog border-1" role="document">
                                    <div class="modal-content pt-4">
                                        <div class="modal-header border-0 pl-5 pr-5 ">
                                          <h2 class="modal-title cl-gray" id="exampleModalLabel">Main Category</h2>
                                          <button type="button" class="close close1" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body pl-5 pr-5 pt-0">
                                            <select class="custom-select main-category" name="category_id" onchange="getSubCategories(this);">
                                                @if(App\Category::all()->count() >0)
                                                    <option value ="Select Main Category" selected="" disabled="">Select Main Category</option>
                                                    @foreach(App\Category::all() as $category)
                                                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                                    @endforeach
                                                @endif
                                                
                                            </select>
                                        </div>

                                        <div id="sub_categories">
                                            
                                        </div>

                                        <div class="modal-footer m-auto border-0">
                                          <button type="button" onclick="$('.close1').click();" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 1st code end-->

                            <!-- Modal 2nd code start-->
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog border-1" role="document">
                                    <div class="modal-content pt-4">
                                        <div class="modal-header  border-0 pl-5 pr-4 ">
                                            <h3 class="modal-title cl-gray" id="exampleModalLabel">Days & Hours of Availability </h3>
                                            <button type="button" class="close close2 pt-0" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="pl-4 mt-2 ">
                                            <div class="border-bottom custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days " id="customCheck101" name="days[]" value="monday" checked>
                                                <label class="custom-control-label mr-5" for="customCheck101">Monday</label> 
                                                <!-- Time select code -->
                                                <select class="custom-select-reg ml-5 mr-2" name="monday_from">
                                                     <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" >10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM" selected>3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                             </select>
                                                    -
                                            <select class="custom-select-reg ml-2" name="monday_to">
                                                     <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" >10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM" selected>7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                            </select>
                                                <!-- Time select code -->
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" id="customCheck102" name="days[]" value="tuesday" checked>
                                                <label class="custom-control-label mr-5" for="customCheck102">Tuesday</label>
                                                <!-- Time select code -->
                                                <select class="custom-select-reg ml-5 mr-2" name="tuesday_from">
                                                     <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" selected>10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                             </select>
                                                    -
                                            <select class="custom-select-reg ml-2" name="tuesday_to">
                                            <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" >10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM" selected>4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                            </select>
                                                <!-- Time select code -->
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" id="customCheck103" name="days[]" value="wednesday" checked>
                                                <label class="custom-control-label mr-3" for="customCheck103">Wednesday</label>
                                                <!-- Time select code -->
                                               <select class="custom-select-reg ml-5 mr-2" name="wednesday_from">
                                                     <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" selected>10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                             </select>
                                                    -
                                            <select class="custom-select-reg ml-2" name="wednesday_to">
                                                     <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM" selected>1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM">10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                            </select>
                                                <!-- Time select code -->
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" id="customCheck104" name="days[]" value="thursday" checked>
                                                <label class="custom-control-label mr-4 pr-3" for="customCheck104">Thursday</label>
                                                <!-- Time select code -->                                             
                                                <select class="custom-select-reg ml-5 mr-2" name="thursday_from">
                                                <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM">10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM" selected>11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                             </select>
                                                    -
                                            <select class="custom-select-reg ml-2" name="thursday_to">
                                            <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM" selected>7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" >10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                            </select>
                                                <!-- Time select code -->
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" id="customCheck105" name="days[]" value="friday" checked>
                                                <label class="custom-control-label mr-5 pr-3" for="customCheck105">Friday</label>
                                                <!-- Time select code -->
                                                <select class="custom-select-reg ml-5 mr-2" name="friday_from">
                                                <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM" selected>5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM">10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM">2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                             </select>
                                                    -
                                            <select class="custom-select-reg ml-2" name="friday_to">
                                            <option value="1:00 AM">1:00 AM</option>
                                                     <option value="1:30 AM">1:30 AM</option>
                                                     <option value="2:00 AM">2:00 AM</option>
                                                     <option value="2:30 AM">2:30 AM</option>
                                                     <option value="3:00 AM">3:00 AM</option>
                                                     <option value="3:30 AM">3:30 AM</option>
                                                     <option value="4:00 AM">4:00 AM</option>
                                                     <option value="4:30 AM">4:30 AM</option>
                                                     <option value="5:00 AM">5:00 AM</option>
                                                     <option value="5:30 AM">5:30 AM</option>
                                                     <option value="6:00 AM">6:00 AM</option>
                                                     <option value="6:30 AM">6:30 AM</option>
                                                     <option value="7:00 AM">7:00 AM</option>
                                                     <option value="7:30 AM">7:30 AM</option>
                                                     <option value="8:00 AM">8:00 AM</option>
                                                     <option value="8:30 AM">8:30 AM</option>
                                                     <option value="9:00 AM">9:00 AM</option>
                                                     <option value="9:30 AM">9:30 AM</option>
                                                     <option value="10:00 AM" >10:00 AM</option>
                                                     <option value="10:30 AM">10:30 AM</option>
                                                     <option value="11:00 AM">11:00 AM</option>
                                                     <option value="11:30 AM">11:30 AM</option>
                                                     <option value="12:00 AM">12:00 AM</option>
                                                     <option value="12:30 AM">12:30 AM</option>
                                                     <option value="1:00 AM">1:00 PM</option>
                                                     <option value="1:30 AM">1:30 PM</option>
                                                     <option value="2:00 AM">2:00 PM</option>
                                                     <option value="2:30 AM" selected>2:30 PM</option>
                                                     <option value="3:00 AM">3:00 PM</option>
                                                     <option value="3:30 AM">3:30 PM</option>
                                                     <option value="4:00 AM">4:00 PM</option>
                                                     <option value="4:30 AM">4:30 PM</option>
                                                     <option value="5:00 AM">5:00 PM</option>
                                                     <option value="5:30 AM">5:50 PM</option>
                                                     <option value="6:00 AM">6:00 PM</option>
                                                     <option value="6:30 AM">6:30 PM</option>
                                                     <option value="7:00 AM">7:00 PM</option>
                                                     <option value="7:30 AM">7:30 PM</option>
                                                     <option value="8:00 AM">8:00 PM</option>
                                                     <option value="8:30 AM">8:30 PM</option>
                                                     <option value="9:00 AM">9:00 PM</option>
                                                     <option value="9:30 AM">9:30 PM</option>
                                                     <option value="10:00 AM">10:00 PM</option>
                                                     <option value="10:30 AM">10:30 PM</option>
                                                     <option value="11:00 AM">11:00 PM</option>
                                                     <option value="11:30 AM">11:30 PM</option>
                                                     <option value="12:00 AM">12:00 PM</option>
                                                     <option value="12:30 AM">12:30 PM</option>
                                            </select>
                                                <!-- Time select code -->
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" id="customCheck106" name="days[]" value="saturday" checked>
                                                <label class="custom-control-label mr-5" for="customCheck106">Saturday</label>
                                                <span class="ml-5 pr-3 cl-gray">Closed</span>
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                            
                                            <div class="border-bottom custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" id="customCheck107" name="days[]" value="sunday" checked>
                                                <label class="custom-control-label mr-5 pr-3" for="customCheck107">Sunday</label>
                                                
                                                <span class="ml-5 pr-4 cl-gray">Closed</span>
                                                
                                                <button type="button" class="close close-reg" aria-label="Close" onclick="$(this).siblings('input').removeAttr('checked');"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                        </div>
                                        <div class="modal-footer m-auto border-0">
                                          <button type="button" onclick="$('.close2').click();" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save </button>
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
    
        <div id="specialist-html" style="display: none;">
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
            <div class="pt-4 f-14 cl-gray text-center">
                <p class="mb-1">
                    By Sigining up I agree the
                    <span ><a href="#" class="cl-3AC574">terms and conditions </a> </span> and
                    <span ><a href="#" class="cl-3AC574">privacy policy </a> </span>
                </p>
            </div>
            <div class="text-center">
                <h6 class="border-bottom m-0 mb-5 pr-4 pb-2 cl-gray f-14">
                    Message & Data Rates may Apply
                </h6>
            </div>

        </div>

        <div id="client-html" style="display: none;">
            
            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></span>
                <span class="w-75"><input type="text" class="form-control border-0" placeholder="Enter your name" id="client-name" name="name" aria-label="" aria-describedby="basic-addon1" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                <span class="w-75"><input type="email" class="form-control border-0" placeholder="Enter your email" id="client-email" aria-label="" aria-describedby="basic-addon1" name="email" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/phone-8.png') }}" alt="" /></span>
                <span class="w-75"> <input type="text" class="form-control border-0" placeholder="What is your phone number" name="client_phone" id="client-phone" aria-label="" aria-describedby="basic-addon1" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                <span class="w-75"><input type="password" class="form-control border-0" placeholder="Enter your password" name="password" id="client-password" aria-label="" aria-describedby="basic-addon1" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                <span class="w-75"><input type="password" class="form-control border-0" placeholder="Confirm your password" name="password_confirmation" id="client_confirm_password" aria-label="" aria-describedby="basic-addon1" /></span>
            </div>

            <input type="button" class="btn bg-3AC574 w-100 mt-3 pt-2 pb-2  text-white btnstep client-step1" value="Creating Account" />
            <div class="row">
                <div class="col-md-12 pt-4 alerMsg" style="display: none;">
                    <div class="alert alert-success">You have registered successfully</div>
                </div>
            </div>
            <div class="pt-4 f-14 cl-gray text-center">
                <p class="mb-1">
                    By Sigining up I agree the
                    <span ><a href="#" class="cl-3AC574">terms and conditions </a> </span> and
                    <span ><a href="#" class="cl-3AC574">privacy policy </a> </span>
                </p>
            </div>
            <div class="text-center">
                <h6 class="border-bottom m-0 mb-5 pr-4 pb-2 cl-gray f-14">
                    Message & Data Rates may Apply
                </h6>
            </div>

        </div>

        <div id="stripe-html" style="display:none;">
            <div class="input-group mb-3 border-input pt-3 mt-3">
                <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                <span><input type="text" id="payment_name" class="form-control border-0" placeholder="Enter your name" aria-label="" aria-describedby="basic-addon1" name="payment_name" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                <span><input type="text" id="payment_phone" class="form-control border-0" placeholder="Enter your phone" aria-label="" aria-describedby="basic-addon1" name="payment_phone" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                <span><input type="date" id="payment_date_birth" class="form-control border-0" placeholder="" aria-label="" aria-describedby="basic-addon1" name="payment_birth_date" /></span>
            </div>

            <div class="input-group mb-3 border-input pt-3">
                <span><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></span>
                <span><input type="number" class="form-control border-0" placeholder="Last 4 Digits of SSN (for US only)" id="payment_ssn" aria-label="" aria-describedby="basic-addon1" name="payment_ssn" /></span>
            </div>
        </div>

        <div id="other-html" style="display:none;">
            <div class="input-group mb-3 border-input pt-4 mb-4 mt-5">
                <span><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></span>
                <span><input type="email" id="payment_email" class="form-control border-0" placeholder="Enter your payment method email" aria-label="" aria-describedby="basic-addon1" name="payment_email" /></span>
            </div>                        
        </div>

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
setInterval(() => {
    let meCheck = false;
    $.each($('.days'),function(){
        if($(this).is(':checked'))
        {
            meCheck=true;
        }
    });
    if(meCheck){
        let allChecked = document.getElementById('select_opening_hours');
            allChecked.placeholder = "Completed";
    }
    else{
        let notChecked = document.getElementById('select_opening_hours');
            notChecked.placeholder = "Not Completed";
    }

}, 1000);


</script>



        <script>

            const btnClicK =(className,parentClass ,txtLeft)=>{
                  let v =  $('.white-dot')
                 $('.left-text').html(txtLeft);
                  v.addClass(className);
                  v.siblings().addClass(parentClass);
                }
            const btnClicKBack =(removeClass,removeParentClass,className,parentClass ,txtLeft)=>{
                  let v =  $('.white-dot')
                 $('.left-text').html(txtLeft);
                  v.removeClass(removeClass);
                  v.siblings().removeClass(removeParentClass);
                  v.addClass(className);
                }

            const radio = (ele) => {

                $(ele).parent().addClass('bg-3AC574');
                $(ele).parent().siblings().removeClass('bg-3AC574');
                $(ele).parent().siblings().find('label').removeClass('text-white');
                // $(ele).siblings().removeClass('text-white');
                $(ele).siblings().addClass('text-white');
                if($(ele).val()=='client')
                {
                    btnClicK('dot-100','width-100','No Credit Cards. <br> No Commitments <br> It takes only 2 minutes.');
                    $('.first-step-html-change').html(document.getElementById('client-html').innerHTML);

                }else if($(ele).val()=='specialist')
                {
                    btnClicKBack('dot-100','width-100','dot-0','width-0','No Credit Cards. <br> No Commitments <br> It takes only 2 minutes.')
                    $('.first-step-html-change').html(document.getElementById('specialist-html').innerHTML);
                }

            }

            const paymentRadio = (ele) => {

                $(ele).parent().addClass('bg-3AC574');
                $(ele).parent().siblings().removeClass('bg-3AC574');
                $(ele).parent().siblings().find('label').removeClass('text-white');
                // $(ele).siblings().removeClass('text-white');
                $(ele).siblings().addClass('text-white');

                if($(ele).val()=='stripe')
                {
                    $('#payment_selection_html').html(document.getElementById('stripe-html').innerHTML);

                }else
                {
                    
                    $('#payment_selection_html').html(document.getElementById('other-html').innerHTML);
                }

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

            function selectFieldValidate(id)
            {
                if($(id).val() ==null)
                {
                    $('#select_category').addClass('placeholder-color-change');
                    $('#select_category').parent('span').parent('div').removeClass('border-input');
                    $('#select_category').parent('span').parent('div').css("border-bottom" ,"1px solid #e91e63");
                    return false;
                }
                $('#select_category').removeClass('placeholder-color-change');
                $('#select_category').parent('span').parent('div').css("border-bottom" ,"1px solid #3ac574");
                return true;
            }

            function checkboxFieldValidate(id)
            {
                let chk = false;
                $.each(id,function(){
                    if($(this).is(':checked'))
                    {
                        chk = true;
                    }
                });

                if(!chk)
                {
                    $('#select_opening_hours').addClass('placeholder-color-change');
                    $('#select_opening_hours').parent('div').removeClass('border-input');
                    $('#select_opening_hours').parent('div').css("border-bottom" ,"1px solid #e91e63");
                    $('#select_opening_hours').parent('div').siblings('label').children('span').css("color" ," #e91e63");
                    return chk;
                }

                $('#select_opening_hours').removeClass('placeholder-color-change');
                $('#select_opening_hours').parent('div').css("border-bottom" ,"1px solid #3ac574");
                $('#select_opening_hours').parent('div').siblings('label').children('span').css("color" ,"gray");
                return chk;
            }

            function passwordFieldValidate(id,confirmID)
            {
                if($(id).val() =='')
                {
                    $(id).addClass('placeholder-color-change');
                    $(id).parent('span').parent('div').removeClass('border-input');
                    $(id).parent('span').parent('div').css("border-bottom" ,"1px solid #e91e63");
                    return false;
                }
                else if($(id).val() !='' && $(id).val().length <8)
                {
                    $(id).addClass('placeholder-color-change');
                    $(id).parent('span').parent('div').removeClass('border-input');
                    $(id).parent('span').parent('div').css("border-bottom" ,"1px solid #e91e63");
                    return false;
                }

                else if($(id).val() !='' && $(id).val() != $(confirmID).val())
                {
                    $(id).addClass('placeholder-color-change');
                    $(id).parent('span').parent('div').removeClass('border-input');
                    $(id).parent('span').parent('div').css("border-bottom" ,"1px solid #e91e63");
                    return false;
                }
                else if($(id).val() !='' && $(id).val() == $(confirmID).val() && $(id).val().length >=8)
                {
                    $(id).removeClass('placeholder-color-change');
                    $(id).parent('span').parent('div').css("border-bottom" ,"1px solid #3ac574");
                    return true;
                }
            }

            function getSubCategories(ele)
            {
                let id = $(ele).val();
                $.ajax({
                    url:"{{ route('get.sub_categories') }}",
                    type:"get",
                    data:{id:id},
                    success:function(data)
                    {
                        $('#sub_categories').html(data);

                    }
                });
            }

            function ajaxCommonCode(fd)
            {
                $.ajax({
                    url:"{{ route('register') }}",
                    type:"post",
                    processData: false, 
                    contentType: false,
                    // data: $('#add-client-form').serialize(),
                    data: fd,
                    success:function(data)
                    {
                        $('.alerMsg').show();
                        setInterval(function(){
                            window.location = '{{ route('index') }}';
                        },2000);

                    },
                    error:function(request,status,error)
                    {
                        console.log(request.responseText);
                    }
                });
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
            

        </script>

        <script>
           
            $(document.body).on("click", "input.client-step1", function () {
                // $(this).parent("div").siblings("span.inputBtn").click();
                if(inptFieldValidate($('#client-name')) && inptFieldValidate($('#client-email')) && inptFieldValidate($('#client-phone')) && passwordFieldValidate($('#client-password'),$('#client_confirm_password')))
                {
                    // $('#registerForm').submit();
                    var myform = document.getElementById("registerForm");
                    var fd = new FormData(myform);
                    fd.append("_token","{{ csrf_token() }}");
                    ajaxCommonCode(fd);
                }
            });

            $(document.body).on("click", "input.step1", function () {
                // $(this).parent("div").siblings("span.inputBtn").click();
                if(inptFieldValidate($('#business_name')) && inptFieldValidate($('#name')) && inptFieldValidate($('#email')) && passwordFieldValidate($('#password'),$('#confirm_password')))
                {$(this).parent("div").siblings("span.inputBtn").click();}
            });

            $(document.body).on("click", "input.step2", function () {
                let stepSecond = false;
                // $(this).parent("div").siblings("span.inputBtn").click();

                if(inptFieldValidate($('#business_phone')) && inptFieldValidate($('#business_location')) && selectFieldValidate($('.main-category')) && checkboxFieldValidate($('.checkbxCheck')))
                {$(this).parent("div").siblings("span.inputBtn").click();}

            });

            $(document.body).on("click", "input.backstep2", function () {
                
                $(this).parent("div").siblings("span.previous").click();
            });

            $(document.body).on("click", "input.step3", function () {
                console.log($('input[name="payment_method"]').val());
                let method_chk = false;
                if($('input[name="payment_method"]:checked').val()=='stripe')
                {
                    if(inptFieldValidate($('#payment_name')) && inptFieldValidate($('#payment_phone')) && inptFieldValidate($('#payment_birth_date')))
                    {
                        method_chk = true;
                    }
                }
                else{
                    if(inptFieldValidate($('#payment_email')))
                    {
                        method_chk = true;
                    }
                }
                if(method_chk)
                {
                    var myform = document.getElementById("registerForm");
                    var fd = new FormData(myform);
                    fd.append("_token","{{ csrf_token() }}");
                    let days = $(".days:checked").map(function(){return $(this).val();}).get();
                    fd.append('days',days);
                    ajaxCommonCode(fd);
                }
                // if(inptFieldValidate($('#payment_email')) && inptFieldValidate($('#payment_password')))
                // {
                    // $('#registerForm').submit();
                    // var myform = document.getElementById("registerForm");
                    // var fd = new FormData(myform);
                    // fd.append("_token","{{ csrf_token() }}");
                    // let days = $(".days:checked").map(function(){return $(this).val();}).get();
                    // let from = $(".from_time").map(function(){return $(this).val();}).get();
                    // let to = $(".to_time").map(function(){return $(this).val();}).get();
                    // $.each(days,function(i,v){
                    //     console.log(v);
                    // });
                    // return false;
                    // fd.append('days',days);
                    // fd.append('from',from);
                    // fd.append('to',to);
                    // ajaxCommonCode(fd);
                // }
                // let v = $(this).parent("div").siblings("span.inputBtn").click();
            });
        </script>
		

	@endsection

{{-- footer section end --}}

