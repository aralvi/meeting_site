@if(count(categories()) > 0)
    <div class="pt-4 main_padding d-flex f-20 cl-3b3b3b3 justify-content-between robotoRegular">
      
        <ul class="listStyle-none p-0 col-md-12 d-flex robotoRegular f-18 ul_main_tabs m-0 d-flex justify-content-around">
            @foreach (categories()->take(8) as $category)
                <li class="pl-3"> <a href="{{ route('category_specialists',$category->id) }}" class="cl-3b3b3b3">{{ ucwords($category->name) }}</a></li>
            @endforeach
            @if (count(categories()->skip(8)) > 0)
                
            <li>
                    <!-- Example split danger button -->
                <div class="btn-group">
                <a href="" class="dropdown-toggle dropdown-toggle-split cl-3b3b3b3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More...</a>
                <div class="dropdown-menu min-width_dropdown">
                    @foreach (categories()->skip(8) as $category)
                    <a class="dropdown-item" href="{{ route('category_specialists',$category->id) }}">{{ ucwords($category->name) }}</a>
                        
                    @endforeach
                    
                </div>
                </div>
                </li>
            @endif
        </ul>
    
    </div>
@endif