@extends('layouts.frontend.app')
@section('title','Portfolio')
{{-- head start --}}
@section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/carousel.css') }}">

<style type="text/css">
   .dropdown-toggle::after{display: none;}    
</style>
@endsection
{{-- head end --}}
{{-- content section start --}}
@section('content')
<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
   {{-- 
   <nav class="navbar navbar-expand-lg navbar-light p-0">
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
   </nav>
   --}}
   @include('includes.frontend.navbar')
</section>
@include('common.messages')
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

<section class="main_padding pt-5">
                        <div class="f-34 cl-000000 robotoMedium">Appointments</div>
                     </section>
                                       

                     
<section class="main_padding mt-5">
   <section class="pt-5 pb-5 bg-dark borderRadius-12px">
   <section class="d-flex justify-content-center">
   <div class="d-flex container d-flex p-0 ml-0 mr-0 justify-content-center">
        <div class="row m-0 w-100 flex-nowrap justify-content-center" >
            <div class="d-flex col-md-5 bg-ffffff w-42  pt-3 pb-3 borderRadius-5px pl-3">
                <div><img src="{{ asset('assets/frontend/images/search.png') }}"  alt=""></div>

                <div class="pl-3"><input type="search" class="bg-transparent outline-none border-0 robotoRegular f-21 "
                        placeholder="Book your services..."></div>
            </div>
          <div class="d-flex col-md-5 bg-ffffff w-42  pt-3 pb-3 borderRadius-5px pl-3 ml-3 mr-3">
                <div><img src="{{ asset('assets/frontend/images/location.png') }}"  alt="">
        </div>

        <div class=""><input type="search" class="pl-3 bg-transparent outline-none border-0 robotoRegular f-21 "
                placeholder="Near?"></div>
    </div> 
    <div class="col-md-1 p-0"> <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-3 pb-3 pl-3 pr-3"
            type="submit"><img src="{{ asset('assets/frontend/images/search2.png') }}" alt=""></button></div>

    </div>
    </div>
   </section>
            <div class="f-24 cl-ffffff robotoRegular text-center pt-3">Discover and book beauty professionals near you</div>
             

            <section class="pt-4 pl-5 pr-5">
             
              <!-- 1sT CarouSel sTarT -->
              <div class="row m-0 ">

              <div class="col-lg-4 col-md-4 ">
                  <div class="cl-ffffff text-center robotoLight">Pending</div>
                 <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-a20101">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div>

              </div>
              <div class="col-lg-4 col-md-4 ">
                  <div class="cl-ffffff text-center robotoMedium">Finished</div>
                  
<!-- ################### carousel 1 -->

<section class="">
  <div id="carousel-1" class="carousel slide" data-ride="carousel">

   

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
         <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
        
      </div>

      <div class="carousel-item">
      <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
      </div>

      <div class="carousel-item">
      <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
      </div>

      <div class="carousel-item">
      <section class="d-block w-100">
            <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-616161">Pending</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div> 
         </section>
      </div>

    </div><!-- e carousel-inner -->

    <a class="carousel-control-prev op-1 singleprev" href="#carousel-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">prev</span>
    </a>

    <a class="carousel-control-next single-next op-1" href="#carousel-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon  " aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>

  </div><!-- e carousel -->
