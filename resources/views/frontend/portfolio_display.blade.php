@extends('layouts.frontend.app')
@section('title','Specialist Detail')
{{-- head start --}}

@section('extra-css')
<style type="text/css">
.modal button.close {
  right: 0;
  outline: 0;
}
  
#gallery-lightbox img {
  height: 350px;
  object-fit: cover;
  cursor: pointer;
}

#gallery-lightbox img:hover {
  opacity: 0.9;
  transition: 0.5s ease-out;
}
</style>
@endsection



@section('content')

<section class="main_padding pt-2 pb-2 nav-bg-img robotoRegular">
    @include('includes.frontend.navbar')
</section>

@include('includes.frontend.navigations')
<div class="container">
  <div class="row">
    @foreach ($portfolios as $port)
        
    @endforeach
    <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
      <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
    </a>
    
  </div>
  
</div>

@endsection




@section('extra-script')

<script type="text/javascript">

</script>
@endsection

{{-- footer section end --}}
