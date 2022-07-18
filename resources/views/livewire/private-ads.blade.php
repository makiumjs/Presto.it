<div class="container d-flex flex-column justify-content-center h-100">

    {{-- Main Row --}}
    <div class="row mb-1">

        {{-- Board Population --}}
        @foreach ($ads as $ad)

            {{-- Ad Col --}}
            <div class="col-12 col-xl-6">

                {{-- Ad Card --}}
                <a href="{{route("detailsAd", compact("ad"))}}" class="authorAdCard d-flex my-3">
                    
                    @if($ad->is_accepted === NULL)
                        <span class="ads-status span-bg-yellow"><i class="fa-solid fa-hourglass-empty"></i></span>
                    @elseif($ad->is_accepted === 0)
                        <span class="ads-status span-bg-red"><i class="fa-solid fa-xmark"></i></span>
                    @elseif($ad->is_accepted === 1)
                        <span class="ads-status span-bg-green"><i class="fa-solid fa-check"></i></span>
                    @endif

                    <div class="me-3">
                        <img class="authorAd-ad-image" src="{{$ad->images()->first()->getUrl(300,300)}}">
                    </div>

                    <div class="d-flex flex-column justify-content-center">
                        <h5 class="fw-bold fs-6 authorAd-link d-block d-md-none d-xl-block d-xxl-none">
                            @if (strlen($ad->title) > 10)
                                {{substr($ad->title, 0, 10)}}...
                            @else
                                {{$ad->title}}
                            @endif
                        </h5>
                        <h5 class="fw-bold fs-6 authorAd-link d-none d-md-block d-xl-none d-xxl-block">{{$ad->title}}</h5>
                        <h5>{{$ad->price}}€</h5>
                        {{-- Seconds Check --}}
                        @if ($this->now->diffInSeconds($ad->updated_at) < 60)
                            <small class="text-muted" class="text-muted">{{__('ui.publi')}} {{$this->now->diffInSeconds($ad->updated_at)}} {{__('ui.sfa')}}</small>
                        {{-- Minutes Check --}}
                        @elseif ($this->now->diffInMinutes($ad->updated_at) < 60)
                            @if ($this->now->diffInMinutes($ad->updated_at) == 1)
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInMinutes($ad->updated_at)}} {{__('ui.mfa')}}</small>
                            @else
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInMinutes($ad->updated_at)}} {{__('ui.msfa')}}</small>
                            @endif
                        {{-- Hours Check --}}
                        @elseif ($this->now->diffInHours($ad->updated_at) < 24)
                            @if ($this->now->diffInHours($ad->updated_at) == 1)
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInHours($ad->updated_at)}} {{__('ui.ofa')}}</small>
                            @else
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInHours($ad->updated_at)}} {{__('ui.osfa')}}</small>
                            @endif
                        {{-- Days Check --}}
                        @elseif ($this->now->diffInDays($ad->updated_at) >= 1 && $this->now->diffInYears($ad->updated_at) == 0)
                            @if ($this->now->diffInDays($ad->updated_at) == 1)
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInDays($ad->updated_at)}} {{__('ui.dfa')}}</small>
                            @else
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInDays($ad->updated_at)}} {{__('ui.dsfa')}}</small>
                            @endif
                        {{-- Years Check --}}
                        @elseif ($this->now->diffInYears($ad->updated_at) >= 1)
                            @if ($this->now->diffInYears($ad->updated_at) == 1)
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInYears($ad->updated_at)}} {{__('ui.yfa')}}</small>
                            @else
                                <small class="text-muted">{{__('ui.publi')}} {{$this->now->diffInYears($ad->updated_at)}} {{__('ui.ysfa')}}</small>
                            @endif
                        @endif
                    </div>

                </a> {{-- End Ad Card --}}

            </div>{{-- End Col --}}

        @endforeach
    
    </div>

    <div class="d-flex justify-content-center mt-3 mt-lg-2 mt-xxl-0">{{$ads->links()}}</div>
    
</div>