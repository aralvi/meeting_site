@extends('layouts.frontend.app') @section('title','Client | Dashboard') {{-- head start --}} @section('extra-css')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />

<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }

    .f-145 {
        font-size: 145px;
    }

    [slider] {
        width: 100%;
        position: relative;
        height: 5px;
    }

    [slider]>div {
        position: absolute;
        left: 13px;
        right: 15px;
        height: 5px;
    }

    [slider]>div>[inverse-left] {
        position: absolute;
        left: 0;
        height: 5px;
        border-radius: 10px;
        background-color: #CCC;
        margin: 0 7px;
    }

    [slider]>div>[inverse-right] {
        position: absolute;
        right: 0;
        height: 5px;
        border-radius: 10px;
        background-color: #CCC;
        margin: 0 7px;
    }


    [slider]>div>[range] {
        position: absolute;
        left: 0;
        height: 5px;
        border-radius: 14px;
        background-color: #3AC574;
    }

    [slider]>div>[thumb] {
        position: absolute;
        top: -5px;
        z-index: 2;
        height: 15px;
        width: 15px;
        text-align: left;
        margin-left: -7px;
        cursor: pointer;
        /* box-shadow: 0 3px 8px rgba(0, 0, 0, 0.4); */
        background-color: #3AC574;
        border-radius: 50%;
        outline: none;
    }

    [slider]>input[type=range] {
        position: absolute;
        pointer-events: none;
        -webkit-appearance: none;
        z-index: 3;
        height: 14px;
        top: -2px;
        width: 100%;
        opacity: 0;
    }

    div[slider]>input[type=range]:focus::-webkit-slider-runnable-track {
        background: transparent;
        border: transparent;
    }

    div[slider]>input[type=range]:focus {
        outline: none;
    }

    div[slider]>input[type=range]::-webkit-slider-thumb {
        pointer-events: all;
        width: 28px;
        height: 28px;
        border-radius: 0px;
        border: 0 none;
        background: red;
        -webkit-appearance: none;
    }

    div[slider]>input[type=range]::-ms-fill-lower {
        background: transparent;
        border: 0 none;
    }

    div[slider]>input[type=range]::-ms-fill-upper {
        background: transparent;
        border: 0 none;
    }

    div[slider]>input[type=range]::-ms-tooltip {
        display: none;
    }

.lable {
 
  border: 1px solid #ced4da;
  border-radius: 5px;
}
.snehainput {
      
    width: 93%;
  padding: 6px 5px;
  outline: none;
}
span.prefix{
    position: relative;
    left: 8px;
}
</style>
@endsection {{-- head end --}} {{-- content section start --}} @section('content')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

