@extends('layouts.frontend.app') @section('title','Client | Dashboard') {{-- head start --}} @section('extra-css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/utility.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/navbar.css') }}" />
<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }
    .f-145{
        font-size: 145px;
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

<div class="container-fluid">

    <div class="row  mt-5 justify-content-around">
        <div class="col-md-6 borderRadius-10px pl-0 pr-0   box_shadow1 border-top-green-10">
            <div class=" px-5 py-3">
                <div class="cl-3ac754 f-34">
                    Today's Appointments <span class="text-muted cl-6A6A6A">(4)</span>
                </div>
                <div class="card-body px-0">
                    <div class="row m-0 p-0">
                        <div class="col-md-2 pl-0 py-0">
                            <h1 class="h1 f-145">4</h1>
                        </div>
                        <div class="col-md-10 p-0 cl-6A6A6A">
                            <div class=" mt-3 d-flex justify-content-around align-items-center bg-F2F5FA box_shadow2">
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Kevin Dawn</p>
                                    <h3>Hair Style Consultation</h3>
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Time</p>
                                    <p>00:09 AM - 10:00 AM</p>
                                </div>
                            </div>
                            <div class=" mt-3 d-flex justify-content-around align-items-center bg-F2F5FA box_shadow2">
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Kevin Dawn</p>
                                    <h3>Hair Style Consultation</h3>
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Time</p>
                                    <p>00:09 AM - 10:00 AM</p>
                                </div>
                            </div>
                            <div class=" mt-3 d-flex justify-content-around align-items-center bg-F2F5FA box_shadow2">
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Kevin Dawn</p>
                                    <h3>Hair Style Consultation</h3>
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Time</p>
                                    <p>00:09 AM - 10:00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-md bg-3ac574 cl-ffffff">Update</button>
                    <a href="javascript:void(0)" class="cl-3ac754">Previous Appointments >></a>
                </div>
            </div>
        </div>
        <div class="col-md-5 py-5  borderRadius-10px p-0  box_shadow1 border-top-green-10">
            <div class="row px-5 align-items-center">
                <div class="col-md-8">
                   <p class="cl-3ac754 f-34 mb-0"> Available Banlance $</p>
                </div>
                <div class="col-md-4">
                   <p class="cl-6A6A6A f-18 mb-0"> Available Funds</p>
                </div>
            </div>
            <div class="row px-5 align-items-center">
                <div class="col-md-12">
                   <p class=" cl-6A6A6A mb-0">Main Account</p>
                </div>
            </div>
                <div class="row px-5 align-items-center">
                <div class="col-md-7">
                   <h3 class="">Benjamin Carlos</h3>
                </div>
                <div class="col-md-1">
                        <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="">
                        
                    </div>
                <div class="col-md-4">
                   <h3 class="mb-0 f-45">$68.789 </h3>
                </div>
                <div class="col-md-12 text-right">

                    <p class=" cl-6A6A6A f-18 mb-0">Updated 2h ago</p>
                </div>
            </div>
            <br> <br>
                <hr>
                <div class="row px-5 align-items-center">
                <div class="col-md-7">
                   <h3 class="cl-3ac754">Total Balance $</h3>
                </div>
                <div class="col-md-1">
                        <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="">
                        
                    </div>
                <div class="col-md-4">
                   <h3 class="mb-0 f-45">$28,000 </h3>
                </div>
                <div class="col-md-12 text-right">

                    <p class=" cl-6A6A6A f-18 mb-0">This Month So Far</p>
                </div>
            </div>
                
        </div>
       
    </div>

<div class="row justify-content-around mt-5">
    <div class="col-md-8 pb-5  borderRadius-10px box_shadow1 pl-5 pr-5 p-0">
      <div class="d-flex mt-3 justify-content-between ">
          <div class="cl-3ac754 robotoMedium f-24">Job Description</div>
          <div class="f-24 cl-3ac754 robotoMedium">Amount</div>
      </div>
      <div class="mt-2 border w-100"></div>
      <div class="d-flex mt-4 justify-content-between ">
          <div><div class="cl-000000 robotoMedium f-24">Skin Specialists</div>
          <div class="w-75 f-18 robotoRegular cl-6b6b6b ">It is a long established fact that a reader will be distracted by the readable content of a page 
when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt=""></div>
        <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted </div><div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">7 minutes ago</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt=""></div>
        <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">Skin specialist, Skin Care, Black marks specialist, Skin caring Facilities</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2 pl-4"><div><div class="d-flex"><div class="d-flex">
        <div>  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
        <div class="pl-1 cl-3ac754 f-14 robotoRegular d-flex align-items-center reviews pl-2 pr-2 pt-1 pb-1 ml-2">110 reviews</div>
    
    </div></div>
        <div></div></div>
        </div>
       <div class="robotoMedium text-center">    <div class="f-24 cl-000000 white-spaces robotoMedium">$40 - $80</div><div class="f-21 cl-6b6b6b">USD</div></div>
      </div>
      <div class="mt-3 border w-100"></div>
      <div class="d-flex mt-4 justify-content-between ">
          <div><div class="cl-000000 robotoMedium f-24">Skin Specialists</div>
          <div class="w-75 f-18 robotoRegular cl-6b6b6b ">It is a long established fact that a reader will be distracted by the readable content of a page 
when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt=""></div>
        <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted </div><div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">7 minutes ago</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt=""></div>
        <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">Skin specialist, Skin Care, Black marks specialist, Skin caring Facilities</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2 pl-4"><div><div class="d-flex"><div class="d-flex">
        <div>  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
        <div class="pl-1 cl-3ac754 f-14 robotoRegular d-flex align-items-center reviews pl-2 pr-2 pt-1 pb-1 ml-2">110 reviews</div>
    
    </div></div>
        <div></div></div>
        </div>
       <div class="robotoMedium text-center">    <div class="f-24 cl-000000 white-spaces robotoMedium">$40 - $80</div><div class="f-21 cl-6b6b6b">USD</div></div>
      </div>
      <div class="mt-3 border w-100"></div>
      <div class="d-flex mt-4 justify-content-between ">
          <div><div class="cl-000000 robotoMedium f-24">Skin Specialists</div>
          <div class="w-75 f-18 robotoRegular cl-6b6b6b ">It is a long established fact that a reader will be distracted by the readable content of a page 
when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt=""></div>
        <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted </div><div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">7 minutes ago</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt=""></div>
        <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">Skin specialist, Skin Care, Black marks specialist, Skin caring Facilities</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2 pl-4"><div><div class="d-flex"><div class="d-flex">
        <div>  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
        <div class="pl-1 cl-3ac754 f-14 robotoRegular d-flex align-items-center reviews pl-2 pr-2 pt-1 pb-1 ml-2">110 reviews</div>
    
    </div></div>
        <div></div></div>
        </div>
       <div class="robotoMedium text-center">    <div class="f-24 cl-000000 white-spaces robotoMedium">$40 - $80</div><div class="f-21 cl-6b6b6b">USD</div></div>
      </div>
      <div class="mt-3 border w-100"></div>
      <div class="d-flex mt-4 justify-content-between ">
          <div><div class="cl-000000 robotoMedium f-24">Skin Specialists</div>
          <div class="w-75 f-18 robotoRegular cl-6b6b6b ">It is a long established fact that a reader will be distracted by the readable content of a page 
when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt=""></div>
        <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted </div><div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">7 minutes ago</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2"><div><div class="d-flex"><div>  <img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt=""></div>
        <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center ">Skin specialist, Skin Care, Black marks specialist, Skin caring Facilities</div>
    
    </div></div>
        <div></div></div>
        <div class="d-flex pt-2 pl-4"><div><div class="d-flex"><div class="d-flex">
        <div>  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
        <div class="pl-2">  <img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt=""></div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    </div>
        <div class="pl-1 cl-3ac754 f-14 robotoRegular d-flex align-items-center reviews pl-2 pr-2 pt-1 pb-1 ml-2">110 reviews</div>
    
    </div></div>
        <div></div></div>
        </div>
       <div class="robotoMedium text-center">    <div class="f-24 cl-000000 white-spaces robotoMedium">$40 - $80</div><div class="f-21 cl-6b6b6b">USD</div></div>
      </div>
      <div class="mt-3 border w-100"></div>

    </div>
    <div class="col-md-3   borderRadius-10px box_shadow1">
        <div class="card text-center">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            <div class="card-footer text-muted">
                2 days ago
            </div>
        </div>
    </div>
</div>
</div>


<br><br><br><br><br><br><br>


@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script') @endsection
