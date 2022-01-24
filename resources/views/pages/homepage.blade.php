@extends('layouts.main-layout')
@section('content')
    <section id="home-page-content">
        <div class="container">
            <div class="title-wrapper">
                <h2>Current series</h2>
            </div>
    
            <div class="cards-container">
                @foreach ($comicSeries as $comicSerie)
                    <div class="card">
                        <a href="{{ route('single-page') }}">
                            <div class="card-img">
                                <img src="{{ asset($comicSerie['image']) }}" alt="{{ $comicSerie['series'] }}">
                            </div>
            
                            <div class="card-title">
                                {{ $comicSerie['series'] }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="btn-container" >
                <div class="btn-load-more">
                    <h5>load more</h5>
                </div>
            </div>
        </div>
    </section>

    <section id="home-page-shop">
        <ul class="container">
            <li>
                <a href="#">
                    <img src="{{ asset('storage/assets/buy-comics-digital-comics.png') }}" alt="">
                    <span>Digital comics</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('storage/assets/buy-comics-merchandise.png') }}" alt="">
                    <span>Dc merchandise</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('storage/assets/buy-comics-subscriptions.png') }}" alt="">
                    <span>Subscription</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('storage/assets/buy-comics-shop-locator.png') }}" alt="">
                    <span>Comic shop locator</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('storage/assets/buy-dc-power-visa.svg') }}" alt="">
                    <span>Dc power visa</span>
                </a>
            </li>
        </ul>
    </section>
@endsection