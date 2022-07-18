<div class="row">
    @foreach ($categories as $category)     
    <div class="col-6 p-0 cat-card">
        <a href="{{route('categoryAds',compact('category'))}}">
            <div class="cat-card1" style="background: url({{$category->img}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                {{-- <i class="g src="media/categoryLibri.p"ng" alt="" class="category-card-img"> --}}
                <div class="cat-card2" style="background: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)),url({{$category->img}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                    {{-- inserire categoria --}}
                    @switch(Lang::locale())
                        @case("en")                     
                            <div class="row">
                                <div class="col-12 d-flex flex-column">                                   
                                    <h3 class="cat-card2-title text-center"><i class="{{$category->category_icon}}"></i></h3>
                                    <small class="cat-card2-title text-center">{{$category->category_en}}</small>
                                </div>
                            </div>
                        @break

                        @case("es")
                            <div class="row">
                                <div class="col-12 d-flex flex-column">                                   
                                    <h3 class="cat-card2-title text-center"><i class="{{$category->category_icon}}"></i></h3>
                                    <small class="cat-card2-title text-center">{{$category->category_es}}</small>
                                </div>
                            </div>
                        @break

                        @case("fr")
                            <div class="row">
                                <div class="col-12 d-flex flex-column">                                   
                                    <h3 class="cat-card2-title text-center"><i class="{{$category->category_icon}}"></i></h3>
                                    <small class="cat-card2-title text-center">{{$category->category_fr}}</small>
                                </div>
                            </div>
                        @break

                        @case("pt")
                        <div class="row">
                            <div class="col-12 d-flex flex-column">                                   
                                <h3 class="cat-card2-title text-center"><i class="{{$category->category_icon}}"></i></h3>
                                <small class="cat-card2-title text-center">{{$category->category_pt}}</small>
                            </div>
                        </div>
                        @break

                        @case("ke")
                        <div class="row">
                            <div class="col-12 d-flex flex-column">                                   
                                <h3 class="cat-card2-title text-center"><i class="{{$category->category_icon}}"></i></h3>
                                <small class="cat-card2-title text-center">{{$category->category_ke}}</small>
                            </div>
                        </div>
                        @break

                        @default
                            <div class="row">
                                <div class="col-12 d-flex flex-column">                                    
                                    <h3 class="cat-card2-title text-center"><i class="{{$category->category_icon}}"></i></h3>
                                    <small class="cat-card2-title text-center">{{$category->category_it}}</small>
                                </div>
                            </div>
                        @break
                    @endswitch
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
