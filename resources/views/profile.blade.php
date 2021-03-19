@extends('layouts.frontend.app') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }
    body {
        background-image: none;
    }
    .nav-pills .nav-link.active {
        background-color: #3ac574 !important;
    }
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')
<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
<div class="pt-4 main_padding d-flex f-20 cl-3b3b3b3 justify-content-between robotoRegular">
    <div class="col-md-1 p-0"></div>
    <ul class="listStyle-none p-0 col-md-10 d-flex justify-content-between robotoRegular f-18 ul_main_tabs m-0">
        <li><a href="##" class="cl-3b3b3b3">Barbershop</a></li>
        <li><a href="##" class="cl-3b3b3b3">Web Developer</a></li>
        <li><a href="" class="cl-3b3b3b3">Banker</a></li>
        <li><a href="" class="cl-3b3b3b3">Engineer</a></li>
        <li><a href="" class="cl-3b3b3b3">Massage</a></li>
        <li><a href="" class="cl-3b3b3b3">Massage</a></li>
        <li><a href="" class="cl-3b3b3b3">Skin Care</a></li>
        <li><a href="" class="cl-3b3b3b3">Hair Stylist</a></li>
    </ul>
    <div class="col-md-2"></div>
</div>

<section class="main_padding pt-70">
    <div class="row m-0 justify-content-center">
        <div class="col-md-3 col-lg-3 col-sm-12 p-0 box_shadow1 borderRadius-12px pt-4 pb-5">
            <p class="border-bottom text-center f-21 cl-616161">Your Profile</p>
            <div class="d-flex align-items-center flex-column">
                <div class="dashboard_id text-center">
                    <img
                        id="blah"
                        class="rounded-circle blah"
                        src="{{(Auth::user()->avatar != null)? asset(Auth::user()->avatar): asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                        alt=""
                        style="height: 118px; width: 118px;"
                    />
                    <form action="{{ url('/profile/change_avatar') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group m-0">
                            <label class="btn img-lbl p-1 mb-0 position-relative" style="top: -34px; left: 43px;">
                                <img src="{{ asset('assets/frontend/images/camera.png') }}" alt="" srcset="" height="30" />
                                <input type="file" style="display: none;" name="avatar" class="avatar" onchange="readURL(this);" required accept="image/png, image/jpg, image/jpeg" />
                            </label>
                        </div>
                        <button class="btn btn-sm bg-3AC574 text-white">Upload Photo</button>
                    </form>
                </div>
                <p class="m-0 f-27 robotoMedium cl-5757575 pt-3">{{ Auth::user()->name }}</p>
                @if (Auth::user()->user_type == 'specialist')

                <p class="f-18 cl-a8a8a8a robotoMedium m-0 pt-1">{{ Auth::user()->specialist->category->name }}</p>
                @endif
            </div>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active cl-000000" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</a>
                @if (Auth::user()->user_type == 'specialist')
                <a class="nav-link cl-000000" id="v-pills-portfolio-tab" data-toggle="pill" href="#v-pills-portfolio" role="tab" aria-controls="v-pills-portfolio" aria-selected="false">Portfolio</a>
                <a class="nav-link cl-000000" id="v-pills-service-tab" data-toggle="pill" href="#v-pills-service" role="tab" aria-controls="v-pills-service" aria-selected="false">Services</a>
                @endif
                <a class="nav-link cl-000000" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">Password</a>
            </div>
        </div>
        <div class="col-md-7 col-lg-7 col-sm-12 pt-4 p-0 ml-4 box_shadow1 borderRadius-12px">
            <p class="border-bottom pl-3 f-21 cl-616161">Edit Your Personal Settings</p>
            <div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<p class="pl-3 f-21 cl-000000">Personal Info</p>
                    @if (Auth::user()->user_type =='specialist')

                    <form class="steps" action="{{ route('profile.update',Auth::user()->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" id="registerForm" novalidate="" id="specilaist_profile_form">
                        @csrf @method('PUT')
                        <div class="pl-5 pr-5 pb-5 first-step-html-change">
                            <div class="row justify-content-between">
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-user d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <input
                                            type="text"
                                            class="w-100 form-control border-0"
                                            placeholder="Enter username"
                                            name="username"
                                            id="username"
                                            onkeyup="usernamePublicProfile(this);"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->username }}"
                                        />
                                    </div>
                                </div>
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-user d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0" placeholder="Enter name" name="name" id="name" aria-label="" aria-describedby="basic-addon1" value="{{ Auth::user()->name }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="mb-3 border-input col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <label class="cl-3AC574 m-0 pt-3 pb-1">
                                        <span>
                                            <em class="fa fa-globe"></em>
                                        </span>
                                        <span class="pl-1 cl-3AC574 h6">Link to your Public Profile</span>
                                    </label>
                                    <div class="input-group mb-2 border-input pt-0 pl-3">
                                        <input
                                            type="text"
                                            class="form-control border-0 pl-4 pt-0"
                                            placeholder="Link.public.profile"
                                            name="public_profile"
                                            id="public_profile"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            readonly=""
                                            value="{{ Auth::user()->specialist->public_profile }}"
                                        />
                                    </div>
                                </div>
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-envelope d-flex justify-content-center align-items-end pb-2"></em></div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input type="email" class="w-100 form-control border-0" placeholder="Enter your email" name="email" id="email" aria-label="" aria-describedby="basic-addon1" value="{{ Auth::user()->email }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-map-marker d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <select id="country" name="country" class="form-control country-select w-100 border-0">
                                            <option selected disabled> Select Country</option>
                                            <option value="Afganistan" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Afghanistan</option>
                                            <option value="Albania" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Albania</option>
                                            <option value="Algeria" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Algeria</option>
                                            <option value="American Samoa" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>American Samoa</option>
                                            <option value="Andorra" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Andorra</option>
                                            <option value="Angola" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Angola</option>
                                            <option value="Anguilla" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Anguilla</option>
                                            <option value="Antigua & Barbuda" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Antigua & Barbuda</option>
                                            <option value="Argentina" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Argentina</option>
                                            <option value="Armenia" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Armenia</option>
                                            <option value="Aruba" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Aruba</option>
                                            <option value="Australia" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Australia</option>
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
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-phone d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <input
                                            type="number"
                                            class="form-control border-0"
                                            placeholder="What is your business phone#"
                                            name="business_phone"
                                            id="business_phone"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->specialist->business_phone }}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-bars pb-2 d-flex justify-content-center align-items-end"></em></div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input
                                            type="text"
                                            class="form-control border-0"
                                            placeholder="Select Category"
                                            id="select_category"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            data-toggle="modal"
                                            data-target="#exampleModal"
                                            value="{{ Auth::user()->specialist->category->name }}"
                                        />
                                    </div>
                                </div>
                                <div class="input-group mb-3 border-input col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <label class="cl-gray m-0 pt-3">
                                        <span>
                                            <em class="fa fa-calendar"></em>
                                        </span>
                                        <span class="pl-1 h6">Days & Hours of Availability </span>
                                    </label>
                                    <div class="input-group mb-2 border-input pt-0 pl-3">
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
                                </div>
                            </div>
                            <div class="h1 text-center cl-3AC574 pt-2">Enter Banking Information</div>
                            <div class="">
                                <div class="row pt-2">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <div class="{{(Auth::user()->specialist->payment_method == 'stripe')? 'bg-3AC574':''}} ml-2 mr-2 pl-4 pr-4 active rounded border radio_Selection_sub">
                                            <input type="radio" class="btn-check" style="display: none;" name="payment_method" id="option1" autocomplete="off" {{(Auth::user()->specialist->payment_method == "stripe")? 'checked':''}}
                                            onclick="paymentRadio(this)" value="stripe">
                                            <label class="btn {{(Auth::user()->specialist->payment_method == 'stripe')? 'text-white':''}}" for="option1"> Stripe </label>
                                        </div>
                                        <div class="{{(Auth::user()->specialist->payment_method == 'paypal')? 'bg-3AC574':''}} ml-4 mr-4 pl-4 pr-4 rounded border radio_Selection_sub">
                                            <input type="radio" class="btn-check" style="display: none;" name="payment_method" id="option2" autocomplete="off" onclick="paymentRadio(this)" {{(Auth::user()->specialist->payment_method ==
                                            "paypal")? 'checked':''}} value="paypal">
                                            <label class="btn {{(Auth::user()->specialist->payment_method == 'paypal')? 'text-white':''}}" for="option2">Paypal</label>
                                        </div>
                                        <div class="{{(Auth::user()->specialist->payment_method == 'payoneer')? 'bg-3AC574':''}} ml-2 mr-2 pl-3 pr-3 rounded border radio_Selection_sub">
                                            <input type="radio" class="btn-check" style="display: none;" name="payment_method" id="option4" autocomplete="off" onclick="paymentRadio(this)" {{(Auth::user()->specialist->payment_method ==
                                            "payoneer")? 'checked':''}} value="payoneer">
                                            <label class="btn {{(Auth::user()->specialist->payment_method == 'payoneer')? 'text-white':''}}" for="option4">Payoneer</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="payment_selection_html">
                                    @if(Auth::user()->specialist->payment_method == "stripe")
                                    <div class="row d-flex justify-content-between">
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="text"
                                                    id="payment_first_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your first name"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_first_name"
                                                    value="{{Auth::user()->specialist->payment_first_name}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="text"
                                                    id="payment_last_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your last name"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_last_name"
                                                    value="{{Auth::user()->specialist->payment_last_name}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="number"
                                                    id="account_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your account number"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="account_number"
                                                    value="{{Auth::user()->specialist->account_number}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="number"
                                                    id="routing_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your routing number"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="routing_number"
                                                    value="{{Auth::user()->specialist->routing_number}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-calendar"></em></div>
                                            <div>
                                                <input
                                                    type="text"
                                                    id="payment_birth_date"
                                                    class="form-control border-0"
                                                    placeholder="Date of Birth"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_birth_date"
                                                    value="{{Auth::user()->specialist->payment_birth_date}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 border-input pt-3 col-md-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-key"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="SSN last four"
                                                    id="payment_ssn"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_ssn"
                                                    value="{{Auth::user()->specialist->payment_ssn}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    @endif @if(Auth::user()->specialist->payment_method == "paypal")
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-envelope"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="email"
                                                    id="payment_email_paypal1"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your PayPal email address"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_email"
                                                    vallue="{{Auth::user()->specialist->payment_email}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    @endif @if(Auth::user()->specialist->payment_method == "payoneer")
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-envelope"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="email"
                                                    id="payment_email_pyoneer1"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter you Payoneer email address"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_email"
                                                    vallue="{{Auth::user()->specialist->payment_email}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                <div id="stripe-html" style="display: none;">
                                    <div class="row d-flex justify-content-between">
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="text"
                                                    id="payment_first_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your first name"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_first_name"
                                                    value="{{Auth::user()->specialist->payment_first_name}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 mt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-user"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="text"
                                                    id="payment_last_name"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your last name"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_last_name"
                                                    value="{{Auth::user()->specialist->payment_last_name}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="number"
                                                    id="account_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your account number"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="account_number"
                                                    value="{{Auth::user()->specialist->account_number}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-university"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="number"
                                                    id="routing_number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your routing number"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="routing_number"
                                                    value="{{Auth::user()->specialist->routing_number}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-between">
                                        <div class="input-group mb-3 border-input col-md-5 pt-3 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-calendar"></em></div>
                                            <div>
                                                <input
                                                    type="text"
                                                    id="payment_birth_date"
                                                    class="form-control border-0"
                                                    placeholder="Date of Birth"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_birth_date"
                                                    value="{{Auth::user()->specialist->payment_birth_date}}"
                                                />
                                            </div>
                                        </div>
                                        <div class="input-group mb-3 border-input pt-3 col-md-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-key"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="number"
                                                    class="w-100 form-control border-0"
                                                    placeholder="SSN last four"
                                                    id="payment_ssn"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_ssn"
                                                    value="{{Auth::user()->specialist->payment_ssn}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="paypal-html" style="display: none;">
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-envelope"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="email"
                                                    id="payment_email_paypal2"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter your PayPal email address"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_email"
                                                    vallue="{{Auth::user()->specialist->payment_email}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="payoneer-html" style="display: none;">
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-12 border-input pt-4 mb-4 mt-5 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                            <div><em class="fa fa-envelope"></em></div>
                                            <div class="w-100">
                                                <input
                                                    type="email"
                                                    id="payment_email_payoneer2"
                                                    class="w-100 form-control border-0"
                                                    placeholder="Enter you Payoneer email address"
                                                    aria-label=""
                                                    aria-describedby="basic-addon1"
                                                    name="payment_email"
                                                    vallue="{{Auth::user()->specialist->payment_email}}"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 pt-4 warningAlert" style="display: none;">
                                        <div class="alert alert-warning warningAlertContent"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Updated</button>
                            </div>
                        </div>
                        <!-- Modal 1st code start-->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog border-1" role="document">
                                <div class="modal-content pt-4">
                                    <div class="modal-header border-0 pl-5 pr-5">
                                        <h2 class="modal-title cl-gray" id="exampleModalLabel">Main Category</h2>
                                        <button type="button" class="close close1" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body pl-5 pr-5 pt-0">
                                        <select class="custom-select main-category" name="category_id" onchange="getSubCategories(this);">
                                            @if(App\Category::all()->count() >0)
                                            <option value="Select Main Category" selected="" disabled="">Select Main Category</option>
                                            @foreach(App\Category::all() as $category)
                                            <option value="{{ $category->id }}" {{ Auth::user()->specialist->category->id == $category->id ? 'selected':'' }}>{{ ucwords($category->name) }}</option>
                                            @endforeach @endif
                                        </select>
                                    </div>
                                    <div id="sub_categories">
                                        @if($subcategories->count() > 0)
                                        <h2 class="modal-title pl-5 pr-5 cl-gray" id="exampleModalLabel">Business Category</h2>
                                        <div class="border overflow-scroll-reg pl-5 mt-2">
                                            @php $sub_categories = json_decode(Auth::user()->specialist->sub_category_id); @endphp @foreach($subcategories as $key=>$subcategory) @if($subcategory->category_id ==
                                            Auth::user()->specialist->category_id)
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" @foreach($sub_categories as $selected_subcategory) @if($selected_subcategory == $subcategory->id) checked @endif @endforeach
                                                name="sub_category_id[]" id="customCheck{{ $key }}" value="{{ $subcategory->id }}">
                                                <label class="custom-control-label" for="customCheck{{ $key }}">{{ ucwords($subcategory->name) }}</label>
                                            </div>
                                            @endif @endforeach
                                        </div>

                                        @endif
                                    </div>
                                    <div class="modal-footer m-auto border-0">
                                        <button type="button" onclick="categorySubcategoryCheck();" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 1st code end-->
                        <!-- Modal 2nd code start-->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog border-1" role="document">
                                <div class="modal-content pt-4">
                                    <div class="modal-header border-0 pl-5 pr-4">
                                        <h3 class="modal-title cl-gray" id="exampleModalLabel">Days & Hours of Availability</h3>
                                        <button type="button" class="close close2 pt-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col-md-12 d-flex text-center pl-5">
                                            <p class="text-warning">Note: All days are closed if you want to open then check the respective day</p>
                                        </div>
                                    </div>
                                    @php $days = json_decode(Auth::user()->specialist->opening_hours); $week_days = array('monday','tuesday','wednesday','thursday','friday','saturday','sunday' ); @endphp
                                    <div class="pl-4 mt-2">
                                        @foreach ($week_days as $week_day)

                                        <div class="border-bottom custom-control custom-checkbox d-flex justify-content-between align-items-center">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days " {{ ( array_key_exists($week_day,$days)) ?'checked':'' }} onchange="dayOpened(this);" id="customCheck{{ $week_day }}"
                                            name="days[]" value="{{ $week_day }}">
                                            <label class="custom-control-label mr-2" for="customCheck{{ $week_day }}" style="width: 100px;">{{ ucfirst($week_day) }}</label>
                                            <!-- Time select code -->

                                            <select class="custom-select-reg {{ ( array_key_exists($week_day,$days))?'':'d-none' }} ml-5 mr-2" name="{{ $week_day }}_from">
                                                @for ($j = 1; $j <=2; $j++) @if ($j==1) {{ $interval = "AM" }} @else {{ $interval = "PM" }} @endif @for($i=1;$i<=12;$i++)
                                                <option value="{{ $i.':'.'00 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[0] == $i.':'.'00 '.$interval) ? "selected":'' ):''}} >{{ $i.':'.'00 '.$interval }}
                                                </option>
                                                <option value="{{ $i.':'.'15 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[0] == $i.':'.'15 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'15 '.$interval }}
                                                </option>
                                                <option value="{{ $i.':'.'30 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[0] == $i.':'.'30 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'30 '.$interval }}
                                                </option>
                                                <option value="{{ $i.':'.'45 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[0] == $i.':'.'45 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'45 '.$interval }}
                                                </option>
                                                @endfor @endfor
                                            </select>
                                            -
                                            <select class="custom-select-reg {{ ( array_key_exists($week_day,$days))?'':'d-none' }} ml-2" name="{{ $week_day }}_to">
                                                @for ($j = 1; $j <=2; $j++) @if ($j==1) {{ $interval = "AM" }} @else {{ $interval = "PM" }} @endif @for($i=1;$i<=12;$i++)
                                                <option value="{{ $i.':'.'00 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[1] == $i.':'.'00 '.$interval) ? "selected":'' ):''}} >{{ $i.':'.'00 '.$interval }}
                                                </option>
                                                <option value="{{ $i.':'.'15 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[1] == $i.':'.'15 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'15 '.$interval }}
                                                </option>
                                                <option value="{{ $i.':'.'30 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[1] == $i.':'.'30 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'30 '.$interval }}
                                                </option>
                                                <option value="{{ $i.':'.'45 '.$interval }}" {{ ( array_key_exists($week_day,$days)) ? (($days->
                                                    monday[1] == $i.':'.'45 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'45 '.$interval }}
                                                </option>
                                                @endfor @endfor
                                            </select>
                                            <!-- Time select code -->
                                            @if (!( array_key_exists($week_day,$days)))

                                            <span class="ml-5 pr-4 cl-gray">Closed</span>
                                            @else
                                            <span class="ml-5 pr-4 d-none cl-gray">Closed</span>
                                            @endif

                                            <button type="button" class="close close-reg {{ ( array_key_exists($week_day,$days))?'':'d-none' }} " aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        @endforeach {{--
                                        <div class="border-bottom custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days " @foreach ($days as $day => $time) @if ($day == 'monday') checked @endif @endforeach onchange="dayOpened(this);"
                                            id="customCheck101" name="days[]" value="monday">
                                            <label class="custom-control-label mr-5" for="customCheck101">Monday</label>
                                            <!-- Time select code -->

                                            <select class="custom-select-reg {{ isset($days->monday)?'':'d-none' }} ml-5 mr-2" name="monday_from">
                                                @for ($j = 1; $j <=2; $j++) @if ($j==1) {{ $interval = "AM" }} @else {{ $interval = "PM" }} @endif @for($i=1;$i<=12;$i++)
                                                <option value="{{ $i.':'.'00 '.$interval }}" {{ isset($days->monday) ? (($days->monday[0] == $i.':'.'00 '.$interval) ? "selected":'' ):''}} >{{ $i.':'.'00 '.$interval }}</option>
                                                <option value="{{ $i.':'.'15 '.$interval }}" {{ isset($days->monday) ? (($days->monday[0] == $i.':'.'15 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'15 '.$interval }}</option>
                                                <option value="{{ $i.':'.'30 '.$interval }}" {{ isset($days->monday) ? (($days->monday[0] == $i.':'.'30 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'30 '.$interval }}</option>
                                                <option value="{{ $i.':'.'45 '.$interval }}" {{ isset($days->monday) ? (($days->monday[0] == $i.':'.'45 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'45 '.$interval }}</option>
                                                @endfor @endfor
                                            </select>
                                            -
                                            <select class="custom-select-reg {{ isset($days->monday)?'':'d-none' }} ml-2" name="monday_to">
                                                @for ($j = 1; $j <=2; $j++) @if ($j==1) {{ $interval = "AM" }} @else {{ $interval = "PM" }} @endif @for($i=1;$i<=12;$i++)
                                                <option value="{{ $i.':'.'00 '.$interval }}" {{ isset($days->monday) ? (($days->monday[1] == $i.':'.'00 '.$interval) ? "selected":'' ):''}} >{{ $i.':'.'00 '.$interval }}</option>
                                                <option value="{{ $i.':'.'15 '.$interval }}" {{ isset($days->monday) ? (($days->monday[1] == $i.':'.'15 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'15 '.$interval }}</option>
                                                <option value="{{ $i.':'.'30 '.$interval }}" {{ isset($days->monday) ? (($days->monday[1] == $i.':'.'30 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'30 '.$interval }}</option>
                                                <option value="{{ $i.':'.'45 '.$interval }}" {{ isset($days->monday) ? (($days->monday[1] == $i.':'.'45 '.$interval) ? "selected":''):'' }} >{{ $i.':'.'45 '.$interval }}</option>
                                                @endfor @endfor
                                            </select>
                                            <!-- Time select code -->
                                            @if (!isset($days->monday))

                                            <span class="ml-5 pr-4 cl-gray">Closed</span>
                                            @else
                                            <span class="ml-5 pr-4 d-none cl-gray">Closed</span>
                                            @endif

                                            <button type="button" class="close close-reg {{ isset($days->monday)?'':'d-none' }} " aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="border-bottom mt-3 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck102" name="days[]" value="tuesday" />
                                            <label class="custom-control-label mr-5" for="customCheck102">Tuesday</label>
                                            <!-- Time select code -->
                                            <select class="custom-select-reg d-done ml-5 mr-2" style="display: none;" name="tuesday_from">
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
                                            <select class="custom-select-reg d-done ml-2" style="display: none;" name="tuesday_to">
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
                                            <button type="button" class="close close-reg d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="border-bottom mt-3 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck103" name="days[]" value="wednesday" />
                                            <label class="custom-control-label mr-3" for="customCheck103">Wednesday</label>
                                            <!-- Time select code -->
                                            <select class="custom-select-reg d-done ml-5 mr-2" style="display: none;" name="wednesday_from">
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
                                            <select class="custom-select-reg d-done ml-2" style="display: none;" name="wednesday_to">
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
                                            <button type="button" class="close close-reg d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="border-bottom mt-3 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck104" name="days[]" value="thursday" />
                                            <label class="custom-control-label mr-4 pr-3" for="customCheck104">Thursday</label>
                                            <!-- Time select code -->
                                            <select class="custom-select-reg d-done ml-5 mr-2" style="display: none;" name="thursday_from">
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
                                            <select class="custom-select-reg d-done ml-2" style="display: none;" name="thursday_to">
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
                                            <button type="button" class="close close-reg d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="border-bottom mt-3 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck105" name="days[]" value="friday" />
                                            <label class="custom-control-label mr-5 pr-3" for="customCheck105">Friday</label>
                                            <!-- Time select code -->
                                            <select class="custom-select-reg d-done ml-5 mr-2" style="display: none;" name="friday_from">
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
                                            <select class="custom-select-reg d-done ml-2" style="display: none;" name="friday_to">
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
                                            <button type="button" class="close close-reg d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="border-bottom mt-3 custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck106" name="days[]" value="saturday" />
                                            <label class="custom-control-label mr-5" for="customCheck106">Saturday</label>
                                            <!-- Time select code -->
                                            <select class="custom-select-reg d-done ml-5 mr-2" style="display: none;" name="saturday_from">
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
                                            <select class="custom-select-reg d-done ml-2" style="display: none;" name="saturday_to">
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
                                            <button type="button" class="close close-reg d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="border-bottom custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input checkbxCheck days" onchange="dayOpened(this);" id="customCheck107" name="days[]" value="sunday" />
                                            <label class="custom-control-label mr-5 pr-3" for="customCheck107">Sunday</label>
                                            <!-- Time select code -->
                                            <select class="custom-select-reg d-done ml-5 mr-2" style="display: none;" name="sunday_from">
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
                                            <select class="custom-select-reg d-done ml-2" style="display: none;" name="sunday_to">
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
                                            <button type="button" class="close close-reg d-none" aria-label="Close" onclick="dayClosed(this);"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        --}}
                                    </div>
                                    <div class="modal-footer m-auto border-0">
                                        <button type="button" onclick="dayCheckValidation();" class="btn bg-3ac574 text-white pl-5 pr-5 mt-3 mb-3">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 2nd code end-->
                    </form>
                    @else
                    <form action="{{ route('profile.update',Auth::user()->id) }}" method="post" id="client_profile_form">
                        @csrf @method('PUT')
                        <div class="pl-5 pr-5 first-step-html-change">
                            <div class="row justify-content-between">
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-user d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <input
                                            type="text"
                                            class="w-100 form-control border-0"
                                            placeholder="Enter username"
                                            name="username"
                                            id="username"
                                            onkeyup="usernamePublicProfile(this);"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->username }}"
                                        />
                                    </div>
                                </div>
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-user d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0" placeholder="Enter name" name="name" id="name" aria-label="" aria-describedby="basic-addon1" value="{{ Auth::user()->name }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-map-marker d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <select id="country" name="country" class="form-control country-select w-100 border-0">
                                            <option selected disabled> Select Country</option>
                                            <option value="Afganistan" {{(Auth::user()->country == "Afganistan")? 'selected':''}}>Afghanistan</option>
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
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-envelope d-flex justify-content-center align-items-end pb-2"></em></div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input type="email" class="w-100 form-control border-0" placeholder="Enter your email" name="email" id="email" aria-label="" aria-describedby="basic-addon1" value="{{ Auth::user()->email }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em class="fa fa-phone d-flex justify-content-center align-items-center"></em></div>
                                    <div class="w-100">
                                        <input
                                            type="number"
                                            class="form-control border-0"
                                            placeholder="What is your business phone#"
                                            name="business_phone"
                                            id="business_phone"
                                            aria-label=""
                                            aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->client->business_phone }}"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Updated</button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
                @if(Auth::user()->user_type == 'specialist')
                <div class="tab-pane fade" id="v-pills-portfolio" role="tabpanel" aria-labelledby="v-pills-portfolio-tab">
					<p class="pl-3 f-21 cl-000000">Portfolio</p>
                   
                </div>
                <div class="tab-pane fade" id="v-pills-service" role="tabpanel" aria-labelledby="v-pills-service-tab">
					<p class="pl-3 f-21 cl-000000">Services</p>
					<button title="Click to Add Service" data-toggle="modal" data-target="#addServiceModal" class="btn btn-sm bg-3AC574 text-white m-2" style="float: right;"> Add Service</button>
                    <div class="table-responsive ServiceTableData px-3" id="ServiceTableData">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">service</th>
                                    <th scope="col">Timing</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $key => $service)
                                <tr id="target_{{ $service->id }}">
                                    <td>{{ $key +1 }}</td>
                                    <td>{{ $service->title }}</td>
                                    <td>{{ $service->timing }} Minutes</td>
                                    <td>${{ $service->rate }}</td>
                                    <td>
                                        @if ($service->status == "Active")
                                            
                                        <span class="badge badge-sm badge-success">{{ $service->status }}</span>
                                        @else
                                            
                                        <span class="badge badge-sm badge-danger">{{ $service->status }}</span>
                                        @endif
                                        
                                    </td>
                                    
                                    <td style="min-width: 135px !important;">
                                        <button title="Click to Update Service" class="btn btn-warning btn-sm editServiceBtn" id="editServiceBtn" data-toggle="modal" data-target="#editServiceModal" data-Serviceid="{{ $service->id }}"><i class="fe fe-pencil"></i> Edit</button>

                                        <button title="Click to Delete Service" type="button" class="btn btn-danger btn-sm ServiceDelete" data-toggle="modal" data-target="#deleteServiceModal" id="ServiceDelete" data-Serviceid="{{ $service->id }}"><i class="fe fe-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
					<p class="pl-3 f-21 cl-000000">Password Setting</p>
                    <form action="{{ url('password') }}" method="POST">
                        @csrf
                        <div class="px-5">
                            <div class="form-group">
                                <label for="old_password">Old Password*</label>
                                <input id="old_password" name="old_password" type="password" class="form-control" value="{{ old('old_password') }}" autocomplete="first_name" placeholder="Enter Old Password" />
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password*</label>
                                <input id="new_password" name="new_password" type="password" class="form-control" value="{{ old('new_password') }}" placeholder="Enter New Password" autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm New Password*</label>
                                <input id="password-confirm" type="password" class="form-control" name="new_password_confirmation" placeholder="Re-Type New Password" autocomplete="new-password" />
                            </div>
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





	{{-- services modals started --}}
@if (Auth::user()->user_type == 'specialist')
    

		<!-- Modal For Adding Service-->
        <div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalArea" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addServiceModalArea" style="font-size: 18px !important;">Add New Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ url('specialist/services') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2"  name="category" id="select_service_category" style="width: 100%;"  onchange="getSubCategoriesForServices(this);">
                                    <option selected="selected" disabled>Choose category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group sub_categories" >
                                
                            </div>
                            <div class="form-group">
                                <label for="title">Title*</label>
                                <input id="title" type="text" class="form-control text-capitalize" name="title" value="{{ old('title') }}" autocomplete="title" placeholder="Enter Service Title" />
                            </div>
                            <div class="form-group mb-0">
                                <label for="timing">Timing*</label>
                                <input id="timing" type="number" class="form-control text-capitalize" name="timing" value="{{ old('timing') }}" autocomplete="timing" placeholder="Enter Service Timing" />
                                <small class="font-italic text-muted m-0 p-0"> ( in minutes )</small>
                            </div>
                            <div class="form-group">
                                <label for="rate">Rate*</label>
                                <input id="rate" type="number" class="form-control text-capitalize" name="rate" value="{{ old('rate') }}" autocomplete="rate" placeholder="Enter Service Rate" />
                            </div>
                            <div class="form-group">
                                <label for="description">Description*</label>
                               <textarea id="description" class="form-control summernote" name="description" required> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">tags*</label>
                               <input type="text" name="tags" class="form-control" placeholder="laravel,php" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input type="checkbox" name="status" class="custom-control-input" checked id="customSwitch3">
                                <label class="custom-control-label" for="customSwitch3">Inactive/Active</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal"><i class="fas fa-backspace"></i> Cancel</button>
                            <button type="submit" class="btn btn-md btn-primary"><i class="fas fa-check-circle"></i> Add Service</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal For Editing Service-->
        <div class="modal fade editServiceModal" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelServiceedit" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelServiceedit" style="font-size: 18px !important;">Edit Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="requestServiceData"></div>
                </div>
            </div>
        </div>

        <!-- Modal For Deleting Service-->
        <div class="modal fade deleteServiceModal" id="deleteServiceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelServicedelete" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelServicedelete" style="font-size: 18px !important;">Delete Confirmation !</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure, you want to delete this Service?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                        <button type="button" class="btn btn-md btn-primary deleteServiceBtn" id="deleteServiceBtn" data-dismiss="modal">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
@endif
	{{-- Services modals ended  --}}
</section>
@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script')

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(".blah").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    const usernamePublicProfile = (ele) => {
        let val = $(ele).val();
        val = val.split(" ").join("-");
        $(ele).val(val);
        $("#public_profile").val(val + ".learnme.live");
    };

    function getSubCategories(ele) {
        let id = $(ele).val();
        $("#select_category").val(
            $(ele)
                .find("option[value=" + id + "]")
                .text()
        );
        $.ajax({
            url: "{{ route('get.sub_categories') }}",
            type: "get",
            data: {
                id: id,
            },
            success: function (data) {
                $("#sub_categories").html(data);
            },
        });
    }

    function dayClosed(ele) {
        $(ele).siblings("input").removeAttr("checked");
        $(ele).siblings("select").addClass("d-none");
        $(ele).addClass("d-none");
        $(ele).siblings("span").removeClass("d-none");
    }

    function dayOpened(ele) {
        if ($(ele).is(":checked")) {
            $(ele).siblings("select").removeClass("d-none").show();
            $(ele).siblings("button").removeClass("d-none");
            $(ele).siblings("span").addClass("d-none");
        } else {
            $(ele).siblings("select").addClass("d-none");
            $(ele).siblings("button").addClass("d-none");
            $(ele).siblings("span").removeClass("d-none");
        }
    }
    setInterval(() => {
        let meCheck = false;
        $.each($(".days"), function () {
            if ($(this).is(":checked")) {
                meCheck = true;
            }
        });
        if (meCheck) {
            let allChecked = document.getElementById("select_opening_hours");
            allChecked.placeholder = "Completed";
        } else {
            let notChecked = document.getElementById("select_opening_hours");
            notChecked.placeholder = "Not Completed";
        }
    }, 1000);

    function dayCheckValidation() {
        let meCheck = false;
        $.each($(".days"), function () {
            if ($(this).is(":checked")) {
                meCheck = true;
            }
        });
        if (!meCheck) {
            swal({
                icon: "error",
                text: "{{ __('Please Check Your Available Day!') }}",
                type: "error",
            });
        } else {
            $(".close2").click();
        }
    }
    const paymentRadio = (ele) => {
        $(ele).parent().addClass("bg-3AC574");
        $(ele).parent().siblings().removeClass("bg-3AC574");
        $(ele).parent().siblings().find("label").removeClass("text-white");
        // $(ele).siblings().removeClass('text-white');
        $(ele).siblings().addClass("text-white");
        if ($(ele).val() == "stripe") {
            $("#payment_selection_html").html(document.getElementById("stripe-html").innerHTML);
        }
        if ($(ele).val() == "paypal") {
            $("#payment_selection_html").html(document.getElementById("paypal-html").innerHTML);
        }
        if ($(ele).val() == "payoneer") {
            $("#payment_selection_html").html(document.getElementById("payoneer-html").innerHTML);
        }
    };
    function categorySubcategoryCheck() {
        if ($('select[name="category_id"]').val() == null) {
            swal({
                icon: "error",
                text: "{{ __('Please Select Category!') }}",
                type: "error",
            });
        } else {
            meCheckSubCategory = false;
            $.each($('input[name="sub_category_id[]"]'), function () {
                if ($(this).is(":checked")) {
                    meCheckSubCategory = true;
                }
            });
            if (!meCheckSubCategory) {
                swal({
                    icon: "error",
                    text: "{{ __('Please Select Business Category!') }}",
                    type: "error",
                });
            } else {
                $(".close1").click();
            }
        }
    }
	 function getSubCategoriesForServices(ele)
      {
          let id = $(ele).val();
          $.ajax({
              url:"{{ url('sub_categories') }}",
              type:"get",
              data:{id:id},
              success:function(data)
              {
                  $('.sub_categories').empty();
                  $('.sub_categories').html(data);

              }
          });
      }


</script>
@endsection {{-- footer section end --}}
