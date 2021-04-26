@extends('layouts.frontend.setting') @section('title','Dispute Content') {{-- head start --}} @section('extra-css')
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

    .px-50 {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .swal-button--confirm {background-color: #3ac574; border:none;outline: none;}
    .swal-button:active {background-color: #3ac574; border:none;outline: none;}
</style>
@endsection {{-- head end --}} {{-- content section start --}} 
@section('navbar')
    
<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')
    <p class="border-bottom pl-3 f-21 cl-616161">Dispute Content</p>            
    <form id="add-dispute-form" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="project_id" value="{{ $project }}">
        <input type="hidden" name="sender_id" value="{{Auth::user()->id }}">
        <input type="hidden" name="reciever_id" value="{{ $id }}">
        <input type="hidden" name="project_type" value="{{ Request::has("project_type")? Request::get('project_type'):'' }}">
        <div class="px-5">
            <div class="form-group">
                <label for="subject">Subject*</label>
                <input id="subject" name="subject" class="form-control"
                    value="{{ old('subject') }}"
                    placeholder="Enter Subject" />
            </div>

            <div class="form-group">
                <label for="comment">Comment*</label>
                <textarea id="comment" name="comment" class="form-control"
                    placeholder="Enter Comment">{{ old('comment') }}</textarea>
            </div>

            <div class="d-flex w-100 align-items-center justify-content-between">
                    <div style="form-group col-md-11 p-0">
                        <label for="files">Upload Dispute Video/Image </label>
                        <input id="files" type="file" name="dispute_file" onchange="fileValidation();" class="form-control border-0" >
                    </div>
        
                    <div class="col-md-1 p-0 justify-content-end">
                        <button type="button" onclick="sendDispute();" class="ml-auto btn btn-sm pl-2 pr-2  bg-3AC574 text-white">Send</button>
                    </div>
                </div>
        </div>
    </form>
@endsection {{-- content section end --}} 

@section('extra-script')

    <script>
        function fileValidation() {
            var fileInput = document.getElementById('files');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif|\.JPG|\.JPEG|\.PNG|\.GIF|\.mp4|\.avi|\.mov|\.wmv)$/i;
            if (!allowedExtensions.exec(filePath)) {
                swal({
                    icon: "error",
                    text: "{{ __('Invalid file type only image/video is allowed') }}",
                });
                fileInput.value = '';
                return false;
            } 
            // else 
            // {
            //     if (fileInput.files && fileInput.files[0]) {
            //         const name = fileInput.files[0].name;
            //         const lastDot = name.lastIndexOf('.');
            //         const fileName = name.substring(0, lastDot);
            //         const ext = name.substring(lastDot + 1).toLowerCase();
            //         var reader = new FileReader();
            //         reader.onload = function(e) {
            //             var html = '<span style="position: relative; cursor: pointer; right: -96px; height: 20px; top: 4px; width: 20px; border-radius: 50%; outline: none !important;" onclick="deleteImage();"><i class="fa fa-times" aria-hidden="true" style="position: absolute; color: red; right: 4px; top: 1px; height: 14px; font-size: 12px;"></i></span>';
            //             if(ext=='pdf')
            //             {
            //                 html+='<div class="d-flex flex-column"><i class="fa fa-file-pdf-o" aria-hidden="true" style=" position: relative; top: 22px;"></i><div style=" position: relative; top: 25px;">'+name.substring(0,10) + "..."+'</div></div>';
            //             }else if(ext=='docx' || ext=='doc'){
            //                 html += '<div class="d-flex flex-column"><i class="fa fa-file-word-o" aria-hidden="true" style=" position: relative; top: 22px;"></i><div style=" position: relative; top: 25px;">'+name.substring(0, 10) + "..."+'</div></div>';
            //             }else{
            //                 html+='<img src="' + e.target.result+ '" style="height:100px;width:100px;cursor:pointer;" onclick="imagePopUp(this);"/>';
            //             }
            //             document.getElementById('imagePreview').innerHTML = html;
                            
            //         };
                      
            //         reader.readAsDataURL(fileInput.files[0]);
            //     }
            // }
        }

        function sendDispute()
        {
            var myform = document.getElementById("add-dispute-form");
            var fd = new FormData(myform);
            $.ajax({
                url:"{{ route('disputes.store') }}",
                type:"post",
                processData: false, 
    			contentType: false,
                data:fd,
                success:function(data)
                {
                    if (data.success == true) 
                    {
                        swal('success', data.message, 'success')
                            .then((value) => {
                                window.location ='{{ route("appointments.index") }}';
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
    </script>

@endsection