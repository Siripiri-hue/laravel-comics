<!-- views del dettaglio -->

@extends('layouts.standard')

@section('mainContent')
<main id="comic-detail">
    <section>
    <!-- barra blu -->
    </section>

    <section>
        <div class="container">
            <div class="comic-description">
                <div id="description" class="col-8">
                    <!-- titolo -->
                    <h1>{{ $fumetto['title'] }}</h1>
                    <!-- linea verde -->
                    <div id="green-line">
                        us price
                    </div>
                    <!-- descrizione -->
                    <p>{{ $fumetto['description'] }}</p>
                </div>
                
                <figure class="col-4">
                    <figcaption>Advertisement</figcaption>
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </figure>
            </div>
        </div>
    </section>

    <section>
    <!-- sezione con bkground grigio -->
    </section>
</main>
@endsection