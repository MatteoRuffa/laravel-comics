<header class="container">
    <div><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo"></div>
    <div>
        <ul>
            @foreach($dccomics as $dccomic)
                <li><a href="#">{{ $dccomic['name'] }}</a></li>
            @endforeach
        </ul>
    </div>
</header>