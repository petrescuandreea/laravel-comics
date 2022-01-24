@extends('layouts.main-layout')
@section('content')
    <section id="comic">
        <div class="bg-light-blue">
            <div class="container-center">
                <div class="comic-img-wrapper">
                    <a href="{{ route('homepage') }}">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="comic image">
                        <div class="gallery">
                            <span>View gallery</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="comic-wrapper">
            <div class="container-center clearfix">
                <div class="comic-description-left">
                    <h2>
                        Action comics &#35;1000: the deluxe edition
                    </h2>
    
                    <div class="price-wrapper">
                        <div class="price">
                            <span class="light-green-txt">U.S. Price:</span> <span> &#36;19.99</span>
                        </div>
    
                        <div class="sale-status-container">
                            <div class="sale-status">
                                <span class="light-green-txt">Available</span>
                            </div>

                            <div class="check-availability">
                                Check Availability <span>&#11206</span>
                            </div>
                        </div>
                    </div>

                    <div class="description-wrapper">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat natus aperiam nobis ipsam eos voluptatem asperiores magni iste quas, corporis consectetur modi quae vero molestiae sequi ratione minus reprehenderit eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis magnam aut quae quasi, excepturi aliquid provident facilis quo maxime fugiat quaerat similique qui nam vel ipsam tempore sit sequi eius! Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                    </div>
                </div>

                <div class="comic-adv-right">
                    <div class="adv-text">
                        <span>advertisement</span>
                    </div>

                    <div class="image-wrapper">
                        <img src="https://www.toyslife.it/sito/wp-content/uploads/tweeterhead-dc-comics-superman-maquette-toyslife-icon.jpg" alt="advertising image">
                    </div>
                </div>
            </div>
        </div>

        <div class="comic-details">
            <div class="container-center-clearfix">
                <div class="comic-details-left">
    
                </div>
    
                <div class="comic-details-right">
                    
                </div>
            </div>
        </div>

        <div class="shop-menu container-center">

        </div>

    </section>
@endsection