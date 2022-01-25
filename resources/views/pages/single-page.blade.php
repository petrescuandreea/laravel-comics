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
                            The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April&#33; This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more&#33; Plus: a complete reprint of the stories that started it all&#45;&#45;the Superman stories Action Comics &#35;1 and 2 from 1938&#33;
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