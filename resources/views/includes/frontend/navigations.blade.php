@if(count(categories()) > 0)
    <div class="pt-4 main_padding d-flex f-20 cl-3b3b3b3 justify-content-between robotoRegular">
        <div class="col-md-1 p-0"></div>
        <ul class="listStyle-none p-0 col-md-10 d-flex robotoRegular f-18 ul_main_tabs m-0">
            @foreach (categories() as $category)
                <li class="pl-3"> <a href="#" class="cl-3b3b3b3">{{ ucwords($category->name) }}</a></li>
            @endforeach
        </ul>
        <div class="col-md-2"></div>
    </div>
@endif