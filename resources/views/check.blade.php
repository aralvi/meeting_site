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
        <div class="col-md-6 borderRadius-10px p-0  box_shadow1 border-top-green-10">
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
    <div class="col-md-8 px-2 borderRadius-10px box_shadow1">
        <div class="">
            <div class="d-flex justify-content-between cl-3ac754 px-5">
                <p class="f-24 mb-0">Job Description</p>
                <p class="f-24 mb-0">Amount</p>
            </div>
            <hr>
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





@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script') @endsection
