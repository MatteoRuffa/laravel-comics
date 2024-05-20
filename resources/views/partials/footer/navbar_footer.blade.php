<section>
        <div class="container">
            <ul>
                @foreach ($navbarFooter as $item)
                    <li>
                        <a class="d-flex align-items-center " :href="{{ $item['link'] }}">
                        <img src="{{  Vite::asset('resources' . $item['img']) }}" alt="{{ $item['name'] }}">
                            <div>{{ $item['name'] }}</div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>