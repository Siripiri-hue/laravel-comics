<!-- views della pagina iniziale -->

@extends('layouts.standard')

@section('mainContent')
<main>
    @include ('partials.bluebanner')

    <section id="main-content">
        @include('partials.jumbo')

        <div class="container">

            <button id="current-series">Current series</button>

            <div id="card-wrapper">
                @foreach ($comics as $indice => $comic)
                    <div class="card">
                        <a href="{{ route('comic.show', ['id' => $indice]) }}">
                            <figure>
                                <img src="{{ $comic['thumb'] }}" alt="">
                                <figcaption>{{ $comic['series'] }}</figcaption>
                            </figure>
                        </a>
                    </div>
                @endforeach
            </div>         

            <button id="load-more">Load more</button>
        </div>
    </section>

    <section id="social-banner">
        <div class="container">
            <button id="sign-up"><a href="#">Sign up now!</a></button>

            <ul id="social-icons">
                <li id="social-cta">Follow Us</li>
                <li>
                    <a href="#">
                        <img src="{{ asset('img/facebook.png') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('img/periscope.png') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('img/footer-pinterest.png') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('img/footer-twitter.png') }}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="{{ asset('img/footer-youtube.png') }}" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
@endsection