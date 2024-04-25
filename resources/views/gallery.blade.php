@extends('layouts.main')
@section('content')

<!-- header -->
<header class="flex header-sm">
    <div class="container">
        <div class="header-title">
            <h1>Destination</h1>
            <p>Some Recomendation Special <br> Destination For Information Your Trip</p>
        </div>
    </div>
</header>
<!-- header -->

<!-- gallery section -->
<div id="gallery" class="py-4">

    <div class="wave-image">
        <img src="images/ombak.png" alt="Wave" class="wave-img">
    </div>

    <div class="container">
        <div class="title-wrap">
            <h2 class="sm-title">information</h2>
            <h3 class="lg-title">featured places</h3>
        </div>
        <div class="gallery-row">
            <div class="gallery-item shadow">
                <img src="images/gallery-1.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-2.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-3.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-4.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-5.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-6.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-7.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-8.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            <div class="gallery-item shadow">
                <img src="images/gallery-9.jpg" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
        </div>
    </div>
</div>
<!-- end of gallery section -->


<!-- featured section -->
<section id="featured" class="py-4">
    <div class="container">
        <div class="title-wrap">
            <h2 class="sm-title">information</h2>
            <h3 class="lg-title">featured places</h3>
        </div>

        <div class="featured-row">
            <div class="featured-item my-2 shadow">
                <img src="images/featured-reo-de-janeiro-brazil.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Reo De Janeiro, Brazil
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos
                            libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="images/featured-north-bondi-australia.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        North Bondi, Australia
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos
                            libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="images/featured-berlin-germany.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Berlin, Germany
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos
                            libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="images/featured-khwaeng-wat-arun-thailand.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Khwaeng wat arun, thailand
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos
                            libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="images/featured-rome-italy.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        Rome, Italy
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos
                            libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>

            <div class="featured-item my-2 shadow">
                <img src="images/featured-fuvahmulah-maldives.jpg" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                        fuvahmulah, maldives
                    </span>
                    <div>
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos
                            libero soluta illum, harum amet excepturi sit?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of featured section -->


<!-- img modal -->
<div id="img-modal-box">
    <div id="img-modal">
        <button type="button" id="modal-close-btn" class="flex">
            <i class="fas fa-times"></i>
        </button>
        <button type="button" id="prev-btn" class="flex">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" id="next-btn" class="flex">
            <i class="fas fa-chevron-right"></i>
        </button>
        <img src="images/gallery-1.jpg">
    </div>
</div>
<!-- end of img modal -->

<!-- popular places section -->
<section id="popular" class="py-4">
    <div class="title-wrap">
        <span class="sm-title">Destination</span>
        <h2 class="lg-title">Popular Places</h2>
    </div>

    <div class="popular-row">
        <div class="popular-item shadow">
            <img src="images/popular-1.jpg" alt="">
            <div>
                <span>Eiffel Tower, Paris</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-2.jpg" alt="">
            <div>
                <span>Machu Picchu, Peru</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-3.jpg" alt="">
            <div>
                <span>Acropolis, Athens</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-4.jpg" alt="">
            <div>
                <span>Bali, Indonesia</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-5.jpg" alt="">
            <div>
                <span>Dubai, United Arab Emirates</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-6.jpg" alt="">
            <div>
                <span>Bhutan</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-7.jpg" alt="">
            <div>
                <span>Havana, Cuba</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>

        <div class="popular-item shadow">
            <img src="images/popular-8.jpg" alt="">
            <div>
                <span>Moskva, Russia</span>
                <ul class="rating flex">
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star"></i></li>
                    <li><i class="fas fa-star-half-alt"></i></li>
                    <li>&nbsp;400 reviews</li>
                </ul>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quia!</p>
            </div>
        </div>
    </div>
</section>
<!-- end of popular places section -->

@endsection
