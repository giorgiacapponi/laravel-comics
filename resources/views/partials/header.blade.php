<header>
    <div class="container d-flex justify-content-between align-items-center">
        <a href="{{url('/')}}" class="logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
        </a>
        <ul class="d-flex justify-content-between align-items-center">
            @foreach($nav_links as $link)
            <li >
                <a href="{{url('/characters')}}">{{$link}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</header>