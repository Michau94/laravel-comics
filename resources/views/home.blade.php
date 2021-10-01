@extends ('/layouts/main_layout')

@section('content')

<section class="cards">

    <div class="container">
        
        <div class="button">
            Current Series
        </div>

        @foreach ($comics as $comic)
        <div class="card">
            <figure>
                <a href="#"><img src="{{$comic['thumb']}}" /></a>
            </figure>
            <figcaption> {{$comic['title']}}</figcaption>
        </div>
        @endforeach
  </div>



</section>


@endsection
