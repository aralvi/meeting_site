<link rel="stylesheet" href="{{ asset('assets/frontend/css/navbar.css') }}">
<nav class="navbar navbar-expand-lg navbar-light pl-0 pr-0 pt-2">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/frontend/images/navlogo.png') }}"
                    alt="navbar logo" class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="navbar-nav ml-auto d-flex align-self-center f-20">

                @guest
                <li class="nav-item">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <form class="form-inline my-2 my-lg-0 ml-auto cl-ffffff robotoRegular">
                            <a href="{{route('login')}}"
                                class="btn btn-outline-success border-0 my-2 my-sm-0 pt-2 pb-2 cl-ffffff  login_button"
                                type="submit">Log In</a>
                            <a href="{{route('register')}}"
                                class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574 mr-3 ml-3 login_button"
                                type="submit">Sign up</a>
                                {{-- <span>Business?</span> --}}
                        </form>
                    </div>
                </li>

                @else
                </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="pt-2 pb-2 border-ffffff w-25 d-flex pl-3 pr-3 rounded">
                    <div class="w-100 cl-ffffff"><input type="search" class="bg-transparent border-0 cl-ffffff w-100 robotoRegular " value="what are you looking for ?"></div>
                    
                    <div>   <img src="{{ asset('assets/frontend/images/search2.png') }}" class="ml-auto" alt=""
                        class="img-fluid p-2 search-img" /></div>

                </div>
                <!-- <form class="form-inline d-flex my-lg-0 bg-transparent border rounded w-25">
                    <input class="form-control mr-sm-0 pr-0 w-100 robotoRegular bg-transparent text-white border-0 pt-2 pb-2" type="search"
                        value="what are you looking for ?" aria-label="Search" />
                    <img src="{{ asset('assets/frontend/images/search2.png') }}" class="ml-auto" alt=""
                        class="img-fluid p-2 search-img" />
                </form> -->
                <ul class="navbar-nav ml-auto d-flex justify-content-center align-items-center f-20 ">

                    <li class="nav-item  robotoRegular">
                        <a class="nav-link cl-ffffff" href="#">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  p-0 robotoRegular pl-4 cl-ffffff">
                        <a class="nav-link cl-ffffff" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown  pl-4 robotoRegular">
                        <a class="nav-link cl-ffffff cl-ffffff" href="#" id="navbarDropdown" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="">
                            Messages
                            <span class="green-dot mt-1 ml-2"></span>
                        </a>
                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <nav>
                                <div class="nav nav-tabs row m-0" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link col-md-6 text-center" id="nav-profile-tab"
                                        data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"
                                        aria-selected="false"> Notifications</a>
                                    <a class="nav-item nav-link active col-md-6 text-center" id="nav-home-tab"
                                        data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Inbox</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
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
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <a class="dropdown-item d-flex row m-0 pt-2" href="#">
                                        <div class="col-md-2 p-0">
                                            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                                                alt="" class="img-fluid" />
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
                                            <img src="{{ asset('assets/frontend/images/GettyImages-1136599956-hair-stylist-1200x630-min.png') }}"
                                                alt="" class="img-fluid" />
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
                                            <img src="{{ asset('assets/frontend/images/navlogo.png') }}" alt=""
                                                class="img-fluid" />
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
                                            <img src="{{ asset('assets/frontend/images/navlogo.png') }}" alt=""
                                                class="img-fluid" />
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
                                            <div><i class="fa fa-volume-up text-white pl-2" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 p-0 pr-3 text-white text-right">
                                            <h6>See all in inbox</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item  robotoRegular pl-4 cl-ffffff">
                        <a class="nav-link cl-ffffff" href="#">Spa</a>
                    </li>
                    <li class="nav-item  pl-4">
                        <a class="nav-img" data-toggle="dropdown" href="#">
                            <img src="{{ asset('assets/frontend/images/55881685_1284744685011014_8335587762602246144_n.png') }}"  class="img-fluid w-75" alt="profile" width="40" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if (Auth::user()->user_type == 'client')
                            <a href="{{ route('client.index') }}" class="dropdown-item">Dashboard</a>
                                
                            @endif
                            @if (Auth::user()->user_type == 'specialist')
                            <a href="{{ url('specialist/dashboard') }}" class="dropdown-item">Dashboard</a>
                                
                            @endif
                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        

                      

                    </li>
                    @endguest
                </ul>
            </div>
        </nav>