</section><!-- e section -->

              </div>
              <div class="col-lg-4 col-md-4 ">
                  <div class="cl-ffffff text-center robotoLight">Recent</div>
                 <div class="d-flex borderRadius-12px bg-white w-100 robotoMedium justify-content-between pt-4 pb-4 pl-4 pr-4 mt-3">
                    <div class="col-md-8 p-0">
                       <div class="f-18 robotoMedium cl-0eaf39">Recent</div>
                       <div class="cl-000000  f-15 pt-1"> Regular Cut-Recorte Regular</div>                            
                       <div class="cl-616161 f-15 pt-1">Regular Cut</div>
                    </div>
                    <div class="border_Left"></div>
                    <div class="">
                       <div class="text-center">
                          <div class="f-14">Feb</div>
                          <div class="f-32">13</div>
                          <div class="f-12">2021</div>
                          <div class="f-10">5:42 pm</div>

                       </div>

                    </div>
                 </div>

              </div>
            
              </div>
              


               <!-- 1sT CarouSel END -->
               </section>
               <section class="pl-5 pr-5 pt-5 pb-2">
                          <div class="cl-ffffff pl-3 f-21 robotoMedium">Visited & Favorited</div>
                       </section>
                       <!-- ################### carousel 2 -->

<section class="pl-5 pr-5">


  <div id="carousel-2" class="carousel slide pl-15 pr-15" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

      <div class="carousel-item active">
      <section class="d-block">
 <div class="row">
   <div class="col-md-3"> <img class="d-block w-100" src="{{ asset('assets/frontend/images/hairdresser.png') }}"alt="Slide" >
       <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Hairdresser</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
   <div class="col-md-3"><img class="d-block w-100" src="{{ asset('assets/frontend/images/mostexpensive-spa-ashtonhawks-04.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Day spa</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">   <img class="d-block w-100" src="{{ asset('assets/frontend/images/massageTherapy-636218646-770x553-1.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Massage</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">       <img class="d-block w-100" src="{{ asset('assets/frontend/images/growing-beauty.png') }}" alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Skin care</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
</div>
 </section>
       
        
      </div>

      <div class="carousel-item">
        
  <section class="d-block">
  <div class="row">
   <div class="col-md-3"> <img class="d-block w-100" src="{{ asset('assets/frontend/images/hairdresser.png') }}"alt="Slide" >
       <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Hairdresser</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
   <div class="col-md-3"><img class="d-block w-100" src="{{ asset('assets/frontend/images/mostexpensive-spa-ashtonhawks-04.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Day spa</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">   <img class="d-block w-100" src="{{ asset('assets/frontend/images/massageTherapy-636218646-770x553-1.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Massage</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">       <img class="d-block w-100" src="{{ asset('assets/frontend/images/growing-beauty.png') }}" alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Skin care</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
</div>
 </section>
      </div>

      <div class="carousel-item">
     
      <section class="d-block">
      <div class="row">
   <div class="col-md-3"> <img class="d-block w-100" src="{{ asset('assets/frontend/images/hairdresser.png') }}"alt="Slide" >
       <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Hairdresser</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
   <div class="col-md-3"><img class="d-block w-100" src="{{ asset('assets/frontend/images/mostexpensive-spa-ashtonhawks-04.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Day spa</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">   <img class="d-block w-100" src="{{ asset('assets/frontend/images/massageTherapy-636218646-770x553-1.png') }}"alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Massage</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>

</div>
   <div class="col-md-3">       <img class="d-block w-100" src="{{ asset('assets/frontend/images/growing-beauty.png') }}" alt="Slide" >
   <div class="cl-ffffff robotoregular pt-2"><div class="f-21">Skin care</div>
       <div class="f-18"> Lorem ipsume, Lorem ipsume,</div></div>
</div>
</div>
 </section>
      </div>


    </div><!-- e carousel-inner -->

    <a class="carousel-control-prev carousel-2-prev op-1" href="#carousel-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">prev</span>
    </a>

    <a class="carousel-control-next carousel-2-next op-1" href="#carousel-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">next</span>
    </a>

  </div><!-- e carousel -->
<!-- </section>e section -->


                     </section>
   </section>
   </section> 
   <section class=" main_padding pt-70 text-center">
    <p class="main_title RobotoMedium f-34 cl-000000 fw-600 m-0 ">Specialist Available</p>
    <p class="f-21 m-0 pt-3 cl-616161 robotoRegular ">The best and highly skilled in a specific and restricted field.</p>
    <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
