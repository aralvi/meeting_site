@extends('layouts.frontend.app') @section('title','Appointments') {{-- head start --}} @section('extra-css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />

<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
 @include('includes.frontend.navbar')
</section>

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
            <p class="border-bottom text-center">Your Profile</p>
            <div class="d-flex align-items-center flex-column">
                <div class="dashboard_id text-center">
                    <img id="blah" class="rounded-circle blah" src="{{(Auth::user()->avatar != null)? asset(Auth::user()->avatar): asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}" alt="" style="height: 118px;width:118px;"/>
                    <form action="{{ url('/profile/change_avatar') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group m-0">

                            <label class="btn img-lbl  p-1 mb-0 position-relative " style="top: -34px; left:43px;">
                                <img src="{{ asset('assets/frontend/images/camera.png') }}" alt="" srcset="" height="30">
                                <input type="file" style="display: none;" name="avatar" class="avatar" onchange="readURL(this);" required accept="image/png, image/jpg, image/jpeg"/>
                            </label>
                        </div>
                        <button class="btn btn-sm btn-primary">Upload Photo</button>
                    </form>
                    
                </div>

                <p class="m-0 f-27 robotoMedium cl-5757575 pt-3">Caroline Johnson</p>
                <p class="f-18 cl-a8a8a8a robotoMedium m-0 pt-1">Hair Stylist</p>
            </div>

            {{-- <ul class="nav nav-tabs border-0 flex-column robotoRegular f-18 side_navpills-1 pt-4">
                <li data-toggle="tab" href="#home" class="cl-616161 w-100 rounded pt-3 pb-3 pl-4 mt-1">Gift Cards</li>
                <li class="pt-3 pb-3 mt-1 pl-4 bg-3ac574 active cl-ffffff appointment" data-toggle="tab" href="#menu1">Appointments</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu2" class="cl-616161">Favourites</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu3" class="cl-616161">Account & Settings</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu4" class="cl-616161">Reviews</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu5" class="cl-616161">Payments</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu6" class="cl-616161">Like us on Facebook</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu7" class="cl-616161">Terms of Service</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu8" class="cl-616161">Privacy Policy</li>
                <li class="pt-3 pb-3 mt-1 pl-4" data-toggle="tab" href="#menu9" class="cl-616161">Call</li>
            </ul> --}}
        </div>

        <div class="col-md-7 col-lg-7 col-sm-12 p-0 ml-4 box_shadow1 borderRadius-12px">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for=""></label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection {{-- content section end --}} {{-- footer section start --}} 
@section('extra-script') 
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

</script>
@endsection {{-- footer section end --}}
