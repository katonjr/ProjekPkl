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
            <h2 class="sm-title">Gallery</h2>
            <h3 class="lg-title">featured places</h3>
        </div>

        <div class="gallery-row">
            @foreach ($datagallery as $gallery )
            <div class="gallery-item shadow">
                <img src="{{ asset('uploads/'.$gallery->image) }}" height="275px" alt="gallery img">
                <span class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </span>
            </div>
            @endforeach
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

            @foreach ($datafeatured as $featured )
            <div class="featured-item my-2 shadow">
                <img src="{{ asset('uploads/'.$featured->image) }}" height="400px" alt="featured place">
                <div class="featured-item-content">
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                       {{ $featured->tempat }}
                    </span>
                    <div>
                        <p class="text">{{ $featured->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach

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
        @foreach ($datapopular as $popular )
        <div class="popular-item shadow">
            <img src="{{ asset('uploads/'.$popular->image) }}" height="450px" alt="">
            <div>
                <p class="text">{{ $popular->deskripsi}}</p>
            </div>
        </div>
        @endforeach
    </div>


</section>
<!-- end of popular places section -->

@endsection
