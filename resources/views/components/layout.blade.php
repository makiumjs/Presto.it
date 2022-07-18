<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon --}}
    <link rel="icon" href="{{ URL::asset('favicon/favicon.jpg') }}" type="image/x-icon"/>
    {{-- swiper --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    {{-- google font  poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @livewireStyles
    <title>{{$title ?? ''}}</title>
</head>
<body>
    <x-navbar/>
    <div class="min-vh-100">
        {{$slot}}
    </div>
    @if (Request::routeIs('register')||Request::routeIs('login')||Request::url()==route('revisorDashboard'))
    @else
    <x-footer/>
    @endif
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/2ff2af688a.js" crossorigin="anonymous"></script>

    {{-- swiper --}}
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    @livewireScripts
</body>
</html>