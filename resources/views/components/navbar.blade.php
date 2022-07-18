{{-- NAVBAR DESKTOP --}}

<nav class="navbar navbar-expand-lg @if(Request::url()==route('revisorDashboard')|| Request::routeIs('revisorDetailAd')) presto-nav-yellow @else presto-nav @endif web-nav navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand py-3" href="/">
            <img src="/../media/logo.svg" alt="" width="120">        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{route('indexAds')}}">{{__('ui.indexads')}}</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @guest    
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{route('register')}}">{{__('ui.reg')}}</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{route('login')}}">{{__('ui.log-in')}}</a>
                </li>
                @else
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{route('createAd')}}">{{__('ui.catadsnew')}}</a>
                </li>
                <li class="nav-item d-flex align-items-center dropdown">
                    {{-- avatar profile --}}
                    @if (Auth::user()->profile)
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/storage/{{Auth::user()->profile->avatar_profile}}" class="avatarProfileNav"> <span>{{Auth::user()->name}}</span>
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/media/avatarProfile.jpg" class="avatarProfileNav"> <span>{{Auth::user()->name}}</span>
                    </a>                 
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('privateProfile')}}">{{__('ui.profile')}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        {{-- <li><a class="dropdown-item" href="#">{{__('ui.miei')}}</a></li>
                        <li><hr class="dropdown-divider"></li> --}}
                        @if (Auth::user()->is_revisor)                           
                        <li><a class="dropdown-item position-relative" href="{{route('revisorDashboard')}}">{{__('ui.revisoring')}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Ad::toBeRevisionedCount()}}
                        </span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        <a class=" nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('ui.out')}}</a>      
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </ul>
                </li>
                @endguest
                <li class="nav-item d-flex align-items-center dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.lang')}}
                    </a>
                    <ul class="dropdown-menu" style="min-width: none !important;" aria-labelledby="navbarDropdown">
                        <li>
                            <x-_locale lang="it" nation="it"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="en" nation="gb"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="fr" nation="fr"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="es" nation="es"></x-_locale>
                        </li> 
                        <li>
                            <x-_locale lang="pt" nation="pt"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="ke" nation="ke"></x-_locale>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- NAVBAR MOBILE BOTTOM --}}

<nav class="navbar navbar-expand @if(Request::url()==route('revisorDashboard')) presto-nav-yellow @else presto-nav @endif mobile-nav navbar-light fixed-bottom">
    <div class="container">
        <a class="navbar-brand py-3" href="/">
            <img src="/../media/pittogrammaPresto.svg" alt="" width="30">        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="{{route('indexAds')}}"><i class="fa-solid fa-rectangle-list fa-xl"></i></a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @guest    
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-3" href="{{route('register')}}"><i class="fa-solid fa-address-card fa-xl"></i></a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-3" href="{{route('login')}}"><i class="fa-solid fa-user fa-xl"></i></a>
                </li>
                @else
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link px-3" href="{{route('createAd')}}"><i class="fa-solid fa-circle-plus fa-xl"></i></a>
                </li>
                <li class="nav-item d-flex align-items-center dropup">
                    {{-- avatar profile --}}
                    @if (Auth::user()->profile)
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/storage/{{Auth::user()->profile->avatar_profile}}" class="avatarProfileNav">
                    </a>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/media/avatarProfile.jpg" class="avatarProfileNav">
                    </a>                 
                    @endif
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('privateProfile')}}">{{__('ui.profile')}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        {{-- <li><a class="dropdown-item" href="#">{{__('ui.miei')}}</a></li>
                        <li><hr class="dropdown-divider"></li> --}}
                        @if (Auth::user()->is_revisor)                           
                        <li><a class="dropdown-item position-relative" href="{{route('revisorDashboard')}}">{{__('ui.revisoring')}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Ad::toBeRevisionedCount()}}
                        </span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('ui.out')}}</a>      
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </ul>
                </li>
                @endguest
                <li class="nav-item d-flex align-items-center dropup dropup">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-flag fa-xl"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" style="min-width: none !important;" aria-labelledby="navbarDropdown">
                        <li>
                            <x-_locale lang="it" nation="it"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="en" nation="gb"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="fr" nation="fr"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="es" nation="es"></x-_locale>
                        </li> 
                        <li>
                            <x-_locale lang="pt" nation="pt"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="ke" nation="ke"></x-_locale>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{-- NAVBAR MOBILE TOP --}}
<nav class="navbar @if(Request::url()==route('revisorDashboard')) presto-nav-yellow @else presto-nav @endif mobile-nav navbar-light fixed-top">
    <div class="container justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="/../media/logo.svg" alt="" width="80">
      </a>
    </div>
  </nav>



