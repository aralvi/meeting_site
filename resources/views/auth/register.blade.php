@extends('layouts.auth.app')
@section('title','Register')
{{-- head start --}}

	@section('extra-css')
	   <style type="text/css">
            .placeholder-color-change::-webkit-input-placeholder {
                color: #e91e63;
            }
            .country-select{ border: none!important;  }

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
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/register_logo.png') }}" alt="" class="img-fluid" /></a>
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
                                    <div class="">Already Registered?</div>
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
                                    <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap">
										<div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                                        <div class="w-100">
                                            <input type="text" class="w-100 form-control border-0" placeholder="Enter username" name="username" id="username" onkeyup="usernamePublicProfile(this);" aria-label="" aria-describedby="basic-addon1"/>
                                        </div>
                                    </div>
                                    <label class="cl-3AC574 m-0 pt-3 pb-1">
                                        <span><img src="{{ asset('assets/frontend/images/Path 122.png') }}" alt="" /></span>
                                        <span class="pl-1 cl-3AC574 h6">Link to your Public Profile</span>
                                    </label>
                                    <div class="input-group mb-3 border-input pt-0 pl-3">
                                        <input type="text" class="form-control border-0 pl-4 pt-0" placeholder="Link.public.profile" name="public_profile" id="public_profile" aria-label="" aria-describedby="basic-addon1" readonly="" />
                                    </div>
                                    <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                        <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                                        <div class="w-100"><input type="text" class="w-100 form-control border-0" placeholder="Enter your full name" id="name" name="name" aria-label="" aria-describedby="basic-addon1" /></div>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                        <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                                        <div class="w-100"><input type="email" class="form-control border-0 w-100" placeholder="Enter your email" id="email" aria-label="" aria-describedby="basic-addon1" name="email" /></div>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                        <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                                        <div class="w-100"><input type="password" class="w-100 form-control border-0" placeholder="Enter your password" name="password" id="password" aria-label="" aria-describedby="basic-addon1" /></div>
                                    </div>
                                    <p class="text-danger d-none" id="password-error"></p>

                                    <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                        <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                                        <div class="w-100"><input type="password" class="form-control border-0 w-100" placeholder="Confirm your password" name="password_confirmation" id="confirm_password" aria-label="" aria-describedby="basic-addon1" /></div>
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
                                    <div class="">Already Registered?</div>
                                    <div class="pr-4 h5"><a href="{{route('login')}}" class="cl-3AC574">Login</a></div>
                                </div>
                                <div class="h1 text-center cl-3AC574 pt-4">Help Clients find You.</div>
                                <div class="pl-5 pr-5">
                                    <div class="input-group mb-3 border-input pt-5 d-flex flex-nowrap">
                                        <div><img src="{{ asset('assets/frontend/images/phone-8.png') }}" alt="" /></div>
                                        <div class="w-100"> <input type="text" class="form-control border-0" placeholder="What is your business phone number" name="business_phone" id="business_phone" aria-label="" aria-describedby="basic-addon1" /></div>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap">
                                        <div><img src="{{ asset('assets/frontend/images/location.png') }}" alt="" /></div>
                                        <div class="w-100">
                                            <select id="country" name="country" class="form-control country-select w-100" >
                                               <option value="Afganistan">Afghanistan</option>
                                               <option value="Albania">Albania</option>
                                               <option value="Algeria">Algeria</option>
                                               <option value="American Samoa">American Samoa</option>
                                               <option value="Andorra">Andorra</option>
                                               <option value="Angola">Angola</option>
                                               <option value="Anguilla">Anguilla</option>
                                               <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                               <option value="Argentina">Argentina</option>
                                               <option value="Armenia">Armenia</option>
                                               <option value="Aruba">Aruba</option>
                                               <option value="Australia">Australia</option>
                                               <option value="Austria">Austria</option>
                                               <option value="Azerbaijan">Azerbaijan</option>
                                               <option value="Bahamas">Bahamas</option>
                                               <option value="Bahrain">Bahrain</option>
                                               <option value="Bangladesh">Bangladesh</option>
                                               <option value="Barbados">Barbados</option>
                                               <option value="Belarus">Belarus</option>
                                               <option value="Belgium">Belgium</option>
                                               <option value="Belize">Belize</option>
                                               <option value="Benin">Benin</option>
                                               <option value="Bermuda">Bermuda</option>
                                               <option value="Bhutan">Bhutan</option>
                                               <option value="Bolivia">Bolivia</option>
                                               <option value="Bonaire">Bonaire</option>
                                               <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                               <option value="Botswana">Botswana</option>
                                               <option value="Brazil">Brazil</option>
                                               <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                               <option value="Brunei">Brunei</option>
                                               <option value="Bulgaria">Bulgaria</option>
                                               <option value="Burkina Faso">Burkina Faso</option>
                                               <option value="Burundi">Burundi</option>
                                               <option value="Cambodia">Cambodia</option>
                                               <option value="Cameroon">Cameroon</option>
                                               <option value="Canada">Canada</option>
                                               <option value="Canary Islands">Canary Islands</option>
                                               <option value="Cape Verde">Cape Verde</option>
                                               <option value="Cayman Islands">Cayman Islands</option>
                                               <option value="Central African Republic">Central African Republic</option>
                                               <option value="Chad">Chad</option>
                                               <option value="Channel Islands">Channel Islands</option>
                                               <option value="Chile">Chile</option>
                                               <option value="China">China</option>
                                               <option value="Christmas Island">Christmas Island</option>
                                               <option value="Cocos Island">Cocos Island</option>
                                               <option value="Colombia">Colombia</option>
                                               <option value="Comoros">Comoros</option>
                                               <option value="Congo">Congo</option>
                                               <option value="Cook Islands">Cook Islands</option>
                                               <option value="Costa Rica">Costa Rica</option>
                                               <option value="Cote DIvoire">Cote DIvoire</option>
                                               <option value="Croatia">Croatia</option>
                                               <option value="Cuba">Cuba</option>
                                               <option value="Curaco">Curacao</option>
                                               <option value="Cyprus">Cyprus</option>
                                               <option value="Czech Republic">Czech Republic</option>
                                               <option value="Denmark">Denmark</option>
                                               <option value="Djibouti">Djibouti</option>
                                               <option value="Dominica">Dominica</option>
                                               <option value="Dominican Republic">Dominican Republic</option>
                                               <option value="East Timor">East Timor</option>
                                               <option value="Ecuador">Ecuador</option>
                                               <option value="Egypt">Egypt</option>
                                               <option value="El Salvador">El Salvador</option>
                                               <option value="Equatorial Guinea">Equatorial Guinea</option>
                                               <option value="Eritrea">Eritrea</option>
                                               <option value="Estonia">Estonia</option>
                                               <option value="Ethiopia">Ethiopia</option>
                                               <option value="Falkland Islands">Falkland Islands</option>
                                               <option value="Faroe Islands">Faroe Islands</option>
                                               <option value="Fiji">Fiji</option>
                                               <option value="Finland">Finland</option>
                                               <option value="France">France</option>
                                               <option value="French Guiana">French Guiana</option>
                                               <option value="French Polynesia">French Polynesia</option>
                                               <option value="French Southern Ter">French Southern Ter</option>
                                               <option value="Gabon">Gabon</option>
                                               <option value="Gambia">Gambia</option>
                                               <option value="Georgia">Georgia</option>
                                               <option value="Germany">Germany</option>
                                               <option value="Ghana">Ghana</option>
                                               <option value="Gibraltar">Gibraltar</option>
                                               <option value="Great Britain">Great Britain</option>
                                               <option value="Greece">Greece</option>
                                               <option value="Greenland">Greenland</option>
                                               <option value="Grenada">Grenada</option>
                                               <option value="Guadeloupe">Guadeloupe</option>
                                               <option value="Guam">Guam</option>
                                               <option value="Guatemala">Guatemala</option>
                                               <option value="Guinea">Guinea</option>
                                               <option value="Guyana">Guyana</option>
                                               <option value="Haiti">Haiti</option>
                                               <option value="Hawaii">Hawaii</option>
                                               <option value="Honduras">Honduras</option>
                                               <option value="Hong Kong">Hong Kong</option>
                                               <option value="Hungary">Hungary</option>
                                               <option value="Iceland">Iceland</option>
                                               <option value="Indonesia">Indonesia</option>
                                               <option value="India">India</option>
                                               <option value="Iran">Iran</option>
                                               <option value="Iraq">Iraq</option>
                                               <option value="Ireland">Ireland</option>
                                               <option value="Isle of Man">Isle of Man</option>
                                               <option value="Israel">Israel</option>
                                               <option value="Italy">Italy</option>
                                               <option value="Jamaica">Jamaica</option>
                                               <option value="Japan">Japan</option>
                                               <option value="Jordan">Jordan</option>
                                               <option value="Kazakhstan">Kazakhstan</option>
                                               <option value="Kenya">Kenya</option>
                                               <option value="Kiribati">Kiribati</option>
                                               <option value="Korea North">Korea North</option>
                                               <option value="Korea Sout">Korea South</option>
                                               <option value="Kuwait">Kuwait</option>
                                               <option value="Kyrgyzstan">Kyrgyzstan</option>
                                               <option value="Laos">Laos</option>
                                               <option value="Latvia">Latvia</option>
                                               <option value="Lebanon">Lebanon</option>
                                               <option value="Lesotho">Lesotho</option>
                                               <option value="Liberia">Liberia</option>
                                               <option value="Libya">Libya</option>
                                               <option value="Liechtenstein">Liechtenstein</option>
                                               <option value="Lithuania">Lithuania</option>
                                               <option value="Luxembourg">Luxembourg</option>
                                               <option value="Macau">Macau</option>
                                               <option value="Macedonia">Macedonia</option>
                                               <option value="Madagascar">Madagascar</option>
                                               <option value="Malaysia">Malaysia</option>
                                               <option value="Malawi">Malawi</option>
                                               <option value="Maldives">Maldives</option>
                                               <option value="Mali">Mali</option>
                                               <option value="Malta">Malta</option>
                                               <option value="Marshall Islands">Marshall Islands</option>
                                               <option value="Martinique">Martinique</option>
                                               <option value="Mauritania">Mauritania</option>
                                               <option value="Mauritius">Mauritius</option>
                                               <option value="Mayotte">Mayotte</option>
                                               <option value="Mexico">Mexico</option>
                                               <option value="Midway Islands">Midway Islands</option>
                                               <option value="Moldova">Moldova</option>
                                               <option value="Monaco">Monaco</option>
                                               <option value="Mongolia">Mongolia</option>
                                               <option value="Montserrat">Montserrat</option>
                                               <option value="Morocco">Morocco</option>
                                               <option value="Mozambique">Mozambique</option>
                                               <option value="Myanmar">Myanmar</option>
                                               <option value="Nambia">Nambia</option>
                                               <option value="Nauru">Nauru</option>
                                               <option value="Nepal">Nepal</option>
                                               <option value="Netherland Antilles">Netherland Antilles</option>
                                               <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                               <option value="Nevis">Nevis</option>
                                               <option value="New Caledonia">New Caledonia</option>
                                               <option value="New Zealand">New Zealand</option>
                                               <option value="Nicaragua">Nicaragua</option>
                                               <option value="Niger">Niger</option>
                                               <option value="Nigeria">Nigeria</option>
                                               <option value="Niue">Niue</option>
                                               <option value="Norfolk Island">Norfolk Island</option>
                                               <option value="Norway">Norway</option>
                                               <option value="Oman">Oman</option>
                                               <option value="Pakistan">Pakistan</option>
                                               <option value="Palau Island">Palau Island</option>
                                               <option value="Palestine">Palestine</option>
                                               <option value="Panama">Panama</option>
                                               <option value="Papua New Guinea">Papua New Guinea</option>
                                               <option value="Paraguay">Paraguay</option>
                                               <option value="Peru">Peru</option>
                                               <option value="Phillipines">Philippines</option>
                                               <option value="Pitcairn Island">Pitcairn Island</option>
                                               <option value="Poland">Poland</option>
                                               <option value="Portugal">Portugal</option>
                                               <option value="Puerto Rico">Puerto Rico</option>
                                               <option value="Qatar">Qatar</option>
                                               <option value="Republic of Montenegro">Republic of Montenegro</option>
                                               <option value="Republic of Serbia">Republic of Serbia</option>
                                               <option value="Reunion">Reunion</option>
                                               <option value="Romania">Romania</option>
                                               <option value="Russia">Russia</option>
                                               <option value="Rwanda">Rwanda</option>
                                               <option value="St Barthelemy">St Barthelemy</option>
                                               <option value="St Eustatius">St Eustatius</option>
                                               <option value="St Helena">St Helena</option>
                                               <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                               <option value="St Lucia">St Lucia</option>
                                               <option value="St Maarten">St Maarten</option>
                                               <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                               <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                               <option value="Saipan">Saipan</option>
                                               <option value="Samoa">Samoa</option>
                                               <option value="Samoa American">Samoa American</option>
                                               <option value="San Marino">San Marino</option>
                                               <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                               <option value="Saudi Arabia">Saudi Arabia</option>
                                               <option value="Senegal">Senegal</option>
                                               <option value="Seychelles">Seychelles</option>
                                               <option value="Sierra Leone">Sierra Leone</option>
                                               <option value="Singapore">Singapore</option>
                                               <option value="Slovakia">Slovakia</option>
                                               <option value="Slovenia">Slovenia</option>
                                               <option value="Solomon Islands">Solomon Islands</option>
                                               <option value="Somalia">Somalia</option>
                                               <option value="South Africa">South Africa</option>
                                               <option value="Spain">Spain</option>
                                               <option value="Sri Lanka">Sri Lanka</option>
                                               <option value="Sudan">Sudan</option>
                                               <option value="Suriname">Suriname</option>
                                               <option value="Swaziland">Swaziland</option>
                                               <option value="Sweden">Sweden</option>
                                               <option value="Switzerland">Switzerland</option>
                                               <option value="Syria">Syria</option>
                                               <option value="Tahiti">Tahiti</option>
                                               <option value="Taiwan">Taiwan</option>
                                               <option value="Tajikistan">Tajikistan</option>
                                               <option value="Tanzania">Tanzania</option>
                                               <option value="Thailand">Thailand</option>
                                               <option value="Togo">Togo</option>
                                               <option value="Tokelau">Tokelau</option>
                                               <option value="Tonga">Tonga</option>
                                               <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                               <option value="Tunisia">Tunisia</option>
                                               <option value="Turkey">Turkey</option>
                                               <option value="Turkmenistan">Turkmenistan</option>
                                               <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                               <option value="Tuvalu">Tuvalu</option>
                                               <option value="Uganda">Uganda</option>
                                               <option value="United Kingdom">United Kingdom</option>
                                               <option value="Ukraine">Ukraine</option>
                                               <option value="United Arab Erimates">United Arab Emirates</option>
                                               <option value="United States of America">United States of America</option>
                                               <option value="Uraguay">Uruguay</option>
                                               <option value="Uzbekistan">Uzbekistan</option>
                                               <option value="Vanuatu">Vanuatu</option>
                                               <option value="Vatican City State">Vatican City State</option>
                                               <option value="Venezuela">Venezuela</option>
                                               <option value="Vietnam">Vietnam</option>
                                               <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                               <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                               <option value="Wake Island">Wake Island</option>
                                               <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                               <option value="Yemen">Yemen</option>
                                               <option value="Zaire">Zaire</option>
                                               <option value="Zambia">Zambia</option>
                                               <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap" >
                                        <div><img src="{{ asset('assets/frontend/images/selection-8 (1).png') }}" alt="" /></div>
                                        <div><input type="text" class="form-control border-0" placeholder="Select Category" id="select_category" aria-label="" aria-describedby="basic-addon1" data-toggle="modal" data-target="#exampleModal" /></div>
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
                                <span data-page="2" id="" class="inputBtn next action-button" onclick="btnClicK('dot-100','width-100','Please choose how you want to receive payouts.')"></span>
                                <span data-page="1" id="" class="previous action-button btn-step-back"  onclick="btnClicKBack('dot-50','width-50','dot-0','width-0','No Credit Cards. <br> No Commitments <br> It takes only 2 minutes.')"></span>
                                
                            </fieldset>

                            <fieldset>
                                <div class="text-right pt-4">
                                    <div class="">Already Registered?</div>
                                    <div class="pr-4 cl-3AC574 h5"><a href="{{route('login')}}" class="cl-3AC574">Login</a></div>
                                </div>

                                <div class="h1 text-center cl-3AC574 pt-2">Enter Banking Information</div>
                                <div class="">
                                    <div class="row pt-2">
                                        <div class="col-md-12 d-flex text-center pl-5">
                                            <p class="text-warning">Note: Stripe is only for US users.</p>
                                        </div>
                                    </div>

                                    <div class="row pt-2">
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
                                        <div class="pt-3  text-center"><img src="{{ asset('assets/frontend/images/Artboard2.png') }}" class="w-116"></div>
                                        <div class="input-group mb-3 border-input pt-3 mt-3 d-flex flex-nowrap">
                                            <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                                            <div class="w-100"><input type="text" id="payment_first_name" class="w-100 form-control border-0" placeholder="Enter your first name" aria-label="" aria-describedby="basic-addon1" name="payment_first_name" /></div>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3 mt-3 d-flex flex-nowrap">
                                            <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                                            <div class="w-100"><input type="text" id="payment_last_name" class="w-100 form-control border-0" placeholder="Enter your last name" aria-label="" aria-describedby="basic-addon1" name="payment_last_name" /></div>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                            <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                                            <div class="w-100"><input type="number" id="account_number" class="w-100 form-control border-0" placeholder="Enter your account number" aria-label="" aria-describedby="basic-addon1" name="account_number" /></div>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                            <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                                            <div class="w-100"><input type="number" id="routing_number" class="w-100 form-control border-0" placeholder="Enter your routing number" aria-label="" aria-describedby="basic-addon1" name="routing_number" /></div>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                            <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                                            <div><input type="text" id="payment_birth_date" class="form-control border-0" placeholder="Date of Birth" aria-label="" aria-describedby="basic-addon1" name="payment_birth_date" /></div>
                                        </div>

                                        <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                                            <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                                            <div class="w-100"><input type="number" class="w-100 form-control border-0" placeholder="SSN last four" id="payment_ssn" aria-label="" aria-describedby="basic-addon1" name="payment_ssn" /></div>
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
                                        <div class="row pt-2">
                                            <div class="col-md-12 d-flex text-center pl-5">
                                                <p class="text-warning">Note: All days are closed if you want to open then check the respective day</p>
                                            </div>
                                        </div>

                                        <div class="pl-4 mt-2 ">
                                            <div class="border-bottom custom-control custom-checkbox ">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days " onchange="dayOpened(this);"  id="customCheck101" name="days[]" value="monday">
                                                <label class="custom-control-label mr-5" for="customCheck101">Monday</label> 
                                                <!-- Time select code -->
                                                <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="monday_from">
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
                                                <select class="custom-select-reg d-done ml-2"  style="display:none" name="monday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                                <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck102" name="days[]" value="tuesday">
                                                <label class="custom-control-label mr-5" for="customCheck102">Tuesday</label>
                                                <!-- Time select code -->
                                                <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="tuesday_from">
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
                                            <select class="custom-select-reg d-done ml-2"  style="display:none" name="tuesday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                                <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck103" name="days[]" value="wednesday">
                                                <label class="custom-control-label mr-3" for="customCheck103">Wednesday</label>
                                                <!-- Time select code -->
                                               <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="wednesday_from">
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
                                            <select class="custom-select-reg d-done ml-2"  style="display:none" name="wednesday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                                <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck104" name="days[]" value="thursday">
                                                <label class="custom-control-label mr-4 pr-3" for="customCheck104">Thursday</label>
                                                <!-- Time select code -->                                             
                                                <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="thursday_from">
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
                                            <select class="custom-select-reg d-done ml-2"  style="display:none" name="thursday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                                <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck105" name="days[]" value="friday">
                                                <label class="custom-control-label mr-5 pr-3" for="customCheck105">Friday</label>
                                                <!-- Time select code -->
                                                <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="friday_from">
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
                                            <select class="custom-select-reg d-done ml-2"  style="display:none" name="friday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                                <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
                                            </div>

                                            <div class="border-bottom mt-3 custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck106" name="days[]" value="saturday">
                                                <label class="custom-control-label mr-5" for="customCheck106">Saturday</label>
                                                <!-- Time select code -->
                                                <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="saturday_from">
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
                                               <select class="custom-select-reg d-done ml-2"  style="display:none" name="saturday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                               <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
                                            </div>
                                            
                                            <div class="border-bottom custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck107" name="days[]" value="sunday">
                                                <label class="custom-control-label mr-5 pr-3" for="customCheck107">Sunday</label>
                                                <!-- Time select code -->
                                                <select class="custom-select-reg d-done ml-5 mr-2"  style="display:none" name="sunday_from">
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
                                                <select class="custom-select-reg d-done ml-2"  style="display:none" name="sunday_to">
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
                                               <span class="ml-5 pr-4 cl-gray">Closed</span>
                                               <button type="button" class="close close-reg  d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button> 
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
            <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                <div class="w-100">
                    <input type="text" class="form-control border-0 w-100" placeholder="Enter username" name="username" id="username" onkeyup="usernamePublicProfile(this);" aria-label="" aria-describedby="basic-addon1"/>
                </div>
            </div>
            <label class="cl-3AC574 m-0 d-flex flex-nowrap pt-3">
                <div><img src="{{ asset('assets/frontend/images/Path 122.png') }}" alt="" /></div>
                <div class="pl-1 cl-3AC574 h6">Link to your Public Profile</div>
            </label>
            <div class="input-group mb-3 border-input pt-0 pl-3">
                <input type="text" class="form-control border-0 pl-4 pt-0" placeholder="Link.public.profile" name="public_profile" id="public_profile" aria-label="" aria-describedby="basic-addon1" readonly="" />
            </div>
            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                <div class="w-75"><input type="text" class="form-control border-0" placeholder="Enter your name" id="name" name="name" aria-label="" aria-describedby="basic-addon1" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-75"><input type="email" class="form-control border-0" placeholder="Enter your email" id="email" aria-label="" aria-describedby="basic-addon1" name="email" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                <div class="w-75"><input type="password" class="form-control border-0" placeholder="Enter your password" name="password" id="password" aria-label="" aria-describedby="basic-addon1" /></div>
            </div>
            <p class="text-danger d-none" id="password-error"></p>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                <div class="w-100"><input type="password" class="w-100 form-control border-0" placeholder="Confirm your password" name="password_confirmation" id="confirm_password" aria-label="" aria-describedby="basic-addon1" /></div>
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
            <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                <div class="w-100">
                    <input type="text" class="form-control border-0 w-100" placeholder="Enter username" name="username" id="username" onkeyup="usernamePublicProfile(this);" aria-label="" aria-describedby="basic-addon1"/>
                </div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                <div class="w-75"><input type="text" class="form-control border-0" placeholder="Enter your full name" id="client-name" name="name" aria-label="" aria-describedby="basic-addon1" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-100"><input type="email" class="form-control border-0 w-100" placeholder="Enter your email" id="client-email" aria-label="" aria-describedby="basic-addon1" name="email" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-100"
                >
                    <select id="country" name="country" class="form-control country-select w-100"  >
                       <option value="Afganistan">Afghanistan</option>
                       <option value="Albania">Albania</option>
                       <option value="Algeria">Algeria</option>
                       <option value="American Samoa">American Samoa</option>
                       <option value="Andorra">Andorra</option>
                       <option value="Angola">Angola</option>
                       <option value="Anguilla">Anguilla</option>
                       <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                       <option value="Argentina">Argentina</option>
                       <option value="Armenia">Armenia</option>
                       <option value="Aruba">Aruba</option>
                       <option value="Australia">Australia</option>
                       <option value="Austria">Austria</option>
                       <option value="Azerbaijan">Azerbaijan</option>
                       <option value="Bahamas">Bahamas</option>
                       <option value="Bahrain">Bahrain</option>
                       <option value="Bangladesh">Bangladesh</option>
                       <option value="Barbados">Barbados</option>
                       <option value="Belarus">Belarus</option>
                       <option value="Belgium">Belgium</option>
                       <option value="Belize">Belize</option>
                       <option value="Benin">Benin</option>
                       <option value="Bermuda">Bermuda</option>
                       <option value="Bhutan">Bhutan</option>
                       <option value="Bolivia">Bolivia</option>
                       <option value="Bonaire">Bonaire</option>
                       <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                       <option value="Botswana">Botswana</option>
                       <option value="Brazil">Brazil</option>
                       <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                       <option value="Brunei">Brunei</option>
                       <option value="Bulgaria">Bulgaria</option>
                       <option value="Burkina Faso">Burkina Faso</option>
                       <option value="Burundi">Burundi</option>
                       <option value="Cambodia">Cambodia</option>
                       <option value="Cameroon">Cameroon</option>
                       <option value="Canada">Canada</option>
                       <option value="Canary Islands">Canary Islands</option>
                       <option value="Cape Verde">Cape Verde</option>
                       <option value="Cayman Islands">Cayman Islands</option>
                       <option value="Central African Republic">Central African Republic</option>
                       <option value="Chad">Chad</option>
                       <option value="Channel Islands">Channel Islands</option>
                       <option value="Chile">Chile</option>
                       <option value="China">China</option>
                       <option value="Christmas Island">Christmas Island</option>
                       <option value="Cocos Island">Cocos Island</option>
                       <option value="Colombia">Colombia</option>
                       <option value="Comoros">Comoros</option>
                       <option value="Congo">Congo</option>
                       <option value="Cook Islands">Cook Islands</option>
                       <option value="Costa Rica">Costa Rica</option>
                       <option value="Cote DIvoire">Cote DIvoire</option>
                       <option value="Croatia">Croatia</option>
                       <option value="Cuba">Cuba</option>
                       <option value="Curaco">Curacao</option>
                       <option value="Cyprus">Cyprus</option>
                       <option value="Czech Republic">Czech Republic</option>
                       <option value="Denmark">Denmark</option>
                       <option value="Djibouti">Djibouti</option>
                       <option value="Dominica">Dominica</option>
                       <option value="Dominican Republic">Dominican Republic</option>
                       <option value="East Timor">East Timor</option>
                       <option value="Ecuador">Ecuador</option>
                       <option value="Egypt">Egypt</option>
                       <option value="El Salvador">El Salvador</option>
                       <option value="Equatorial Guinea">Equatorial Guinea</option>
                       <option value="Eritrea">Eritrea</option>
                       <option value="Estonia">Estonia</option>
                       <option value="Ethiopia">Ethiopia</option>
                       <option value="Falkland Islands">Falkland Islands</option>
                       <option value="Faroe Islands">Faroe Islands</option>
                       <option value="Fiji">Fiji</option>
                       <option value="Finland">Finland</option>
                       <option value="France">France</option>
                       <option value="French Guiana">French Guiana</option>
                       <option value="French Polynesia">French Polynesia</option>
                       <option value="French Southern Ter">French Southern Ter</option>
                       <option value="Gabon">Gabon</option>
                       <option value="Gambia">Gambia</option>
                       <option value="Georgia">Georgia</option>
                       <option value="Germany">Germany</option>
                       <option value="Ghana">Ghana</option>
                       <option value="Gibraltar">Gibraltar</option>
                       <option value="Great Britain">Great Britain</option>
                       <option value="Greece">Greece</option>
                       <option value="Greenland">Greenland</option>
                       <option value="Grenada">Grenada</option>
                       <option value="Guadeloupe">Guadeloupe</option>
                       <option value="Guam">Guam</option>
                       <option value="Guatemala">Guatemala</option>
                       <option value="Guinea">Guinea</option>
                       <option value="Guyana">Guyana</option>
                       <option value="Haiti">Haiti</option>
                       <option value="Hawaii">Hawaii</option>
                       <option value="Honduras">Honduras</option>
                       <option value="Hong Kong">Hong Kong</option>
                       <option value="Hungary">Hungary</option>
                       <option value="Iceland">Iceland</option>
                       <option value="Indonesia">Indonesia</option>
                       <option value="India">India</option>
                       <option value="Iran">Iran</option>
                       <option value="Iraq">Iraq</option>
                       <option value="Ireland">Ireland</option>
                       <option value="Isle of Man">Isle of Man</option>
                       <option value="Israel">Israel</option>
                       <option value="Italy">Italy</option>
                       <option value="Jamaica">Jamaica</option>
                       <option value="Japan">Japan</option>
                       <option value="Jordan">Jordan</option>
                       <option value="Kazakhstan">Kazakhstan</option>
                       <option value="Kenya">Kenya</option>
                       <option value="Kiribati">Kiribati</option>
                       <option value="Korea North">Korea North</option>
                       <option value="Korea Sout">Korea South</option>
                       <option value="Kuwait">Kuwait</option>
                       <option value="Kyrgyzstan">Kyrgyzstan</option>
                       <option value="Laos">Laos</option>
                       <option value="Latvia">Latvia</option>
                       <option value="Lebanon">Lebanon</option>
                       <option value="Lesotho">Lesotho</option>
                       <option value="Liberia">Liberia</option>
                       <option value="Libya">Libya</option>
                       <option value="Liechtenstein">Liechtenstein</option>
                       <option value="Lithuania">Lithuania</option>
                       <option value="Luxembourg">Luxembourg</option>
                       <option value="Macau">Macau</option>
                       <option value="Macedonia">Macedonia</option>
                       <option value="Madagascar">Madagascar</option>
                       <option value="Malaysia">Malaysia</option>
                       <option value="Malawi">Malawi</option>
                       <option value="Maldives">Maldives</option>
                       <option value="Mali">Mali</option>
                       <option value="Malta">Malta</option>
                       <option value="Marshall Islands">Marshall Islands</option>
                       <option value="Martinique">Martinique</option>
                       <option value="Mauritania">Mauritania</option>
                       <option value="Mauritius">Mauritius</option>
                       <option value="Mayotte">Mayotte</option>
                       <option value="Mexico">Mexico</option>
                       <option value="Midway Islands">Midway Islands</option>
                       <option value="Moldova">Moldova</option>
                       <option value="Monaco">Monaco</option>
                       <option value="Mongolia">Mongolia</option>
                       <option value="Montserrat">Montserrat</option>
                       <option value="Morocco">Morocco</option>
                       <option value="Mozambique">Mozambique</option>
                       <option value="Myanmar">Myanmar</option>
                       <option value="Nambia">Nambia</option>
                       <option value="Nauru">Nauru</option>
                       <option value="Nepal">Nepal</option>
                       <option value="Netherland Antilles">Netherland Antilles</option>
                       <option value="Netherlands">Netherlands (Holland, Europe)</option>
                       <option value="Nevis">Nevis</option>
                       <option value="New Caledonia">New Caledonia</option>
                       <option value="New Zealand">New Zealand</option>
                       <option value="Nicaragua">Nicaragua</option>
                       <option value="Niger">Niger</option>
                       <option value="Nigeria">Nigeria</option>
                       <option value="Niue">Niue</option>
                       <option value="Norfolk Island">Norfolk Island</option>
                       <option value="Norway">Norway</option>
                       <option value="Oman">Oman</option>
                       <option value="Pakistan">Pakistan</option>
                       <option value="Palau Island">Palau Island</option>
                       <option value="Palestine">Palestine</option>
                       <option value="Panama">Panama</option>
                       <option value="Papua New Guinea">Papua New Guinea</option>
                       <option value="Paraguay">Paraguay</option>
                       <option value="Peru">Peru</option>
                       <option value="Phillipines">Philippines</option>
                       <option value="Pitcairn Island">Pitcairn Island</option>
                       <option value="Poland">Poland</option>
                       <option value="Portugal">Portugal</option>
                       <option value="Puerto Rico">Puerto Rico</option>
                       <option value="Qatar">Qatar</option>
                       <option value="Republic of Montenegro">Republic of Montenegro</option>
                       <option value="Republic of Serbia">Republic of Serbia</option>
                       <option value="Reunion">Reunion</option>
                       <option value="Romania">Romania</option>
                       <option value="Russia">Russia</option>
                       <option value="Rwanda">Rwanda</option>
                       <option value="St Barthelemy">St Barthelemy</option>
                       <option value="St Eustatius">St Eustatius</option>
                       <option value="St Helena">St Helena</option>
                       <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                       <option value="St Lucia">St Lucia</option>
                       <option value="St Maarten">St Maarten</option>
                       <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                       <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                       <option value="Saipan">Saipan</option>
                       <option value="Samoa">Samoa</option>
                       <option value="Samoa American">Samoa American</option>
                       <option value="San Marino">San Marino</option>
                       <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                       <option value="Saudi Arabia">Saudi Arabia</option>
                       <option value="Senegal">Senegal</option>
                       <option value="Seychelles">Seychelles</option>
                       <option value="Sierra Leone">Sierra Leone</option>
                       <option value="Singapore">Singapore</option>
                       <option value="Slovakia">Slovakia</option>
                       <option value="Slovenia">Slovenia</option>
                       <option value="Solomon Islands">Solomon Islands</option>
                       <option value="Somalia">Somalia</option>
                       <option value="South Africa">South Africa</option>
                       <option value="Spain">Spain</option>
                       <option value="Sri Lanka">Sri Lanka</option>
                       <option value="Sudan">Sudan</option>
                       <option value="Suriname">Suriname</option>
                       <option value="Swaziland">Swaziland</option>
                       <option value="Sweden">Sweden</option>
                       <option value="Switzerland">Switzerland</option>
                       <option value="Syria">Syria</option>
                       <option value="Tahiti">Tahiti</option>
                       <option value="Taiwan">Taiwan</option>
                       <option value="Tajikistan">Tajikistan</option>
                       <option value="Tanzania">Tanzania</option>
                       <option value="Thailand">Thailand</option>
                       <option value="Togo">Togo</option>
                       <option value="Tokelau">Tokelau</option>
                       <option value="Tonga">Tonga</option>
                       <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                       <option value="Tunisia">Tunisia</option>
                       <option value="Turkey">Turkey</option>
                       <option value="Turkmenistan">Turkmenistan</option>
                       <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                       <option value="Tuvalu">Tuvalu</option>
                       <option value="Uganda">Uganda</option>
                       <option value="United Kingdom">United Kingdom</option>
                       <option value="Ukraine">Ukraine</option>
                       <option value="United Arab Erimates">United Arab Emirates</option>
                       <option value="United States of America">United States of America</option>
                       <option value="Uraguay">Uruguay</option>
                       <option value="Uzbekistan">Uzbekistan</option>
                       <option value="Vanuatu">Vanuatu</option>
                       <option value="Vatican City State">Vatican City State</option>
                       <option value="Venezuela">Venezuela</option>
                       <option value="Vietnam">Vietnam</option>
                       <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                       <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                       <option value="Wake Island">Wake Island</option>
                       <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                       <option value="Yemen">Yemen</option>
                       <option value="Zaire">Zaire</option>
                       <option value="Zambia">Zambia</option>
                       <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/phone-8.png') }}" alt="" /></div>
                <div class="w-100"> <input type="text" class="w-100 form-control border-0" placeholder="What is your phone number" name="client_phone" id="client-phone" aria-label="" aria-describedby="basic-addon1" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                <div class="w-100"><input type="password" class="form-control border-0 w-100" placeholder="Enter your password" name="password" id="client-password" aria-label="" aria-describedby="basic-addon1" /></div>
            </div>
            <p class="text-danger d-none" id="password-error"></p>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                <div class="w-75"><input type="password" class="form-control border-0" placeholder="Confirm your password" name="password_confirmation" id="client_confirm_password" aria-label="" aria-describedby="basic-addon1" /></div>
            </div>

            <input type="button" class="btn bg-3AC574 w-100 mt-3 pt-2 pb-2  text-white btnstep client-step1" value="Create Account" />
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
            <div class="pt-3  text-center"><img src="{{ asset('assets/frontend/images/Artboard2.png') }}" class="w-116"></div>
            <div class="input-group mb-3 border-input pt-3 mt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                <div class="w-100"><input type="text" id="payment_last_name" class="form-control border-0 w-100" placeholder="Enter your first name" aria-label="" aria-describedby="basic-addon1" name="payment_first_name" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 mt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/men-8 (1).png') }}" alt="" /></div>
                <div class="w-100"><input type="text" id="payment_last_name" class="w-100 form-control border-0" placeholder="Enter your last name" aria-label="" aria-describedby="basic-addon1" name="payment_last_name" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-100"><input type="number" id="account_number" class="w-100 form-control border-0" placeholder="Enter your account number" aria-label="" aria-describedby="basic-addon1" name="account_number" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div  class="w-100"><input type="number" id="routing_number" class="form-control w-100 border-0" placeholder="Enter your routing number" aria-label="" aria-describedby="basic-addon1" name="routing_number" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-100"><input type="text" id="payment_birth_date" class="w-100 form-control border-0" placeholder="Date of Birth (dd/mm/yyyy)" aria-label="" aria-describedby="basic-addon1" name="payment_birth_date" /></div>
            </div>

            <div class="input-group mb-3 border-input pt-3 d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/key-8.png') }}" alt="" /></div>
                <div class="w-100"><input type="number" class="form-control w-100 border-0" placeholder="SSN last four" id="payment_ssn" aria-label="" aria-describedby="basic-addon1" name="payment_ssn" /></div>
            </div>
        </div>

        <div id="paypal-html" style="display:none;">
            <div class="input-group mb-3 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap ">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-100"><input type="email" id="payment_email" class="w-100 form-control border-0" placeholder="Enter your PayPal email address" aria-label="" aria-describedby="basic-addon1" name="payment_email" /></div>
            </div>                        
        </div>
        <div id="payoneer-html" style="display:none;">
            <div class="input-group mb-3 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap ">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-100"><input type="email" id="payment_email" class="w-100 form-control border-0" placeholder="Enter you Payoneer email address" aria-label="" aria-describedby="basic-addon1" name="payment_email" /></div>
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
        function dayClosed(ele)
        {
            $(ele).siblings('input').removeAttr('checked');
            $(ele).siblings('select').addClass('d-none');
            $(ele).addClass('d-none');
            $(ele).siblings('span').removeClass('d-none');
        }

        function dayOpened(ele)
        {
            if($(ele).is(":checked"))
            {
                $(ele).siblings('select').removeClass('d-none').show();
                $(ele).siblings('button').removeClass('d-none');
                $(ele).siblings('span').addClass('d-none');
            }
            else
            {
                $(ele).siblings('select').addClass('d-none');
                $(ele).siblings('button').addClass('d-none');
                $(ele).siblings('span').removeClass('d-none');
            }
            
        }
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

      const usernamePublicProfile = (ele)=>{
          let val = $(ele).val();
          val = val.split(" ").join("-");
          $(ele).val(val);
          $('#public_profile').val(val+'.learnme.live');
      }

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
          }
          if($(ele).val()=='paypal')
          {
            $('#payment_selection_html').html(document.getElementById('paypal-html').innerHTML);
          }
          if($(ele).val()=='payoneer')
          {
              $('#payment_selection_html').html(document.getElementById('payoneer-html').innerHTML);
          }

      }
     
      function inptFieldValidate(id)
      {
          if($(id).val() =='')
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              return false;
          }
          $(id).removeClass('placeholder-color-change');
          $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #3ac574");
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
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              return false;
          }
          else if($(id).val() !='' && $(id).val().length <6)
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              $('#password-error').removeClass('d-none').text('Please allow at least 6 characters');
              return false;
          }

          else if($(id).val() !='' && $(id).val() != $(confirmID).val())
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              $('#password-error').removeClass('d-none').text('Password doesn’t match');
              return false;
          }
          else if($(id).val() !='' && $(id).val() == $(confirmID).val() && $(id).val().length >=6)
          {
              $(id).removeClass('placeholder-color-change');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #3ac574");
              $('#password-error').addClass('d-none');
              return true;
          }
      }

      function getSubCategories(ele)
      {
          let id = $(ele).val();
          $('#select_category').val($(ele).find('option[value='+id+']').text());
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
                  // console.log(data);
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

      function checkboxSubCategory()
      {
        meCheckSubCategory=false;
        $.each($('input[name="sub_category_id[]"]'),function(){
            if($(this).is(':checked'))
            {
                meCheckSubCategory=true;
            }
        });

        if(!meCheckSubCategory){
            $('#select_category').val('');
            $('#select_category').addClass('placeholder-color-change');
            $('#select_category').parent('span').parent('div').removeClass('border-input');
            $('#select_category').parent('span').parent('div').css("border-bottom" ,"1px solid #e91e63");
        }
        else{
            $('#select_category').val($('select[name="category_id"] option:selected').text());
        }
        return meCheckSubCategory
      }

      function dateFieldValidate(id)
      { 
          console.log($(id).val());
          if($(id).val() =='')
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              return false;
          }
          else if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test($(id).val()))
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              return false;
          }
          $(id).removeClass('placeholder-color-change');
          $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #3ac574");
          return true;

          // First check for the pattern
          // if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
          // {
          //     return false;
          // }


          // Parse the date parts to integers
          // var parts = dateString.split("/");
          // var day = parseInt(parts[1], 10);
          // var month = parseInt(parts[0], 10);
          // var year = parseInt(parts[2], 10);

          // Check the ranges of month and year
          // if(year < 1000 || year > 3000 || month == 0 || month > 12)
          //     return false;

          // var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

          // Adjust for leap years
          // if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
          //     monthLength[1] = 29;

          // Check the range of the day
          // return day > 0 && day <= monthLength[month - 1];
      }

      function ssnFieldValidate(id)
      {
          if($(id).val() =='')
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              return false;
          }
          else if($(id).val() !='' && ($(id).val().length <4 || $(id).val().length >4))
          {
              $(id).addClass('placeholder-color-change');
              $(id).parent('div').parent('div').removeClass('border-input');
              $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #e91e63");
              return false;
          }
          $(id).removeClass('placeholder-color-change');
          $(id).parent('div').parent('div').css("border-bottom" ,"1px solid #3ac574");
          return true;
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
          if(inptFieldValidate($('#username')) && inptFieldValidate($('#client-name')) && inptFieldValidate($('#client-email')) && inptFieldValidate($('#client-phone')) && passwordFieldValidate($('#client-password'),$('#client_confirm_password')))
          {
              // $('#registerForm').submit();
              $(this).attr('disabled', 'disabled');
              var myform = document.getElementById("registerForm");
              var fd = new FormData(myform);
              fd.append("_token","{{ csrf_token() }}");
              ajaxCommonCode(fd);
          }
      });

       $(document.body).on("click", "input.step1", function () {
        //   $(this).parent("div").siblings("span.inputBtn").click();
          if(inptFieldValidate($('#username')) && inptFieldValidate($('#name')) && inptFieldValidate($('#email')) && passwordFieldValidate($('#password'),$('#confirm_password')))
          {$(this).parent("div").siblings("span.inputBtn").click();}
      });

      $(document.body).on("click", "input.step2", function () {
          let stepSecond = false;
          // $(this).parent("div").siblings("span.inputBtn").click();
            
            if(inptFieldValidate($('#business_phone')) && inptFieldValidate($('#business_location')) && selectFieldValidate($('.main-category')) && checkboxSubCategory() && checkboxFieldValidate($('.checkbxCheck')))
            {$(this).parent("div").siblings("span.inputBtn").click();}

      });

      $(document.body).on("click", "input.backstep2", function () {
          
          $(this).parent("div").siblings("span.previous").click();
      });

      $(document.body).on("click", "input.step3", function () {
         
          // console.log($('input[name="payment_method"]').val());
          let method_chk = false;
          if($('input[name="payment_method"]:checked').val()=='stripe')
          {
              if(inptFieldValidate($('#payment_first_name')) && inptFieldValidate($('#payment_last_name')) && inptFieldValidate($('#account_number')) && inptFieldValidate($('#routing_number')) && dateFieldValidate($('#payment_birth_date')) && ssnFieldValidate($('#payment_ssn')))
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
              $(this).attr('disabled', 'disabled');
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

