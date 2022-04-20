@extends('layouts.standard')

@section('mainContent')
<main>
    <section id="blue-banner">
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../assets/img/buy-comics-digital-comics.png" alt="">
                        </figure>
                        <span>Digital Comics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../assets/img/buy-comics-merchandise.png" alt="">
                        </figure>
                        <span>DC Merhandise</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../assets/img/buy-comics-subscriptions.png" alt="">
                        </figure>
                        <span>Subscription</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../assets/img/buy-comics-shop-locator.png" alt="">
                        </figure>
                        <span>Comic Shop Locator</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <figure>
                            <img src="../assets/img/buy-dc-power-visa.svg" alt="">
                        </figure>
                        <span>DC Power Visa</span>
                    </a>
                </li>        
            </ul>
        </div>
    </section>

    <section id="jumbo">
        <figure id="jumbo-figure">
            <img src="../assets/img/jumbotron.jpg" alt="">
        </figure>

        <div class="container">

            <button id="current-series">Current series</button>

            <div id="card-wrapper">
                <Card v-for="(element, i) in comics" :key="i"
                :img="element.thumb" :series="element.series" />
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
                        <img src="../assets/img/footer-facebook.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/footer-periscope.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/footer-pinterest.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/footer-twitter.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/footer-youtube.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</main>
@endsection