<x-layout class="">
    <x-slot name='title'>{{$category->category}}</x-slot>
    
    
    {{-- Title category--}}
    <div class="container mt-5">
        <div class="row mt-100">
            <div class="col-12 text-center">
                @switch(Lang::locale())
                @case("en")
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category_en}}</h1>
                @break
                
                @case("es")
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category_es}}</h1>
                @break
                
                @case("fr")
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category_fr}}</h1>
                @break
                
                @case("pt")
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category_pt}}</h1>
                @break

                @case("ke")
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category_ke}}</h1>
                @break

                @default
                <h1 class="display-5">{{__('ui.catadsin')}} {{$category->category_it}}</h1>
                @break
                @endswitch
            </div>
            <!-- Search bar -->
            <div class="col-12 col-md-6 offset-md-3 mt-2">
                <form action="{{route('searchCategoryAds',compact('category'))}}" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="searched" class="form-control" placeholder="Cerca.." aria-label="titolo annuncio" aria-describedby="basic-addon2" id="searchBar">
                        <button type="submit" class="input-group-text" id="searchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div> 
        
        {{-- Cards --}}
        <div class="row mt-5 ">
            @forelse ($ads as $ad)
            {{-- @dd($ad->images()->first()->path) --}}
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-3">
                <a href="{{route("detailsAd", $ad)}}" class="card adCard rounded-0  mx-auto">
                    @if (!$ad->images()->first())
                    <img src="https://picsum.photos/180/180" class="card-img rounded-0">
                    @else
                    <img src="{{$ad->images()->first()->getUrl(300,300)}}" class="card-img rounded-0">
                    @endif
                    
                    @switch(Lang::locale())
                    @case("en")
                    <span class="adCard-cat">{{$ad->category->category_en}}</span>
                    @break
                    
                    @case("es")
                    <span class="adCard-cat">{{$ad->category->category_es}}</span>
                    @break
                    @case("pt")
                    <span class="adCard-cat">{{$ad->category->category_pt}}</span>
                    @break
                    @case("ke")
                    <span class="adCard-cat">{{$ad->category->category_ke}}</span>
                    @break
                    
                    @case("fr")
                    <span class="adCard-cat">{{$ad->category->category_fr}}</span>
                    @break
                    
                    @default
                    <span class="adCard-cat">{{$ad->category->category_it}}</span>
                    @break
                    @endswitch
                    
                    <div class="card-item d-flex justify-content-between">
                        <small class="adCard-title">{{$ad->title}}</small> 
                        <small class="adCard-price text-end">{{$ad->price}}€</small>
                    </div>
                    <div class="card-item text-start">
                        <small class="adCard-author">{{$ad->user->name}}</small>                        
                    </div>
                </a>
            </div>
            {{-- if no ads --}}
            @empty
            @if (Request::url()==route('searchCategoryAds',compact('category')))
            <div class="col-12 d-flex flex-column align-items-center">
                <h2 class="mt-5 noAdsTitle">{{__('ui.noresads')}}..</h2>
                <a class="btn btn-newads mt-2 mb-5" href="{{route('categoryAds',compact('category'))}}">{{__('ui.torna')}} {{$category->category_it}}</a>
                <div >
                    <img src="/../media/categoryAds.png" alt="..." class="img-responsive" >
                </div>
            </div>
            @else
            {{-- if no ads in category --}}
            <div class="col-12 d-flex flex-column align-items-center">
                <h2 class="mt-5 noAdsTitle">{{__('ui.catadsno')}}</h2>
                <a class="btn btn-newads mt-2 mb-5" href="{{route('createAd')}}">{{__('ui.catadsnew')}}</a>
                <div >
                    <img src="/../media/categoryAds.png" alt="..." class="img-responsive" >
                </div>
            </div>
            @endif
            @endforelse
        </div>
    </div>
    
</x-layout>