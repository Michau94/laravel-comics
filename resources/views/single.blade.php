@extends ('./layouts/main_layout')
@section('title', 'Hero')

@section('content')
    <div id="single">
        <section class="info-thumb">
            <div class="photo-strip">
                <div class="container">
                    <img src="{{ $comics[0]['thumb'] }}" alt="Foto">
                </div>
            </div>
            <div class="comics-info container">
                <div class="infos">
                    <h1>{{ $comics[0]['title'] }}</h1>
                    <div class="price">
                        <div class="">US: price {{ $comics[0]['price'] }}</div>
                        <div class="
                            availability">
                            <div class="stock ">Available
                            </div>
                            <div class="btn-check"> Check Availability <i class="fas fa-caret-down"></i></div>
                        </div>

                    </div>
                    <p>{{ $comics[0]['description'] }}</p>
                </div>
                <div class="adv">
                    <img src="{{ asset('../images/adv.jpg') }}" alt="Main-img">
                </div>
            </div>
        </section>
        <section class="talent-specs">
            <div class="container">
                <div class="content">
                    <div class="talent col">
                        <h1>Talent</h1>
                        <hr />
                        <div class="row">
                            <h5>Art by:</h5>
                            <p>
                                @foreach ($comics[0]['artists'] as $artist)
                                    {{ $artist }},@if ($loop->last)
                                        .
                                    @endif
                                @endforeach
                            </p>
                        </div>
                        <hr />
                        <div class="row">
                            <h5>Written by:</h5>
                            <p>
                                @foreach ($comics[0]['writers'] as $writer)
                                    {{ $writer }}, @if ($loop->last)
                                    @endif
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="specs col">
                        <h1>Specs</h1>
                        <hr />
                        <div class="row">
                            <h5>Series:</h5>
                            <p>
                                {{ $comics[0]['series'] }}
                            </p>
                        </div>
                        <hr />
                        <div class="row">
                            <h5>U.S Price:</h5>
                            <p>
                                {{ $comics[0]['price'] }}
                            </p>
                        </div>
                        <hr />
                        <div class="row">
                            <h5>On Sale Date:</h5>
                            <p>
                                {{ $comics[0]['sale_date'] }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
