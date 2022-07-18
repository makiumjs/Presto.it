<div class="row">
    @foreach ($categories as $category)     
    <div class="col-6 col-lg-3 p-0 cat-card">
        <a href="{{route('categoryAds',compact('category'))}}">
            <div class="cat-card1" style="background: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url({{$category->img}}); background-position: center; background-repeat: no-repeat; background-size: cover;">
                {{-- <img src="media/categoryLibri.png" alt="" class="category-card-img"> --}}
                <div class="cat-card2" >
                    {{-- inserire categoria --}}
                    @switch(Lang::locale())
                        @case("en")
                            <h3 class="cat-card2-title">{{$category->category_en}}</h3>
                        @break

                        @case("es")
                            <h3 class="cat-card2-title">{{$category->category_es}}</h3>
                        @break

                        @case("pt")
                            <h3 class="cat-card2-title">{{$category->category_pt}}</h3>
                        @break

                        @case("ke")
                            <h3 class="cat-card2-title">{{$category->category_ke}}</h3>
                        @break

                        @case("fr")
                            <h3 class="cat-card2-title">{{$category->category_fr}}</h3>
                        @break

                        @default
                            <h3 class="cat-card2-title">{{$category->category_it}}</h3>
                        @break
                    @endswitch
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>
