<x-layout>
    <x-slot name='title'>{{__('ui.profdi')}} {{$author->name}}</x-slot>

    {{-- Container View --}}
    <div class="container">

        {{-- Padding Top --}}
        <div class="authorProfile-padding-top">

            {{-- Main Row --}}
            <div class="row">

                {{-- Left Col --}}
                <div class="col-12 col-lg-4">

                    {{-- Section Basic Informations --}}
                    <section class="row revisor-card d-flex px-4 py-3 m-0">
                        <div class="col-12 col-xl-4 d-flex justify-content-center">
                            @if($author->profile != null && $author->profile->avatar_profile)
                                <img class="avatarAuthorProfile" src="/storage/{{$author->profile->avatar_profile}}">
                            @else
                                <img class="avatarAuthorProfile" src="/media/avatarProfile.jpg">
                            @endif
                        </div>
                        <div class="col-12 col-xl-8 authorProfile-details d-flex flex-column justify-content-center mt-3 mt-xl-0">
                            <h5 class="m-0 fw-bold text-center text-xl-start">{{$author->name}}</h5>
                            @if($author->profile)
                                @if($author->profile->city && $author->profile->country)
                                    <p class="m-0 text-center text-xl-start">{{$author->profile->city}}, {{$author->profile->country}}</p>
                                @elseif($author->profile->city && $author->profile->country == null)
                                    <p class="m-0 text-center text-xl-start">{{$author->profile->city}}</p>
                                @elseif($author->profile->city == null && $author->profile->country)
                                    <p class="m-0 text-center text-xl-start">{{$author->profile->country}}</p>
                                @elseif($author->profile->city == null && $author->profile->country == null)
                                    <p class="m-0 text-center text-xl-start">{{__('ui.nonspec')}}</p>
                                @endif
                            @elseif($author->profile == null)
                                <p class="m-0 text-center text-xl-start">{{__('ui.nonspec')}}</p>
                            @endif
                        </div>
                    </section>

                    {{-- Section Bio --}}
                    <section class="revisor-card p-4 mt-4">
                        <div class="authorProfile-bio">
                            <h5 class="fw-bold">{{__('ui.bio')}}</h5>
                            @if($author->profile)
                                @if($author->profile->bio)
                                    <p class="m-0">{{$author->profile->bio}}</p>
                                @else
                                    <p class="m-0">{{$author->name}} {{__('ui.nondesc')}}</p>
                                @endif
                            @elseif($author->profile == null)
                                <p class="m-0">{{$author->name}} {{__('ui.nondesc')}}</p>
                            @endif
                        </div>
                    </section>

                    {{-- Section Contacts --}}
                    <section class="revisor-card p-4 mt-4">
                        <div class="authorProfile-contacts">
                            <h5 class="fw-bold">{{__('ui.contactss')}}</h5>
                            @if($author->profile)
                                @if($author->profile->phone_number)
                                    <h6 class="mt-3"><span class="me-3"><i class="fa-solid fa-phone"></i></span>{{$author->profile->phone_number}}</h6>
                                @else
                                    <h6 class="mt-3"><span class="me-3"><i class="fa-solid fa-phone"></i></span>{{__('ui.nonnum')}}</h6>                                    
                                @endif
                            @elseif($author->profile == null)
                                <h6 class="mt-3"><span class="me-3"><i class="fa-solid fa-phone"></i></span>{{__('ui.nonnum')}}</h6>
                            @endif
                            <h6 class="mt-3"><span class="me-3"><i class="fa-solid fa-envelope"></i></span>{{$author->email}}</h6>
                        </div>
                    </section>

                </div> {{-- End Left Col --}}

                {{-- Right Col --}}
                <div class="col-12 col-lg-8 mt-5 mt-lg-0">

                    {{-- Section Ads --}}
                    <section class="revisor-card h-100">

                        {{-- Title Section --}}
                        <div>
                            <h2 class="text-center pt-4">{{__('ui.annpub')}}</h2>
                        </div>

                            {{-- Livewie Pagination --}}
                            <livewire:author-ads :author="$author"></livewire:author-ads>

                    </section> {{-- End Section Ads --}}

                </div> {{-- End Right Col --}}

            </div> {{-- End Main Row --}}

        </div> {{-- Padding Top --}}

    </div> {{-- Container View --}}

</x-layout>