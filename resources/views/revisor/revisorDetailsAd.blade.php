<x-layout>
    <x-slot name='title'>{{__('ui.titledet')}}</x-slot>

    {{-- Main Section --}}
    <section class="container-fluid background">

        {{-- Container Page --}}
        <div class="container detailsRevisor-padding-top">

            {{-- Main Row --}}
            <div class="row">

                <h1 class="text-center mt-5 my-md-0 pb-2">Dettagli annuncio</h1>

                <div class="revisor-card my-3  p-5 d-flex flex-column align-items-center">
                    <a class='text a-details btn rounded-pill' href='{{route('categoryAds', $ad->category)}}'>
                        <i class="fa-solid fa-tag"></i>
                        @switch(Lang::locale())
                            @case("en")
                                {{$ad->category->category_en}}
                            @break

                            @case("es")
                                {{$ad->category->category_es}}
                            @break

                            @case("fr")
                                {{$ad->category->category_fr}}
                            @break

                            @case("pt")
                            {{$ad->category->category_pt}}
                            @break
                            
                            @case("ke")
                            {{$ad->category->category_ke}}
                            @break

                            @default
                                {{$ad->category->category_it}}
                            @break
                        @endswitch
                    </a>
                    <h2 class='text mb-0 fw-bolder d-none d-md-block'>{{$ad->title}}</h4>
                    <h5 class='text'>
                        {{__('ui.soldby')}}
                        @if(Auth::user()->id != $ad->user_id)
                            <a href="{{route("authorProfile", $ad->user_id)}}" class="fst-italic fw-bold text-decoration-none text-primary">{{$ad->user->name}}</a>
                        @else
                            <p class="fst-italic fw-bold text-decoration-none text-primary d-inline">{{$ad->user->name}}</p>
                        @endif
                    </h5>
                    <p class='text fw-bold mb-0 mt-4'>{{__('ui.detailart')}}</p>
                    <p class="fw-normal">{{$ad->description}}</p>
                    <p class='price fw-bolder'>{{$ad->price}}€</p>
                    <div class="d-flex">
                        <form class="me-3" action="{{route('revisorAcceptAd', $ad,Auth::user()->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-accept rounded-circle bg-white"><i class="fa-solid fa-check"></i></button>
                        </form>
                        <form action="{{route('revisorRejectAd', $ad,Auth::user()->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn-reject rounded-circle bg-white ml-5"><i class="fa-regular fa-trash-can"></i></button>
                        </form>
                    </div>
                </div>

                @foreach ($ad->images()->get() as $img)
                    <div class="col-12 revisor-card p-5 my-3">

                        <div class="row">

                            {{-- Image --}}
                            <div class="col-12 col-lg-6 d-flex justify-content-center">
                                <img src="{{$img->getUrl(300,300)}}"> 
                            </div>


                            {{-- Flush --}}
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    {{-- Tags --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$img->id * 10}}" aria-expanded="false" aria-controls="flush-collapseOne">Tags</button>
                                        </h2>
                                        <div id="flush-{{$img->id * 10}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    @if ($img->labels)
                                                        @foreach($img->labels as $label)
                                                            <li>{{$label}}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Content --}}
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-{{$img->id * 10 + 1}}" aria-expanded="false" aria-controls="flush-collapseTwo">Contents</button>
                                        </h2>
                                        <div id="flush-{{$img->id * 10 + 1}}" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li class="py-0">{{__('ui.adults')}}<span class="ms-2 {{$img->adult}}"></span></li>
                                                    <li class="py-0">{{__('ui.satira')}}<span class="ms-2 {{$img->spoof}}"></span></li>
                                                    <li class="py-0">{{__('ui.medic')}}<span class="ms-2 {{$img->medical}}"></span></li>
                                                    <li class="py-0">{{__('ui.viole')}}<span class="ms-2 {{$img->violence}}"></span></li>
                                                    <li class="py-0">{{__('ui.hot')}}<span class="ms-2 {{$img->racy}}"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div> {{-- End Main Row --}}

        </div> {{-- End Container --}}

    </section> {{-- End Main Section --}}

</x-layout>


