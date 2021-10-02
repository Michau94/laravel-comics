<header>

    <div class="header-top">

        <div class="container">
            <div>DC POWER&trade; VISA&reg;</div>
            <div>ADDITIONAL DC SITES<i class="fas fa-caret-down"></i></div>
        </div>


    </div>
    <div class="header-bottom">

        <div class="container">
            <figure>
                <a href="{{ url('/') }}"><img src={{ asset('images/dc-logo.png') }} alt="Logo" /></a>
            </figure>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Characters</a></li>
                    <li><a href="{{ route('comics') }}">Comics</a></li>
                    <li><a :href="">Movies</a></li>
                    <li><a :href="">Tv</a></li>
                    <li><a :href="">Games</a></li>
                    <li><a :href="">Collectibles</a></li>
                    <li><a :href="">Videos</a></li>
                    <li><a :href="">Fans</a></li>
                    <li><a :href="">News</a></li>
                    <li><a :href="">Shop</a></li>
                </ul>
            </nav>
            <input type="search" placeholder="Search">
        </div>
    </div>
</header>