<div class="container-fluid">
    <div class="row mt-5 justify-content-around">
        <div class="col-md-6 borderRadius-10px pl-0 pr-0 box_shadow1 border-top-green-10">
            <div class="px-5 py-3">
                <div class="cl-3ac754 f-34">Today's Appointments <span class="text-muted cl-6A6A6A">({{ count($appointments) }})</span></div>
                <div class="card-body px-0">
                    <div class="row m-0 p-0">
                        <div class="col-md-2 pl-0 py-0">
                            <h1 class="h1 f-145">{{ count($appointments) }}</h1>
                        </div>
                        <div class="col-md-10 p-0 cl-6A6A6A">
                            @foreach ($appointments as $appointment)
                                
                            <div class="mt-3 d-flex justify-content-around align-items-center bg-F2F5FA box_shadow2">
                                <div class="d-flex flex-column justify-content-between">
                                    <p>{{ $appointment->specialist->user->name }}</p>
                                    <h3>{{ $appointment->service->title }}</h3>
                                </div>
                                <div class="d-flex flex-column justify-content-between">
                                    <p>Time</p>
                                    <p>{{ $appointment->time }}</p>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-md bg-3ac574 cl-ffffff">Update</button>
                    <a href="{{ route('client.show',Auth::user()->id) }}" class="cl-3ac754">Previous Appointments >></a>
                </div>
            </div>
        </div>
        <div class="col-md-5 py-5 borderRadius-10px p-0 box_shadow1 border-top-green-10">
            <div class="row px-5 align-items-center">
                <div class="col-md-8">
                    <p class="cl-3ac754 f-34 mb-0">Available Banlance $</p>
                </div>
                <div class="col-md-4">
                    <p class="cl-6A6A6A f-18 mb-0">Available Funds</p>
                </div>
            </div>
            <div class="row px-5 align-items-center">
                <div class="col-md-12">
                    <p class="cl-6A6A6A mb-0">Main Account</p>
                </div>
            </div>
            <div class="row px-5 align-items-center">
                <div class="col-md-7">
                    <h3 class="">Benjamin Carlos</h3>
                </div>
                <div class="col-md-1">
                    <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="" />
                </div>
                <div class="col-md-4">
                    <h3 class="mb-0 f-45">$68.789</h3>
                </div>
                <div class="col-md-12 text-right">
                    <p class="cl-6A6A6A f-18 mb-0">Updated 2h ago</p>
                </div>
            </div>
            <br />
            <br />
            <hr />
            <div class="row px-5 align-items-center">
                <div class="col-md-7">
                    <h3 class="cl-3ac754">Total Balance $</h3>
                </div>
                <div class="col-md-1">
                    <img src="{{ asset('assets/frontend/images/arrow-up.png') }}" alt="" />
                </div>
                <div class="col-md-4">
                    <h3 class="mb-0 f-45">$28,000</h3>
                </div>
                <div class="col-md-12 text-right">
                    <p class="cl-6A6A6A f-18 mb-0">This Month So Far</p>
                </div>
            </div>
        </div>
    </div>
    @include('common.messages')
    <div class="row mt-2 mb-5 px-3 mx-1 ">
        <div class="col-md-8 px-5 borderRadius-10px box_shadow1 p-0">
            <div class="d-flex mt-3 justify-content-between ">
                <div class="cl-3ac754 robotoMedium f-24">Post a Job</div>
                <div class="f-24 cl-3ac754 robotoMedium"></div>
            </div>
            <div class="mt-2 border w-100"></div>
            <form action="{{ route('servicerequests.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="title">Category</label>
                        <select class="form-control select2"  name="category" id="select_category" style="width: 100%;"  onchange="getSubCategories(this);">
                                    <option selected="selected" disabled>Choose category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="sub_categories">
                                            
                        </div>
                    </div>
                    <div class="form-group col-md-4"> 
                        <label for="rate_from">What is your budget for this service?</label>
                        <div class="lable">
                        <span class="prefix">$</span>
                        <input class="snehainput border-0" type="number" name="budget" id="budget" class="form-control" placeholder="5 Minimum (USD)"/>
                        </div>
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <label for="description">Description*</label>
                    <textarea id="description" class="form-control summernote" name="description" required rows="5"> </textarea>
                </div>
                <div class="form-group">
                    <label for="description">Attach Files (Optional)</label>
                    <input type="file" name="tags" class="form-control" >
                </div>
                <div class=" pl-0 ml-auto text-end pr-0 my-3">
                     <button type="submit" class="btn btn-outline-success my-2 d-flex justify-content-end my-sm-0 cl-ffffff bg-3ac574 pl-5 pr-5 login_button appointment-btn ml-auto" type="submit">Submit</button>
                </div>
            </form>
            
        </div>
        
    </div>
    {{-- <div class="row mt-3 pl-5 ">
        <div class="col-md-8 p-0">
            <div class="row">
                <div class="col-md-10 p-0">
                    <div class="d-flex justify-content-between align-items-baseline">

                        <p class="f-34 mb-0">Available Jobs</p>
                        <div class="d-flex m-0">
                            <div class="pt-4 w-100">
                                <input type="text" placeholder="Search for services"
                                    class="service_inpt robotoRegular h-44 cl-6b6b6b bg-transparent footer_input pt-2 pb-2 pl-3 w-100 rounded">
                            </div>
                            <div class="pt-4 pl-2">
                                <button
                                    class="btn btn-outline-success my-2 my-sm-0 cl-ffffff bg-3ac574  pt-2 pb-2 pl-2 pr-2 service_inpt_btn"
                                    type="button" onclick="inputSearchServices();"><img
                                        src="{{ asset('assets/frontend/images/Group 188.png ') }}" alt=""></button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-2 px-0 d-flex align-items-end justify-content-end f-18">

                    <p class="mb-0">Sort by :</p>
                    <select name="" id="" class="border-0 cl-3ac754">
                        <option value="">Latest</option>
                    </select>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-around mt-2 mb-5">
        <div class="col-md-8  borderRadius-10px box_shadow1 p-0">
            <div class="d-flex mt-3 justify-content-between px-5">
                <div class="cl-3ac754 robotoMedium f-24">Job Description</div>
                <div class="f-24 cl-3ac754 robotoMedium">Amount</div>
            </div>
            <div class="mt-2 border w-100"></div>
            @foreach ($services as $service)
                @php  $tags= json_decode($service->tags);  @endphp
                <a href="{{  route('appointment_request',encrypt($service->id)) }}">
                <div class="d-flex mt-4 justify-content-between px-5">
                    <div>
                        <div class="cl-000000 robotoMedium f-24">{{ $service->title }}</div>
                        <div class="w-100 text-justify f-18 robotoRegular cl-6b6b6b pr-5" >
                            {{$service->description}}
                        </div>
                        <div class="d-flex pt-2">
                            <div>
                                <div class="d-flex">
                                    <div><img src="{{ asset('assets/frontend/images/Group 305.png') }}" alt="" /></div>
                                    <div class="cl-3ac754 f-14 robotoRegular d-flex align-items-center pl-2">Posted</div>
                                    <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">{{ \Carbon\Carbon::parse($service->created_at)->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="d-flex pt-2">
                            <div>
                                <div class="d-flex">
                                    <div><img src="{{ asset('assets/frontend/images/Subtraction 2.png') }}" alt="" /></div>
                                    <div class="pl-1 cl-6b6b6b f-14 robotoRegular d-flex align-items-center">
                                        {{ implode(',',array_map('ucwords',$tags)) }}
                                        </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                        <div class="d-flex pt-2 pl-4">
                            <div>
                                <div class="d-flex">
                                    <div class="d-flex">
                                        <div><img src="{{ asset('assets/frontend/images/Path 93.png') }}" alt="" /></div>
                                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}"
                                                alt="" /></div>
                                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}"
                                                alt="" /></div>
                                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}"
                                                alt="" /></div>
                                        <div class="pl-2"><img src="{{ asset('assets/frontend/images/Path 93.png') }}"
                                                alt="" /></div>
                                    </div>
                                    <div
                                        class="pl-1 cl-3ac754 f-14 robotoRegular d-flex align-items-center reviews pl-2 pr-2 pt-1 pb-1 ml-2">
                                        110 reviews</div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="robotoMedium text-center">
                        <div class="f-24 cl-000000 white-spaces robotoMedium">${{ $service->rate }}</div>
                        <div class="f-21 cl-6b6b6b">USD</div>
                    </div>
                </div>
                </a>
                <div class="mt-3 border w-100"></div>
                
            @endforeach
            
        </div>
        <div class="col-md-3 borderRadius-10px box_shadow1 p-0">
            <div class="f-24 cl-3ac754 robotoMedium mt-3 px-3">
                Projects
            </div>
            <div class="mt-2 border w-100"></div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="skills" class="f-18">Enter Your Skills</label>
                        <select name="" class="form-control">
                            <option disabled selected>Select Skills</option>
                        </select>
                        <a href="javascript:void(0)" class="cl-3ac754 float-right f-15">Edit Profile Skills</a>
                    </div>
                    <div class="form-group">
                        <label for="skills" class="f-18">Enter Project Typ</label>
                        <select name="" class="form-control">
                            <option disabled selected>Fixed PRojects</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="skills" class="f-18">Enter Project Type</label>
                        <select name="" class="form-control">
                            <option disabled selected>Urgents</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="skills" class="f-18">Enter Location</label>
                        <input type="text" name="location" class="form-control" placeholder="United States">
                    </div>
                    <div class="form-group">
                        <label for="skills" class="f-18">Select Price Range</label>
                        <div class="d-flex justify-content-center cl-6b6b6b">
                            <p id="min">$1</p>
                            <span>&nbsp; - &nbsp;</span>
                            <p id="max">$300</p>
                        </div>
                    <div slider id="slider-distance">
                        <div>
                            <div inverse-left style="width:70%;"></div>
                            <div inverse-right style="width:70%;"></div>
                            <div range style="left:0%;right:0%;"></div>
                            <span thumb style="left:0%;"></span>
                            <span thumb style="left:100%;"></span>
                            <div sign style="left:0%;" class="d-none">
                                <span class="min_value" id="value">$1</span>
                            </div>
                            <div sign style="left:100%;" class="d-none">
                                <span class="max_value" id="value">$300</span>
                            </div>
                        </div>
                        <input type="range" value="1" max="300" min="1" step="1" onmousemove="getMinRange(this)" oninput="
                            this.value=Math.min(this.value,this.parentNode.childNodes[5].value-1);
                            let value = (this.value/parseInt(this.max))*100
                            
                            var children = this.parentNode.childNodes[1].childNodes;
                                children[1].style.width=value+'%';
                                children[5].style.left=value+'%';
                                children[7].style.left=value+'%';children[11].style.left=value+'%';
                                children[11].childNodes[1].innerHTML=this.value;
                            
                            "
                             />

                        <input type="range" value="300" max="300" min="1" step="1" onmousemove="getMaxRange(this)" oninput="
                            this.value=Math.max(this.value,this.parentNode.childNodes[3].value-(-1));
                            let value = (this.value/parseInt(this.max))*100
                            var children = this.parentNode.childNodes[1].childNodes;
                                children[3].style.width=(100-value)+'%';
                                children[5].style.right=(100-value)+'%';
                                children[9].style.left=value+'%';children[13].style.left=value+'%';
                                children[13].childNodes[1].innerHTML=this.value;"
                            />
                    </div>
                    </div>
                </form>
            </div>

        </div>
    </div> --}}
</div>
@endsection {{-- content section end --}} {{-- footer section start --}}
 @section('extra-script') 
<script>
    function getMaxRange(e){
        document.getElementById('max').innerHTML = "$"+e.value;
    }
    function getMinRange(e){
        document.getElementById('min').innerHTML = "$"+e.value;
    }

      function getSubCategories(ele)
      {

          let id = $(ele).val();
          $.ajax({
              url:"{{ route('request.get_subcategories') }}",
              type:"get",
              data:{id:id},
              success:function(data)
              {
                  $('.sub_categories').empty();
                  $('.sub_categories').html(data);

              }
          });
      }
</script>
 @endsection
