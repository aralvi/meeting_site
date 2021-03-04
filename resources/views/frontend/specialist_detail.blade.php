@extends('layouts.frontend.app')
@section('title','Specialist Detail')
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
		
    <section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
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
          <div class=" f-44 robotoMedium">{{ ucwords($specialist->user->name) }}</div>
          <div class="d-flex border-bottom pb-3">
            <div class="pr-3 robotoMedium">{{ ucwords($specialist->category->name) }}</div>
            @if($specialist->address !=null)
              <div class="border-left"></div>
              <div class="pl-3 robotoRegular">{{ ucfirst($specialist->address) }}</div>
            @endif
            
          </div>
          @if($specialist->description !=null)
            <div class="border-bottom pb-3">
              <div class="robotoMedium f-18 pt-3">About Us</div>
                <div class="robotoRegular f-18 text-justify pt-3">{{$specialist->description}}
                </div>
            </div>
          @endif
          

          @if($specialist->specifications !=null)
            <div class="border-bottom pb-3  f-18">
              <div class="robotoMedium pt-3">Specifications:</div>
              <div class="robotoRegular pt-3">Confirmed Appointment</div>
              <div class="robotoRegular pt-3">Timings Decided</div>
         
            </div>
          @endif
          
          @if($specialist->languages !=null)
            <div class="border-bottom pb-3 f-18">
              <div class="robotoMedium pt-3">Languages</div>
              <div class="d-flex pt-3  robotoRegular">
                <div><div>English</div>   <div class="pt-3">French</div> <div class="pt-3">Portuguese</div></div>
                <div class="pl-5"><div>Primary</div><div class="pt-3">Secondary</div><div class="pt-3">Secondary</div></div>
              </div>
            </div>
          @endif
          

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
        </div>
      </section>
    </section>

    @if($specialist->services->count() > 0)
      <section class="main_padding pt-5">
        <div class="row m-0 p-0">
          <div class="robotoMedium cl-000000 f-34 pt-2 d-flex align-items-end">Bookings:</div>
          <div class="col-md-3 ml-auto p-0">
            <div class="d-flex m-0">  
              <div class="pt-4 w-100"> 
                <input type="email" placeholder="Search for services" class="robotoRegular h-44 cl-6b6b6b    bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
              </div>
              <div class="pt-4 pl-2"> 
                <button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2" type="submit"><img src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button>
              </div>
            </div>
          </div>

          <div class="table-responsive tableFixHead table_scroll mt-5 border robotoRegular">
            <table id="boxes-list" class="table m-0 header-fixed">
              
              <thead class="sticky-top bg-white cl-3ac754 ">
                <tr class="bg-white robotoRegular ">
                  <th scope="col">Sr</th>
                  <th scope="col">Service</th>
                  <th scope="col">Category</th>
                  <th scope="col">Sub Category</th>
                  <th scope="col">Timing</th>
                  <th scope="col">Rate</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody class="table_scroll">
                <tr class="border-bottom">
                  <th scope="row">1</th>
                  <td>Basic hair cut no beard</td>
                  <td>Basic hair cut no beard</td>   
                  <td>$25.00</td>
                  <td>Kids cut (12 & under)</td>
                  <td><button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 login_button" type="submit">Book</button></td>
                </tr>
              </tbody>
            </table>
          </div>
                
        </div>
      </section>
    @endif
    

    <section class=" main_padding pt-70 text-center">
                               <p class="main_title robotoMedium  f-34 cl-000000  m-0">Portfolio</p>
                               <p class="f-21 m-0 pt-3 cl-616161 robotoRegular">The best and highly skilled Performance done previously</p>
                               <img src="{{ asset('assets/frontend/images/greencurve.png') }}" class="img-fluid pt-3" alt="">
                               </section>

                               <section class=" main_padding pt-70 ">
                                <div class="row m-0">
                                  <div class="col-lg-7 col-md-7 col-sm-12 pl-0 pr-0 bg_img_8 d-flex flex-column  justify-content-end">
                                 
                                    <div class="f-34 robotoMedium cl-ffffff pl-4 porfolio_images_title">
                                    / 01
                                    </div>
                                    <div class="f-34 robotoMedium cl-ffffff pl-4 porfolio_images_title">From Fashion To better look</div>
                                    <div class="f-26 robotoRegular cl-ffffff pl-4 pb-3 porfolio_images_subtitle">Fashion in Demand</div>
                                    <div class="w-100 bg-000000a6 borderRadius-10px ">
                                      <div class="d-flex pt-3 pb-3 justify-content-end pr-4 ">
                                        <div><img src="{{ asset('assets/frontend/images/Path 103.png') }}"alt="" srcset=""><span class="cl-8b8b8b pl-1 robotoRegular">1</span></div>
                                        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Path 104.png') }}" alt="" srcset=""><span class="cl-8b8b8b pl-1 robotoRegular">10</span></div>

                                      </div>
                                    </div>




                                  </div>
                                  <div class="col-lg-5 col-md-5 col-sm-12 pr-0">
                                    <div class="bg_imgcol-5 d-flex flex-column  justify-content-end">
                                    <div class="f-34 robotoMedium cl-ffffff pl-4 porfolio_images_title">
                                    / 01
                                    </div>
                                    <div class="f-34 robotoMedium cl-ffffff pl-4 porfolio_images_title">From Fashion To better look</div>
                                    <div class="f-26 robotoRegular cl-ffffff pl-4 pb-3 porfolio_images_subtitle">Fashion in Demand</div>
                                    <div class="w-100 bg-000000a6 borderRadius-10px ">
                                      <div class="d-flex pt-3 pb-3 justify-content-end pr-4 ">
                                        <div><img src="{{ asset('assets/frontend/images/Path 103.png') }}"alt="" srcset=""><span class="cl-8b8b8b pl-1 robotoRegular">1</span></div>
                                        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Path 104.png') }}" alt="" srcset=""><span class="cl-8b8b8b pl-1 robotoRegular">10</span></div>

                                      </div>
                                    </div>

                                  </div>
                                            <!-- 2nd -->
                                            <div class="bg_imgcol-5_two d-flex flex-column  justify-content-end ">
                                    <div class="f-34 robotoMedium cl-ffffff pl-4 porfolio_images_title">
                                    / 01
                                    </div>
                                    <div class="f-34 robotoMedium cl-ffffff pl-4 porfolio_images_title">From Fashion To better look</div>
                                    <div class="f-26 robotoRegular cl-ffffff pl-4 pb-3 porfolio_images_subtitle">Fashion in Demand</div>
                                    <div class="w-100 bg-000000a6 borderRadius-10px ">
                                      <div class="d-flex pt-3 pb-3 justify-content-end pr-4 ">
                                        <div><img src="{{ asset('assets/frontend/images/Path 103.png') }}"alt="" srcset=""><span class="cl-8b8b8b pl-1 robotoRegular">1</span></div>
                                        <div class="pl-3"><img src="{{ asset('assets/frontend/images/Path 104.png') }}" alt="" srcset=""><span class="cl-8b8b8b pl-1 robotoRegular">10</span></div>

                                      </div>
                                    </div>

                                  </div>



                                            <!-- end -->
                                </div>
                                </div>
                               </section>
                               <section class=" main_padding pt-5 text-center">
                               <button href="" class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pl-5 pr-5 " type="submit">See all</button>
                               </section>



                               <section class=" main_padding pt-5">
                               <div class="row m-0">
                                 <div class="col-md-8 col-lg-8 pl-0">
                                   <div class="d-flex">
                                     <div class="f-34 cl-000000 robotoMedium">Reviews</div>
                                     <div class="d-flex align-items-center pl-4">
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                     


                                     </div>
                                   </div>
                                   <div class="w-75 f-21 RobotoRegular cl-616161 text-justify">Reviews are no joke! Booksy values authentic reviews and only verifies them 