</section>  
<section class="bg-F5F5F5 mt-70">
   <section class="pl-pr-125  pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Waxing Services:</div>
   <div id="carousel-3" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/siskas-hc1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/songe-dave-barbershop1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/siskas-hc1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/songe-dave-barbershop1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/siskas-hc1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/songe-dave-barbershop1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-3" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-3" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>   

              <!-- 2nd -->
              <section class="mt-70">
   <section class="pl-pr-125 pt-5 pb-5">
      <div class="f-34 cl-000000 pb-3 pl-5 robotoMedium">Skin Care:</div>
   <div id="carousel-4" class="carousel slide pl-15 pr-15" data-ride="carousel">

<div class="carousel-inner pb-3" role="listbox">

  <div class="carousel-item active">
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/skin-care-doctors-1.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/unnamed.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/siskas-hc1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr_Bernstein_Active-FX_Male_Face_New_York_NYC_14875-scaled.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/songe-dave-barbershop1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/Dr Oyer Clinic Procedure.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
   
    
  </div>

  <div class="carousel-item">
    
<section class="d-block">
<div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/siskas-hc1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/songe-dave-barbershop1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>

  <div class="carousel-item">
 
  <section class="d-block">
  <div class="row m-0">
<div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/kitty-kat-wax-men-services.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Dino Allen</div>
                                            <div class="card-footer border-0 robotoRegular robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/siskas-hc.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/siskas-hc1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Silvester</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/songe-dave-barbershop.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/songe-dave-barbershop1.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">John samy</div>
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-lg-3 col-sm-12 ">
                                    <a href="##" target="_blank">
                                        <div class="card border-0  borderRadius-10px box_shadow ">
                                            <img src="{{ asset('assets/frontend/images/d6a1d878-3804-439a-a684-0625544321d1-LastDayOut13.png') }}" class="card-img-top" alt="...">
                                            <div class="card-body p-0 m-0 bg-transparent circle card_circle ">
                                                <img src="{{ asset('assets/frontend/images/19uk2-superdry-men-maroon-printed-round-neck-sports-t-shirt_500x500_0.png') }}" alt="" srcset="">
                                            </div>
                                            <div class="border-0 name_Sep cl-ffffff f-26 robotoMedium pl-3">Andy James</div>
                                            
                                            <div class="card-footer robotoRegular bblr bbrr  bg-ffffff pt-4 pb-4">
                                            <div class="d-flex justify-content-between pt-3"> <div>   <h5 class="card-title m-0 RobotoMedium f-21 cl-000000">Join us for some shine</h5></div>
                                              <div>  <p class="card-text m-0 robotoRegular cl-6 cl-3ac754 f-21 ">40 reviews
                                                </p></div></div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
</div>
</section>
  </div>


</div><!-- e carousel-inner -->

<a class="carousel-control-prev carousel-3-prev op-1" href="#carousel-4" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon carousel-3-prev-bg" aria-hidden="true"></span>
  <span class="sr-only">prev</span>
</a>

<a class="carousel-control-next carousel-3-next op-1" href="#carousel-4" role="button" data-slide="next">
  <span class="carousel-control-next-icon carousel-3-next-bg" aria-hidden="true"></span>
  <span class="sr-only">next</span>
</a>

</div><!-- e carousel -->

   </section>
</section>   
              <!-- 2nd End -->




   <section class=" bg-4b4b4b4 mt-5 pt-4 pb-4">
   <div class="d-flex justify-content-center  align-items-center"><img
      src="{{ asset('assets/frontend/images/Copyright © 2021 learnmelive, All Right Reserved learnmelive.png') }}"
      alt="" srcset=""></div>
</section>
@endsection
{{-- content section end --}}
{{-- footer section start --}}
@section('extra-script')
<script src="{{ asset('assets/frontend/js/carousel.js') }}"></script>


@endsection
{{-- footer section end --}}