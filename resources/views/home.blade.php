@extends ('layouts.main_layout')

@section('title', 'Homepage')

@section('content')

    <section class="cards">

        <div class="container flex-center-both">

            <div class="button series">
                Current Series
            </div>

            {{-- comics card section --}}
            @foreach ($comics as $comic)
                <div class="card">
                    <figure>
                        {{-- MODO CON URL --}}
                        {{-- <a href="{{ url('comics/' . $loop->index) }}"><img src="{{ $comic['thumb'] }}" /></a> --}}
                        <a href="{{ route('comic', ['id' => $loop->index]) }}"><img src="{{ $comic['thumb'] }}" /></a>
                    </figure>
                    <figcaption> {{ $comic['title'] }}</figcaption>
                </div>
            @endforeach

            <div>
                <span class="button">
                    Load More
                </span>
            </div>
        </div>
    </section>


    {{-- blue section with cards --}}
    <section class="bonus">
        <div class=" container">
            @foreach ($cards as $card)
                <div class="item">
                    <figure>
                        <img src="{{ $card['path'] }}" alt="DigitalComics" />
                    </figure>
                    <span> {{ $card['text'] }}</span>
                </div>
            @endforeach
        </div>

    </section>


@endsection
