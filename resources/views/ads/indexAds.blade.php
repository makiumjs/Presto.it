<x-layout>
    <x-slot name='title'>{{__('ui.indexads')}}</x-slot>
    
    <div class="container padding">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-5">{{__('ui.allAnnouncements')}}</h1>
            </div>
            <!-- search bar -->
            <div class="col-12 col-md-6 offset-md-3 mt-2">
                <form action="{{route('searchAds')}}" method="get" role="search">
                    <div class="input-group">
                        <input type="text" name="searched" class="form-control" placeholder="Cerca" aria-label="titolo annuncio" aria-describedby="basic-addon2" id="searchBar">
                        <button type="submit" class="input-group-text" id="searchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- da qui va il foreach con dentro questa struttura --}}
        <div class="row mt-5">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 my-3">
                    <a href="{{route("detailsAd", $ad)}}" class="card adCard rounded-0  m-auto">
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
            @empty
            <div class="col-12 d-flex flex-column align-items-center">
                <h2 class="mt-5">{{__('ui.noresads')}}..</h2>
                <a class="btn btn-newads mt-2 mb-5" href="{{route('indexAds')}}">{{__('ui.tornaa')}}</a>
                <img src="/../media/categoryAds.png" alt="..." width="900px" height="700px" >
            </div>
            @endforelse
            <div class="d-flex justify-content-center">
                {{$ads->links()}}
            </div>
        </div>
    </div>
</x-layout>
