@extends('layouts.admin.app')

{{-- head start --}}
	
	@section('head')

		@include('includes.admin.head')

	@endsection

	@section('extra-css')
	@endsection
{{-- head end --}}


{{-- header start --}}
	
	@section('header')

		@include('includes.admin.header')

	@endsection

{{-- header  end --}}



{{-- content section start --}}

	@section('content')
		

	<!-- BEGIN: Page Main-->
	    <div id="main">
	      <div class="row">
	       
	        <div class="col s12">
	          <div class="container">
	            <div class="section">
			        <div class="card">
			            <div class="card-content">
			              <p class="caption mb-0">
			                  Sample blank page for getting start!! Created and designed by Google, Material Design is a design
			                  language that combines the classic principles of successful design along with innovation and
			                  technology.
			              </p>
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

	@section('script')

		@include('includes.admin.script')
	    
	@endsection


	@section('extra-script')
	@endsection

{{-- footer section end --}}

