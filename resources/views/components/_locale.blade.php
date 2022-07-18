<form class="d-inline" action="{{route("set_language_locale", $lang)}}" method="POST">
    @csrf
    <button type="submit" class="nav-link" style="background-color:transparent; border:none;">
        <span class="fi-{{$nation}} fi"></span>
        @switch($nation)
        @case("it")
        <span class="ms-2">Italiano</span>
        @break
        @case("gb")
        <span class="ms-2">English</span>
        @break
        @case("pt")
        <span class="ms-2">Português</span>
        @break
        @case("fr")
        <span class="ms-2">Français</span>
        @break
        @case("es")
        <span class="ms-2">Español</span>
        @break
        @case("ke")
        <span class="ms-2">Swahili</span>
        @break
        @endswitch
    </button>
</form>