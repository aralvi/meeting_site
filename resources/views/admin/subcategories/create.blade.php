@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }

    .thumb:last-child {
        margin-bottom: 0;
    }

    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    /* .thumb figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
    } */
    .thumb figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    .ui-sortable-placeholder {
        border: 1px dashed black !important;
        visibility: visible !important;
        background: #eeeeee78 !important;
    }

    .ui-sortable-placeholder * {
        visibility: hidden;
    }

    .RearangeBox.dragElemThumbnail {
        opacity: 0.6;
    }

    .RearangeBox {
        width: 180px;
        height: 240px;
        padding: 10px 5px;
        cursor: all-scroll;
        float: left;
        display: inline-block;
        margin: 5px !important;
        text-align: center;
    }

    .IMGthumbnail {
        max-width: 168px;
        height: 80%;
        margin: auto;
        background-color: #ececec;
        padding: 2px;
        border: none;
    }

    .IMGthumbnail img {
        width: 100%;
        height: 100%;
    }

    .imgThumbContainer {
        margin: 4px;
        border: solid;
        display: inline-block;
        justify-content: center;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.14);
        -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
    }

    .imgThumbContainer>.imgName {
        text-align: center;
        padding: 2px 6px;
        margin-top: 4px;
        font-size: 13px;
        height: 20%;
        overflow: hidden;
    }

    .imgThumbContainer>.imgRemoveBtn {
        position: absolute;
        right: 2px;
        top: 2px;
        cursor: pointer;
        display: none;
    }

    .RearangeBox:hover>.imgRemoveBtn {
        display: block;
    }

    .img-thumbnail {
        height: 225px !important;
    }

    .px-50 {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #3ac574;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #3ac574;
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">SubCategory</p>

<p class="pl-3 f-21 cl-000000">Add SubCategory</p>


<div class="modal fade " tabindex="-1" role="dialog" id="add-modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title ml-4">Add SubCategory</h5>
                <button type="button" class="close mr-2 close{{$appointment->id}}" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="{{ route('subcategories.store') }}" method="post" id="add-subcategories-form" >
                    @csrf
                    <div class="pl-5 pr-5 first-step-html-change">
                    
                        <div class="row justify-content-between">
                            <div
                                class="input-group mb-3 col-md-5 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-center"></em>
                                </div>
                                <div class="w-100">
                                    <select id="country" name="category" class="form-control country-select w-100 border-0">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div
                                class="input-group mb-3 border-input pt-4 d-flex flex-nowrap col-md-5 border border-top-0 border-left-0 border-right-0">
                                <div class="d-flex"><em class="fa fa-list d-flex justify-content-center align-items-end pb-2"></em>
                                </div>
                                <div class="w-100 d-flex align-items-end">
                                    <input type="text" class="w-100 form-control border-0" placeholder="Enter SubCategory Name" name="name"
                                            aria-label="" aria-describedby="basic-addon1" value="" />
                                </div>
                            </div>
                        </div>
                
                        <div class="row justify-content-between">
                            <div class="input-group mb-3 col-md-12 border-input pt-4 d-flex flex-nowrap border border-top-0 border-left-0 border-right-0">
                                <div>
                                    
                                    <em class="fa fa-bars"></em>
                                </div>
                                <div class="w-100">
                                    <textarea name="description" type="text" id="description" class="form-control border-0" placeholder="Type SubCategory Description..."
                                        ></textarea>
                                </div>
                            </div>
                        </div>
                
                        <div class="row justify-content-end">
                            <button type="button" class="btn btn-sm bg-3AC574 text-white" onclick="addSubCategory();">Add</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
                                        @if($appointment->rating == null)

                                            <button type="button" class="btn btn-sm btn-success add-review-{{$appointment->id}} ml-1" data-toggle="modal"
                                        data-target="#review_modal{{$appointment->id}}">Add Review</button>

                                        @endif







@endsection {{-- content section end --}} {{-- footer section start --}} @section('extra-script')

<script>

function addSubCategory()
{
    var myform = document.getElementById("add-subcategories-form");
    var fd = new FormData(myform);
    fd.append("_token", "{{ csrf_token() }}");
    $.ajax({
        url: "{{ route('subcategories.store') }}",
        type: "post",
        processData: false,
        contentType: false,
        data: fd,
        success: function (data) {
            if (data.success == true) {
                swal('success', data.message, 'success')
                    .then((value) => {
                        window.location = "{{ route('subcategories.index') }}";
                    });
            } else {
                if (data.hasOwnProperty('message')) {
                    var wrapper = document.createElement('div');
                    var err = '';
                    $.each(data.message, function (i, e) {
                        err += '<p>' + e + '</p>';
                    })

                    wrapper.innerHTML = err;
                    swal({
                        icon: "error",
                        text: "{{ __('Please fix following error!') }}",
                        content: wrapper,
                        type: 'error'
                    });
                    //setTimeout("pageRedirect()", 3000);
                    //$('.actions  li:first-child a').click();
                }
            }

        }
    });
}

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

</script>
@endsection {{-- footer section end --}}
