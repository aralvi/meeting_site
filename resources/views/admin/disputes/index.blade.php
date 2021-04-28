@extends('layouts.admin.admin') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
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

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.admin_navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


    <p class="border-bottom pl-3 f-21 cl-616161">Edit Your Personal Settings</p>

    <p class="pl-3 f-21 cl-000000">Disputes</p>
    @include('common.messages')
    <div class="table-responsive UserTableData" id="UserTableData">
        {{-- <button title="Click to Add Service" data-toggle="modal" data-target="#addUserModal"
            class="btn btn-sm bg-3AC574 text-white m-2" style="float: right;">Add User</button> --}}
        <div class="d-flex justify-content-center mb-3 " >
            <div class="spinner-border  text-success d-none user-loader" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-uppercase">
                    <th scope="col">#</th>
                    <th scope="col">appointment id</th>
                    <th scope="col">Service</th></th>
                    <th scope="col">Client</th>
                    <th scope="col">Specialist</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Client Response</th>
                    <th scope="col">Specialist Response</th>
                    <th scope="col">Admin Response</th>
                    <th scope="col">Submitted</th>
                    <th scope="col">Appointment Status</th>
                    <th scope="col">Appointment date/time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disputes as $key => $dispute)
                    <tr >          
                        <td>{{ $key+1 }}</td>
                        <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->id: '' }}</td>
                        <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->service->title: '' }}</td>
                        <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->user->username: '' }}</td>
                        <td>{{ $dispute->project_type=='appointments'? $dispute->appointment->specialist->user->username : '' }}</td>
                        <td>{{ $dispute->subject }}</td>
                        <td>{{ Str::limit($dispute->comment,50,'...') }}</td>
                        <td>{{ $dispute->client_response!=null?Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->client_response)->shiftTimezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a'):'' }}</td>
                        <td>{{ $dispute->specialist_response!=null?Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->specialist_response)->shiftTimezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a'):'' }}</td>
                        <td>{{ $dispute->admin_response!=null?Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->admin_response)->shiftTimezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a'):'' }}</td>
                        <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->created_at)->shiftTimezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a') }}</td>
                        <td>
                            @if($dispute->project_type=='appointments')
                                <span class="badge badge-sm @if($dispute->appointment->status == "Approved" || $dispute->appointment->status == "Completed") badge-success @elseif($dispute->appointment->status == "Cancelled") badge-danger @else badge-warning @endif">{{ $dispute->appointment->status }}</span>
                            @else
                            @endif</td>
                        <td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $dispute->appointment->created_at)->shiftTimezone(Auth::user()->time_zone)->format('Y-m-d h:i:s a') }}</td>
                        <td style="min-width: 135px !important;">
                            <a class="btn btn-sm  btn-success" target="_blank" href="{{ route('disputes.show',encrypt($dispute->id)) }}">View</a>
                            {{-- <button class="btn {{ ($dispute->status== 'active')? 'btn-danger':'btn-success' }}  btn-sm change_status" data-msg="Do you want to {{ ($user->status== 'active')? 'in active '.$user->username:'active '.$user->username }} ?" data-user="{{ $user->id }}" data-status="{{ ($user->status == 'active')? 'inactive':'active' }}">{{ ($user->status == 'active')? 'Inactive':'Activate' }}</button> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal For Deleting User-->
    <div class="modal fade deleteUserModal" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelUserdelete" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabelUserdelete" style="font-size: 18px !important;">Delete Confirmation !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this User?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">No, Cancel</button>
                    <button type="button" class="btn btn-md bg-3AC574 text-white deleteUserBtn" id="deleteUserBtn">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection 

@section('extra-script')
    <script>
        $('.change_status').on('click',function(){
        var user = $(this);
        var user_id = $(this).data('user');
        var badge = $('.badge-'+user_id);
        
        var msg = $(this).data('msg');
        var status = $(this).attr('data-status');
        // swal({
        //     title: "Are you sure?",
        //     text: "But you will still be able to retrieve this file.",
        //     type: "warning",
        //     showCancelButton: true,
        //     confirmButtonColor: "#DD6B55",
        //     confirmButtonText: "Yes, archive it!",
        //     cancelButtonText: "No, cancel please!",
        //     closeOnConfirm: false,
        //     closeOnCancel: false
        //     },
        //     function(isConfirm){
        //         if (isConfirm) {
        //             console.log("success");
        //         } else {
        //             console.log("error");
        //         }
        // });

        swal({
            title: "Are you sure?",
            text: msg,
            icon: "warning",
            buttons: {
                cancel: "No",
                confirm: "Yes"
                },
           }).then((willDelete) => {
                if (willDelete)
                {
                    $.ajax({
                        type: 'post',
                        url: "{{ url('dashboard/users/') }}"+"/"+user_id,
                        data: {
                            _token: '{{ csrf_token() }}',
                            user_id: user_id,
                            status:status,
                           _method:" put"
                        
                        },
                        beforeSend:function(){
                            $(".user-loader").removeClass('d-none');
                        },
                        success: function (data) {
                            $(".user-loader").addClass('d-none');
                            if(data == 'active'){
                                $('.badge-'+user_id).removeClass('badge-danger').addClass('badge-success').text('active');
                                // $('.badge-'+user_id).addClass('badge-success');
                                // $('.badge-'+user_id).text('active');
                                user.removeClass('btn-success').addClass('btn-danger');
                                user.text('Inactive')
                                user.attr('data-status','inactive')
                                swal({
                                    icon: "success",
                                    text: "{{ __('User Activated Successfully') }}",
                                    icon: 'success'
                                });
                            }if(data == 'inactive'){
                                $('.badge-'+user_id).removeClass('badge-success').addClass('badge-danger').text('inactive');
                                // $('.badge-'+user_id).addClass('badge-danger');
                                // $('.badge-'+user_id).text('inactive');
                                user.attr('data-status','active')
                                user.removeClass('btn-danger').addClass('btn-success');
                                user.text('Activate')
                                swal({
                                    icon: "success",
                                    text: "{{ __('User In-Activated Successfully') }}",
                                    icon: 'success'
                                });

                            }
                            window.location = '';
                        }
                    });
                } 
        });
        
    });




    </script>
@endsection