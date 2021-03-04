@extends('layouts.frontend.app')
@section('title','Client Request')
{{-- head start --}}
	
	@section('extra-css')

  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/client_request.css') }}">
  <style type="text/css">
    .dropdown-toggle::after{display: none;}    
  </style>
	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
  <section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
      {{-- <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="navbar-brand" href="#"
          ><img
            src="{{ asset('assets/frontend/images/navlogo.png') }}"
            alt="navbar logo"
            class="img-fluid"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0 bg-transparent border rounded">
            <input
              class="form-control mr-sm-2 w-18 bg-transparent text-white border-0"
              type="search"
              value="what are you looking for ?"
              aria-label="Search"
            />
            <img
              src="{{ asset('assets/frontend/images/search2.png') }}"
              alt=""
              class="img-fluid p-2 search-img"
            />
          </form>
          <ul class="navbar-nav ml-auto d-flex align-self-center f-20">
            <li class="nav-item col-md-2">
              <a class="nav-link cl-white" href="#"
                >Blog <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item col-md-3 p-0">
              <a class="nav-link cl-white" href="#">About us</a>
            </li>
            <li class="nav-item dropdown col-md-3 p-0">
              <a
                class="nav-link cl-white"
                href="#"
                id="navbarDropdown"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded=""
              >
                Messages
                <span class="green-dot mt-1 ml-2"></span>
              </a>
              <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                <nav>
                  <div class="nav nav-tabs row m-0" id="nav-tab" role="tablist">
                      <a
                        class="nav-item nav-link  col-md-6 text-center"
                        id="nav-profile-tab"
                        data-toggle="tab"
                        href="#nav-profile"
                        role="tab"
                        aria-controls="nav-profile"
                        aria-selected="false"
                        > Notifications</a
                      >
                    <a
                      class="nav-item nav-link active col-md-6 text-center"
                      id="nav-home-tab"
                      data-toggle="tab"
                      href="#nav-home"
                      role="tab"
                      aria-controls="nav-home"
                      aria-selected="true"
                      >Inbox</a
                    >
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div
                    class="tab-pane fade"
                    id="nav-profile"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab"
                  >
                    ...
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  <div
                    class="tab-pane fade show active"
                    id="nav-home"
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
                  >
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/navlogo.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                      <div class="col-md-2 p-0">
                        <img
                          src="{{ asset('assets/frontend/images/navlogo.png') }}"
                          alt=""
                          class="img-fluid"
                        />
                        <span class="green-dot ml--1 mt-1"></span>
                      </div>
                      <div class="col-md-6 pl-2 pt-1 p-0">
                        <div class="row m-0">
                          <div class="dropdown-heading">Heading is here</div>
                        </div>
                        <div class="row m-0">
                          <div class="dropdown-contnt">
                            there is some text below heading
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 p-0">
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="green-dot-nmbr">3</span>
                        </div>
                        <div class="row m-0 justify-content-end mt-1">
                          <span class="dropdown-contnt">3:34 pm</span>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="dropdown-footer mt-5">
                    <div class="bg-3ac574 row m-0 pt-2 pb-3">
                      <div class="col-md-6 d-flex p-0 pl-4">
                          <div><i class="fa fa-cog text-white" aria-hidden="true"></i></div>
                        <div><i class="fa fa-volume-up text-white pl-2" aria-hidden="true"></i></div>
                      </div>
                      <div class="col-md-6 p-0 pr-3 text-white text-right">
                          <h6>See all in inbox</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item col-md-2">
              <a class="nav-link cl-white " href="#">Spa</a>
            </li>
            <li class="nav-item col-md-2 ">
              <a class="nav-link" href="#"
                ><img
                  src="{{ asset('assets/frontend/images/55881685_1284744685011014_8335587762602246144_n.png') }}"
                  alt=""
                  class="img-fluid w-75"
              /></a>
            </li>
          </ul>
        </div>
      </nav> --}}
       @include('includes.frontend.navbar')
    </section>

    <div class="pt-4 main_padding d-flex f-20 cl-3b3b3b3 justify-content-between robotoRegular">
      <div class="col-md-1 p-0"></div>
      <ul class="listStyle-none p-0 col-md-10 d-flex justify-content-between robotoRegular f-18 ul_main_tabs m-0">
        <li>  <a href="##" class="cl-3b3b3b3">Barbershop</a></li>
        <li>  <a href="##" class="cl-3b3b3b3">Web Developer</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Banker</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Engineer</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Massage</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Massage</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Skin Care</a></li>
        <li>  <a href="" class="cl-3b3b3b3">Hair Stylist</a></li>
        
 
    </ul>
      <div class="col-md-2"></div>
    </div>
           
    <section class="main_padding pt-70">
        <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Post a request:</div>
        <div class="row">
        <div class="col-md-6">
        <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap border-bottom">
                <div><img src="{{ asset('assets/frontend/images/selection-8 (1).png') }}" alt="" class="pt-2"/></div>
                <div class="w-50  ml-2">
                  <label for="" class="m-0 pl-3 font-weight-bold">Title is here</label>
                    <select id="country" name="country" class="form-control country-select w-100 border-0 pt-0"  >
                       <option value="Afganistan">Afghanistan</option>
                       <option value="Albania">Albania</option>
                       <option value="Algeria">Algeria</option>
                       <option value="American Samoa">American Samoa</option>
                       <option value="Andorra">Andorra</option>
                       <option value="Angola">Angola</option>
                    </select>
                </div>
            </div>
        
        </div>
        <div class="col-md-6 text-center">
        <div class="input-group mb-3 border-input pt-3  d-flex flex-nowrap">
                <div><img src="{{ asset('assets/frontend/images/sms -8.png') }}" alt="" /></div>
                <div class="w-50"
                >
                    <select id="country" name="country" class="form-control country-select w-100"  >
                       <option value="Afganistan">Afghanistan</option>
                       <option value="Albania">Albania</option>
                       <option value="Algeria">Algeria</option>
                       <option value="American Samoa">American Samoa</option>
                       <option value="Andorra">Andorra</option>
                       <option value="Angola">Angola</option>
                    </select>
                </div>
            </div>
        
        </div>
      
   
    </section>
    <section class="main_padding pt-5">
      <div class="row m-0 p-0">
        <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Client Requests:</div>
        <div class="col-md-3 ml-auto p-0">
      <div class="d-flex m-0">  <div class="pt-4 w-100"> <input type="email" placeholder="Search for services" class="robotoRegular h-44 cl-6b6b6b    bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded"></div>
        <div class="pt-4 pl-2"> <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2" type="submit"><img src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button></div>
        </div>
      </div>

             <!-- T A B L E -->
  <div class="table-responsive tableFixHead table_scroll mt-5 border robotoRegular">
  <table id="boxes-list" class="table m-0 header-fixed">
    <tr class="bg-white robotoRegular ">
  <thead class="sticky-top bg-white cl-3ac754 ">
      <th scope="col">Sr</th>
      <th scope="col">Popular Services</th>
      <th scope="col">Clients</th>
      <th scope="col">Timing</th>
      <th scope="col">Rate</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody class="table_scroll">
    <tr class="border-bottom">
      <th scope="row">1</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr class="border-bottom">
      <th scope="row">2</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr class="border-bottom">
      <th scope="row">3</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Basic hair cut no beard</td>   
      <td> 
            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" class="img-fluid w-25"/>
            <p class="pt-2 m-0">Name is here</p>
      </td>
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
  </tbody>
  </div>
  </table>
</div>
    </section>
    



                               


                               <section class="main_padding bg-4b4b4b4 mt-5 pt-4 pb-4">
    <div class="d-flex justify-content-center  align-items-center"><img
            src="{{ asset('assets/frontend/images/Copyright © 2021 learnmelive, All Right Reserved learnmelive.png') }}"
            alt="" srcset=""></div>
</section>






   

	@endsection

{{-- content section end --}}

{{-- footer section start --}}


	@section('extra-script')

	@endsection

{{-- footer section end --}}
