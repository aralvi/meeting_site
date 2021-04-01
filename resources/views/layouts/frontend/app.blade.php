<!DOCTYPE html>
<html>

<head>
    @include('includes.frontend.head') @yield('extra-css')
</head>

<body>
   
    @yield('content') 
    @yield('footer')
    
<!-- E I G H T    S E C T I O N  S T A R T -->
<section class="main_padding pt-70  w-100">
    <div class="w-100 border-bcbcbc"></div>
</section>

<!-- E I G H T    S E C T I O N  E N D  -->

<!-- N I N E    S E C T I O N  S T A R T -->
<section class="main_padding pt-70  w-100">
    <div class="row m-0 justify-content-between">
        <div>
            <h4 class="m-0 cl-000000 robotoMedium f-26">Categories</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Graphics & Design</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Digital Marketing</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Business</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Lifestyle</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Sitemap</a></li>

            </ul>

        </div>
        <div>
            <h4 class="m-0 cl-000000 robotoMedium  f-26">About</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Careers</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Partnerships</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Privacy Policy</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Terms of Service</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Investor Relations</a></li>

            </ul>
        </div>
        <div>
            <h4 class="m-0 cl-000000 robotoMedium f-26">Support</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Help & Support</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Trust & Safety</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Selling</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Buying </a></li>


            </ul>
        </div>
        <div>
            <h4 class="m-0 cl-000000 robotoMedium f-26">Community</h4>
            <ul class="p-0 robotoRegular footerUl">
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Events</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Blog</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Forum</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Podcast</a></li>
                <li class="listStyle-none pt-4"><a href="" class="f-21 cl-6b6b6b">Affiliates
                    </a></li>


            </ul>
        </div>

        <div class="col-md-2 p-0">
            {{-- <div>
                <h4 class="m-0 cl-000000 robotoMedium f-26">Join Us On</h4>
            </div>
            <div class="pt-4"> <input type="email" placeholder="Enter your email..."
                    class="robotoRegular cl-6b6b6b    bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
            </div>
            <div class="pt-3"><button class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 w-100 rounded"
                    type="submit">Submit</button></div> --}}

            <div>
                <h4 class="m-0 cl-000000 robotoMedium f-26">Apps</h4>

            </div>
         
            <div class="pt-3"><a href=""><img 
            src="{{ asset('assets/frontend/images/appstore_2x.png') }}"
            alt="" class="w-135" srcset=""></a></div>
            <div class="pt-3"><a href=""><img
            src="{{ asset('assets/frontend/images/playstore_2x.png') }}"
            alt="" class="w-135" srcset=""></a></div>
         
         
            
          
            <div class="f-26 cl-bcbcbc pt-3 footerUl">Follow us On</div>
            <div class="d-flex pt-3">
                <div><a href=""><img src="{{ asset('assets/frontend/images/fb.png') }}" class="img-fluid"></a></div>
                <div class="pl-3"><a href=""><img src="{{ asset('assets/frontend/images/insta.png') }}" alt=""
                            srcset=""></a></div>
                <div class="pl-3"><a href=""><img src="{{ asset('assets/frontend/images/twitter.png') }}" alt=""
                            srcset=""></a></div>
                <div class="pl-3"><a href=""><img src="{{ asset('assets/frontend/images/linkdin.png') }}" alt=""
                            srcset=""></a></div>
            </div>
            </div>
        </div>
</section>

<!-- N I N E    S E C T I O N  E N D  -->

<!-- T E N    S E C T I O N  S T A R T  -->
<section class="main_padding bg-4b4b4b4 mt-5 pt-4 pb-4">
    <div class="d-flex justify-content-center  align-items-center"><img
            src="{{ asset('assets/frontend/images/Copyright © 2021 learnmelive, All Right Reserved learnmelive.png') }}"
            alt="" srcset=""></div>
</section>

<!-- T E N    S E C T I O N  E N D  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    	<script src="{{ asset('assets/frontend/js/jquery.easing.min.js') }}"></script>
    	<script src="{{ asset('assets/frontend/js/jquery.validate.js') }}"></script>
        <script src="{{ asset('assets/frontend/js/app.js') }}"></script>
        <script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <script src="{{ asset('assets/admin/dist/js/custome.js') }}"></script>

        <script>
            $(function () {
                 $(".select2").select2();
                $(".example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        // "scrollX": true,
                        // buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo(".dataTables_wrapper .col-md-6:eq(0)");
                
            });
        </script>
    @yield('extra-script')
</body>

</html>