if we know the reviewer has visited this business.</div>

                                               <!-- COMMENTS SECTION START -->
                              <div class="d-flex pt-5">
                                <div class="img_commentSection"><img src="{{ asset('assets/frontend/images/commentsectioniimg.png') }}" alt="" srcset=""></div>
                                <div class="content_commentSection pl-4">
                              <div>
                              <div class="d-flex">
                                 <div class="d-flex align-items-center pr-3">
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                     


                                     </div>
                                 <div class="f-26 RobotoRegular cl-616161 borderLeft pl-3 pr-3 comment_SectionName">Gisella P.</div>
                                 <div class="f-21 RobotoRegular cl-616161 borderLeft pl-3 comment_SectionDate">Dec 20, 2020</div>
                                 </div>
                              </div>
                              <div class="w-75 f-26 RobotoRegular cl-616161 pt-3 text-justify Comment">This barber is the best in town!!!! My son enjoys his work of 
art as welll!!!! I would give him 10 stars...</div>
                                                  <div class="d-flex f-21 robotoMedium pt-3">  <div><a class="cl-a2a2a2 comment_SectionLRD" href="##">Like</a></div>
                                                  <div class="pl-4"><a class="cl-a2a2a2 comment_SectionLRD" href="##">Dislike</a></div>
                                                  <div class="pl-4"><a class="cl-a2a2a2 comment_SectionLRD" href="##">Reply</a></div>
                                                </div>
                                </div>
                              </div>
                                               <!-- 2 -->
                                               <div class="d-flex pt-5">
                                <div class="img_commentSection"><img src="{{ asset('assets/frontend/images/commentsectioniimg.png') }}" alt="" srcset=""></div>
                                <div class="content_commentSection pl-4">
                              <div>
                              <div class="d-flex">
                                 <div class="d-flex align-items-center pr-3">
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                     


                                     </div>
                                 <div class="f-26 RobotoRegular cl-616161 borderLeft pl-3 pr-3 comment_SectionName">Gisella P.</div>
                                 <div class="f-21 RobotoRegular cl-616161 borderLeft pl-3 comment_SectionDate">Dec 20, 2020</div>
                                 </div>
                              </div>
                              <div class="w-75 f-26 RobotoRegular cl-616161 pt-3 text-justify Comment">This barber is the best in town!!!! My son enjoys his work of 
