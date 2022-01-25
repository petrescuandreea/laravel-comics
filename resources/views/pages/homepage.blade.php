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
            @foreach ($comicShop as $shopItem)
                <li>
                    <a href=" {{ $shopItem['url'] }} ">
                        <img src=" {{ asset($shopItem['image']) }} " alt=" {{ $shopItem['text'] }} ">
                        <span> {{ $shopItem['text'] }} </span>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection