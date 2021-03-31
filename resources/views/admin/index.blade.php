@extends('layouts.frontend.app') @section('title','Dashboard') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
   

</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')
<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')

<section class="main_padding pt-70 px-50">
    <div class="row m-0 justify-content-center">
        <div class="col-md-3 col-lg-3 col-sm-12 p-0 box_shadow1 borderRadius-12px pt-4 pb-5">
            <p class="border-bottom text-center f-21 cl-616161">Your Profile</p>
            <div class="d-flex align-items-center flex-column">
                <div class="dashboard_id text-center">
                    <img id="blah" class="rounded-circle blah"
                        src="{{(Auth::user()->avatar != null)? asset(Auth::user()->avatar): asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                        alt="" style="height: 118px; width: 118px;" />
                    <form action="{{ url('/profile/change_avatar') }}" method="post" enctype="multipart/form-data"
                        id="avatar_form">
                        @csrf
                        <div class="form-group m-0">
                            <label class="btn img-lbl p-1 mb-0 position-relative" style="top: -34px; left: 43px;">
                                <img src="{{ asset('assets/frontend/images/camera.png') }}" alt="" srcset=""
                                    height="30" />
                                <input type="file" style="display: none;" name="avatar" class="avatar"
                                    onchange="readURL(this);" required accept="image/png, image/jpg, image/jpeg" />
                            </label>
                        </div>
                        {{-- <button class="btn btn-sm bg-3AC574 text-white">Upload Photo</button> --}}
                    </form>
                </div>
                <p class="m-0 f-27 robotoMedium cl-5757575 pt-3">{{ ucwords(Auth::user()->username) }}</p>
                @if (Auth::user()->user_type == 'specialist')

                <p class="f-18 cl-a8a8a8a robotoMedium m-0 pt-1">{{ ucwords(Auth::user()->specialist->category->name) }}
                </p>
                @endif
            </div>

            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link {{ session('portfolio')? '':'active' }} cl-000000" id="v-pills-profile-tab"
                    data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                    aria-selected="true">Profile</a>
               
                <a class="nav-link cl-000000" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password"
                    role="tab" aria-controls="v-pills-password" aria-selected="false">Password</a>
            </div>
        </div>

        <div class="col-md-8 col-lg-8 col-sm-12 pt-4 p-0 ml-4 box_shadow1 borderRadius-12px">
            <p class="border-bottom pl-3 f-21 cl-616161">Edit Your Personal Settings</p>
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade {{ session('portfolio')? '':'show active' }} " id="v-pills-profile"
                    role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <p class="pl-3 f-21 cl-000000">Personal Info</p>
                    <form action="{{ route('profile.update',Auth::user()->id) }}" method="post"
                        id="client_profile_form">
                        @csrf @method('PUT')
                        <div class="pl-5 pr-5 first-step-html-change">
                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-user d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0"
                                            placeholder="Enter username" name="username" id="username"
                                            onkeyup="usernamePublicProfile(this);" aria-label=""
                                            aria-describedby="basic-addon1" value="{{ Auth::user()->username }}" />
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-user d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <input type="text" class="w-100 form-control border-0" placeholder="Enter name"
                                            name="name" id="name" aria-label="" aria-describedby="basic-addon1"
                                            value="{{ Auth::user()->name }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between">
                                <div
                                    class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-map-marker d-flex justify-content-center align-items-center"></em>
                                    </div>
                                    <div class="w-100">
                                        <select id="country" name="country"
                                            class="form-control country-select w-100 border-0">
                                            @foreach (countries() as $country)
                                                <option value="{{ ucwords(strtolower($country['name'])) }}" data-code="{{ $country['code'] }}">{{ $country['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div
                                    class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                    <div class="d-flex"><em
                                            class="fa fa-envelope d-flex justify-content-center align-items-end pb-2"></em>
                                    </div>
                                    <div class="w-100 d-flex align-items-end">
                                        <input type="email" class="w-100 form-control border-0"
                                            placeholder="Enter your email" name="email" id="email" aria-label=""
                                            aria-describedby="basic-addon1" value="{{ Auth::user()->email }}" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row justify-content-end">
                                <button type="submit" class="btn btn-sm bg-3AC574 text-white">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
               

                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                    <p class="pl-3 f-21 cl-000000">Password Setting</p>
                    <form action="{{ url('password') }}" method="POST">
                        @csrf
                        <div class="px-5">
                            <div class="form-group">
                                <label for="old_password">Old Password*</label>
                                <input id="old_password" name="old_password" type="password" class="form-control"
                                    value="{{ old('old_password') }}" autocomplete="first_name"
                                    placeholder="Enter Old Password" />
                            </div>
                            <div class="form-group">
                                <label for="new_password">New Password*</label>
                                <input id="new_password" name="new_password" type="password" class="form-control"
                                    value="{{ old('new_password') }}" placeholder="Enter New Password"
                                    autocomplete="new-password" />
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">Confirm New Password*</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="new_password_confirmation" placeholder="Re-Type New Password"
                                    autocomplete="new-password" />
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
            $("#avatar_form").submit();
        }
    }
    $('.work_status').on('click',function(){
        var bid = $(this);
        var bid_id = $(this).data('bid');
        var work_status = $(this).attr('data-work_status');
        $.ajax({
            type: 'post',
            url: "{{ route('bid_work_status') }}",
            data: {
                _token: '{{ csrf_token() }}',
                bid_id: bid_id,
                work_status:work_status,
               
            },
            success: function (data) {
                if(data == 'Completed'){
                    bid.removeClass('btn-success').addClass('btn-danger');
                    bid.text('Mark Un-Complete')
                    bid.attr('data-work_status','0')
                }if(data == 'Un-Complete'){
                    bid.attr('data-work_status','1')
                    bid.removeClass('btn-danger').addClass('btn-success');
                    bid.text('Mark Completed')

                }
            }
        })
    })
</script>
@endsection {{-- footer section end --}}
