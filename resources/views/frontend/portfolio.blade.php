@extends('layouts.frontend.app')
@section('title','Portfolio')
{{-- head start --}}
	
	@section('extra-css')

  
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/portfolio.css') }}">
  <style type="text/css">
    .dropdown-toggle::after{display: none;}    
  </style>
	@endsection
{{-- head end --}}


{{-- content section start --}}

	@section('content')
		
  <section class="main_padding pt-2 pb-3 nav-bg-img robotoRegular">
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
      <section class="bg_portfolioImg ">
    <div class="row m-0 pl-0 pr-0 pt-4 pb-4">
      <div class="col-md-6 col-lg-6">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/frontend/images/Group 152.png') }}" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
    <img src="{{ asset('assets/frontend/images/Group 152.png') }}" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
    <img src="{{ asset('assets/frontend/images/Group 152.png') }}" class="d-block w-100 img-fluid" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="col-md-5 col-lg-6 cl-ffffff pl-5 pr-5">
        <div class=" f-44 robotoMedium">Caroline Johnson</div>
        <div class="d-flex border-bottom pb-3">
          <div class="pr-3 robotoMedium">Hair Stylist</div>
          <div class="border-left"></div>
          <div class="pl-3 robotoRegular">6656 us 301, Riverview, 33578</div>
        </div>
     <div class="border-bottom pb-3">
     <div class="robotoMedium f-18 pt-3">About Us</div>
        <div class="robotoRegular f-18 text-justify pt-3">Hello my name is Caroline  the barber I’ve been 
cutting for over 15 years I specialize in all styles 
feel free to come get a great experience with your
local barber</div>
     </div>
     <div class="border-bottom pb-3  f-18">
     <div class="robotoMedium pt-3">Specifications:</div>
     <div class="robotoRegular pt-3">Confirmed Appointment</div>
     <div class="robotoRegular pt-3">Timings Decided</div>
   
     </div>
     <div class="border-bottom pb-3 f-18">
     <div class="robotoMedium pt-3">Languages</div>
     <div class="d-flex pt-3  robotoRegular">
       <div><div>English</div>   <div class="pt-3">French</div> <div class="pt-3">Portuguese</div></div>
       <div class="pl-5"><div>Primary</div><div class="pt-3">Secondary</div><div class="pt-3">Secondary</div></div>
     

      </div>
    
   
    </div>
    <div class=" pb-3 robotoMedium f-18">
      <div class="pt-3">Share:</div>
      <div class="d-flex pt-3">
        <div><img src="{{ asset('assets/frontend/images/Subtraction 1.png') }}" alt="" srcset=""></div>
        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Group 1.png') }}" alt="" srcset=""></div>
        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Group 2.png') }}" alt="" srcset=""></div>
        <div class="pl-3"> <img src="{{ asset('assets/frontend/images/Group 3.png') }}" alt="" srcset=""></div>
        
     <div class="f-13 robotoMedium pl-3">www.learnme.live/specialist_name</div>
      </div>
      </div>

      </section>
    </section>
    <section class="main_padding pt-5">
      <div class="row m-0 p-0">
        <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Bookings:</div>
        <div class="col-md-3 ml-auto p-0">
      <div class="d-flex m-0">  <div class="pt-4 w-100"> <input type="email" placeholder="Search for services" class="robotoRegular cl-6b6b6b    bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded"></div>
        <div class="pt-4 pl-2"> <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2" type="submit"><img src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button></div>
        </div>
      </div>

             <!-- T A B L E -->
             <div class="table-responsive table_scroll mt-5 border">
  <table class="table">
    <tr class="">
  <thead class="sticky-top">
      <th scope="col">Sr</th>
      <th scope="col">Popular Services</th>
      <th scope="col">Popular Services</th>
      <th scope="col">Timing</th>
      <th scope="col">Rate</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody class="table_scroll">
    <tr class="border-bottom">
      <th scope="row">4</th>
      <td>Basic hair cut no beard</td>
      <td>Basic hair cut no beard</td>   
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr class="border-bottom">
      <th scope="row">2</th>
      <td>Basic hair cut no beard</td>
      <td>Basic hair cut no beard</td>   
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr class="border-bottom">
      <th scope="row">2</th>
      <td>Basic hair cut no beard</td>
      <td>Basic hair cut no beard</td>   
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Basic hair cut no beard</td>
      <td>Basic hair cut no beard</td>   
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Basic hair cut no beard</td>
      <td>Basic hair cut no beard</td>   
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Basic hair cut no beard</td>
      <td>Basic hair cut no beard</td>   
      <td>$25.00</td>
      <td>Kids cut (12 & under)</td>
      <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
    </tr>
  </tbody>
  </div>
  </table>
</div>
    </section>
   

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   

	@endsection

{{-- content section end --}}

{{-- footer section start --}}


	@section('extra-script')

	@endsection

{{-- footer section end --}}
