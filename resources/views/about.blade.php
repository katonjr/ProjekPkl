@extends('layouts.main')
@section('content')

<!-- header -->
<header class="flex header-sm">
    <div class="container">
        <div class="header-title">
            <h1>About</h1>
            <p>Things To Know <br> About My Our Story</p>
        </div>
    </div>
</header>
<!-- header -->

<!-- about section -->
<section id="about" class="py-4">
    <div class="container">
        <div class="title-wrap">
            <span class="sm-title">Information</span>
            <h2 class="lg-title">About Me</h2>
        </div>

        <div class="about-row">
            <div class="about-left my-2">
                <img src="images/about-img.jpg" alt="about img">
            </div>
            <div class="about-right">
                <h2>Hi, I'm Katon </h2>
                <p class="text">The first adventure was when I was 6 years old,
                    my mother took me to Kenjeran Beach Surabaya,
                    by boarding an public transportation.
                    My hometown is in Surabaya, East Java.
                    That's where the excitement of my adventure
                    probably started to emerge.
                </p>
                <p class="text"> always like new things.

                    I like getting lost. By getting lost I often see new worlds
                    that I have never seen before.
                    In the past, the tastiest and most beautiful areas were forests.
                    However, once I get to know the sea, my thinking will change.

                    I like the sea and quiet beaches. I like silence.</p>
            </div>
        </div>
    </div>
</section>
<!-- end of about section -->


@endsection
