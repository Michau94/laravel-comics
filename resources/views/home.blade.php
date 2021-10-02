@extends ('/layouts/main_layout')

@section('title', 'Homepage')

@section('content')

    <section class="cards">

        <div class="container flex-center-both">

            <div class="button">
                Current Series
            </div>
            @foreach ($comics as $comic)
                <div class="card">
                    <figure>
                        <a href="{{ route('single') }}"><img src="{{ $comic['thumb'] }}" /></a>
                    </figure>
                    <figcaption> {{ $comic['title'] }}</figcaption>
                </div>
            @endforeach
        </div>
    </section>
@endsection
