@extends ('./layouts/main_layout');

@section('content')
    <section id="single">


        <div class="photo-strip">
            <div class="container">
                <img src="{{ $comics[0]['thumb'] }}" alt="Foto">
            </div>
        </div>

        <div class="comics-info container">
            <div class="infos">
                <h1>{{ $comics[0]['title'] }}</h1>
                <div class="price">
                    <div>US: price {{ $comics[0]['price'] }}</div>
                </div>
                <p>{{ $comics[0]['description'] }}</p>
            </div>
            <div class="adv">
                <img src="{{ asset('../images/adv.jpg') }}" alt="Main-img">
            </div>
        </div>







    </section>



@endsection