art as welll!!!! I would give him 10 stars...</div>
                                                  <div class="d-flex f-21 robotoMedium pt-3">  <div><a class="cl-a2a2a2 comment_SectionLRD" href="##">Like</a></div>
                                                  <div class="pl-4"><a class="cl-a2a2a2 comment_SectionLRD" href="##">Dislike</a></div>
                                                  <div class="pl-4"><a class="cl-a2a2a2 comment_SectionLRD" href="##">Reply</a></div>
                                                </div>
                                </div>
                              </div>
                                               <!-- end -->
                                               <!-- 3 -->
                                               <div class="d-flex pt-5">
                                <div class="img_commentSection"><img src="{{ asset('assets/frontend/images/commentsectioniimg.png') }}" alt="" srcset=""></div>
                                <div class="content_commentSection pl-4">
                              <div>
                              <div class="d-flex">
                                 <div class="d-flex align-items-center pr-3">
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 71.png') }}" alt="" srcset=""></div>
                                     


                                     </div>
                                 <div class="f-26 RobotoRegular cl-616161 borderLeft pl-3 pr-3 comment_SectionName">Gisella P.</div>
                                 <div class="f-21 RobotoRegular cl-616161 borderLeft pl-3 comment_SectionDate">Dec 20, 2020</div>
                                 </div>
                              </div>
                              <div class="w-75 f-26 RobotoRegular cl-616161 pt-3 text-justify Comment">This barber is the best in town!!!! My son enjoys his work of 
art as welll!!!! I would give him 10 stars...</div>
                                                  <div class="d-flex f-21 robotoMedium pt-3">  <div><a class="cl-a2a2a2 comment_SectionLRD" href="##">Like</a></div>
                                                  <div class="pl-4"><a class="cl-a2a2a2 comment_SectionLRD" href="##">Dislike</a></div>
                                                  <div class="pl-4"><a class="cl-a2a2a2 comment_SectionLRD" href="##">Reply</a></div>
                                                </div>
                                </div>
                              </div>
                                               <!-- end -->


                                 </div>
                                 <div class="col-md-4 p-0">
                                 <section>
                                   <div class="row m-0 pt-2 card_boxShadow pt-4 pb-3">
                                        <div class="col-md-5 text-center">
                                       <div class="f-41 cl-616161 robotoRegular">5.0<span class="robotoRegular f-16 cl-979797">/5</span></div> 
                                       <div class="d-flex align-items-center justify-content-center">
                                       <div><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                       <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 70.png') }}" alt="" srcset=""></div>
                                     


                                     </div>
                                     <div class="f-19 robotoRegular cl-a2a2a2 pt-3">150 reviews</div>
                                        </div>
                                      
                                        <div class="progressBarmainDiv robotoRegular cl-a2a2a2 col-md-7 pl-0">
                                          <div class="d-flex align-items-center">
                                            <div class="f-16 pr-2">5</div>
                                            <div class="progress w-261 h-6px" >
  <div class="progress-bar bg-3ac574 borderRadius-12px" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      

                                                      
                                            <div class="pl-2">85%</div>
                                          </div>
                                          <div class="d-flex align-items-center pt-2">
                                            <div class="f-16 pr-2">4</div>
                                            <div class="progress w-261 h-6px" >
  <div class="progress-bar bg-3ac574 borderRadius-12px" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      

                                                      
                                            <div class="pl-2">40%</div>
                                          </div>
                                          <div class="d-flex align-items-center pt-2">
                                            <div class="f-16 pr-2">3</div>
                                            <div class="progress w-261 h-6px" >
  <div class=" borderRadius-12px" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      

                                                      
                                            <div class="pl-2">0</div>
                                          </div>
                                          <div class="d-flex align-items-center pt-2">
                                            <div class="f-16 pr-2">2</div>
                                            <div class="progress w-261 h-6px" >
  <div class=" borderRadius-12px" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      

                                                      
                                            <div class="pl-2">0</div>
                                          </div>
                                          <div class="d-flex align-items-center pt-2">
                                            <div class="f-16 pr-2">1</div>
                                            <div class="progress w-261 h-6px" >
  <div class=" borderRadius-12px" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
      

                                                      
                                            <div class="pl-2">0</div>
                                          </div>

                                        </div>
                                   </div>
                                 </section>
                                 </div>
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
