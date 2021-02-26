@extends('layouts.admin.app')
@section('title','Dashboard')
@section('header-title','Dashboard')
{{-- head start --}}
	
	@section('extra-css')
	@endsection
{{-- head end --}}



{{-- content section start --}}

	@section('content')
		<!-- BEGIN: Page Main-->
		    <div id="main">
		      <div class="row">
		        
		        
		        <div class="col s12">
		            <div class="container">
			            <div id="card-stats">
						    <div class="row">
							    <div class="col s12 m6 l6 xl3">
							         <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
							            <div class="padding-4">
							               <div class="col s7 m7">
							                   <i class="material-icons background-round mt-5">store</i>
							                  <p>Stores</p>
							               </div>
							               <div class="col s5 m5 right-align">
							                  <h5 class="mb-0 white-text">0</h5>
							                  <p class="no-margin">New</p>
							                  <p>{{ App\Store::all()->count() }}</p>
							               </div>
							            </div>
							         </div>
							    </div>
							    <div class="col s12 m6 l6 xl3">
							         <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
							            <div class="padding-4">
							               <div class="col s7 m7">
							                  <i class="material-icons background-round mt-5">people</i>
							                  <p>Clients</p>
							               </div>
							               <div class="col s5 m5 right-align">
							                  <h5 class="mb-0 white-text">0</h5>
							                  <p class="no-margin">New</p>
							                  <p>{{ App\Client::all()->count() }}</p>
							               </div>
							            </div>
							         </div>
							    </div>
							    <div class="col s12 m6 l6 xl3">
							         <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
							            <div class="padding-4">
							               <div class="col s7 m7">
							                  <i class="material-icons background-round mt-5">timeline</i>
							                  <p>Subscriptions</p>
							               </div>
							               <div class="col s5 m5 right-align">
							                  <h5 class="mb-0 white-text">$69</h5>
							                  <p>3,42,230</p>
							               </div>
							            </div>
							         </div>
							    </div>
							    <div class="col s12 m6 l6 xl3">
							         <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
							            <div class="padding-4">
							               <div class="col s7 m7">
							                  <i class="material-icons background-round mt-5">attach_money</i>
							                  <p style="width: 140vh;">Members Online</p>
							               </div>
							               <div class="col s5 m5 right-align">
							                  <h5 class="mb-0 white-text">1000</h5>
							                  <p class="no-margin">Total</p>
							                  <p>290</p>
							               </div>
							            </div>
							         </div>
							    </div>
						    </div>

						    <div class="row">
						    	
						    	<div class="col s12 m12 l12">
						            <div id="revenue-chart" class="card animate fadeUp">
							            <div class="card-content">
							               <h4 class="header mt-0">
							                  REVENUE FOR 2020
							                  
							                  {{-- <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a> --}}
							               </h4>
							               <div class="row">
							                  <div class="col s12">
							                     <div class="yearly-revenue-chart">
							                        <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
							                        <canvas id="lastYearRevenue" height="350"></canvas>
							                     </div>
							                  </div>
							               </div>
							            </div>
						            </div>
						        </div>

						    </div>

						</div>
		            </div>
		        </div>
		      </div>
		    </div>
    	<!-- END: Page Main-->
	@endsection

{{-- content section end --}}

{{-- footer section start --}}

	@section('footer')

		@include('includes.admin.footer')

	@endsection

	@section('extra-script')
		<script src="{{ asset('assets/admin/vendors/chartjs/chart.min.js')}}"></script>
		<script src="{{ asset('assets/admin/js/scripts/dashboard-ecommerce.js')}}"></script>
	@endsection

{{-- footer section end --}}

