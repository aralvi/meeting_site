<nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/frontend/images/navlogo.png') }}"
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
                                type="submit">Sign up</a><span>Business?</span>
                        </form>
                    </div>
                </li>

                @else
                </ul>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 bg-transparent border rounded">
                    <input class="form-control mr-sm-2 w-18 bg-transparent text-white border-0" type="search"
                        value="what are you looking for ?" aria-label="Search" />
                    <img src="{{ asset('assets/frontend/images/search2.png') }}" alt=""
                        class="img-fluid p-2 search-img" />
                </form>
                <ul class="navbar-nav ml-auto d-flex align-self-center f-20">

                    <li class="nav-item col-md-2">
                        <a class="nav-link cl-white" href="#">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item col-md-3 p-0">
                        <a class="nav-link cl-white" href="#">About us</a>
                    </li>
                    <li class="nav-item dropdown col-md-3 p-0">
                        <a class="nav-link cl-white" href="#" id="navbarDropdown" data-toggle="dropdown"
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
                    <li class="nav-item col-md-2">
                        <a class="nav-link cl-white" href="#">Spa</a>
                    </li>
                    <li class="nav-item col-md-2">
                        <a class="nav-link" href="#"><img
                                src="{{ asset('assets/frontend/images/55881685_1284744685011014_8335587762602246144_n.png') }}"
                                alt="" class="img-fluid w-75" /></a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>