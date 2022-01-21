@extends('layouts.main-layout')
@section('content')
    <section id="home-page-content">
        <div class="container">
            <div class="title-wrapper">
                <h2>Current series</h2>
            </div>
    
            <div class="cards-container">
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
    
                <div class="card">
                    <div class="card-img">
                        <img src="https://www.fr4med.it/wp-content/uploads/2021/06/batman-urban-legends-7-batman-beyond-1272981.jpeg" alt="comic image">
                    </div>
    
                    <div class="card-title">
                        Action comics
                    </div>
                </div>
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
                    <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
                    <span>Digital comics</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
                    <span>Dc merchandise</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
                    <span>Subscription</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
                    <span>Comic shop locator</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
                    <span>Dc power visa</span>
                </a>
            </li>
        </ul>
    </section>
@endsection