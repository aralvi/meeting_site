@if(count(categories()) > 0)
    <div class="pt-4 main_padding d-flex f-20 cl-3b3b3b3 justify-content-between robotoRegular">
        <div class="col-md-1 p-0"></div>
        <ul class="listStyle-none p-0 col-md-10 d-flex robotoRegular f-18 ul_main_tabs m-0 d-flex justify-content-around">
            @foreach (categories()->take(8) as $category)
                <li class="pl-3"> <a href="#" class="cl-3b3b3b3">{{ ucwords($category->name) }}</a></li>
            @endforeach
            <li>
                    <!-- Example split danger button -->
                <div class="btn-group">
                <a href="" lass=" dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More...</a>
                <div class="dropdown-menu">
                    @foreach (categories()->skip(8) as $category)
                    <a class="dropdown-item" href="#">{{ ucwords($category->name) }}</a>
                        
                    @endforeach
                    
                </div>
                </div>
                </li>
        </ul>
        <div class="col-md-2"></div>
    </div>
@endif