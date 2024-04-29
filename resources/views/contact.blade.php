@extends('layouts.main')
@section('content')

<!-- header -->
<header class="flex header-sm">
    <div class="container">
        <div class="header-title">
            <h1>Contact</h1>
            <p>Contact Me For <br> More Detail Information</p>
        </div>
    </div>
</header>
<!-- header -->

<!-- contact section -->
<section id="contact" class="py-4">
    <div class="container">
        <div class="title-wrap">
            <span class="sm-title">information</span>
            <h2 class="lg-title">contact us</h2>
        </div>

        <div class="contact-row">
            <div class="contact-left">
                <form class="contact-form">
                    <input type="text" class="form-control" placeholder="Your name">
                    <input type="email" class="form-control" placeholder="Your email">
                    <textarea rows="4" class="form-control" placeholder="Your message" style="resize: none;"></textarea>
                    <input type="submit" class="btn" value="Send message">
                </form>
            </div>
            <div class="contact-right my-2">
                <div class="contact-item">
                    <span class="contact-icon flex">
                        <i class="fa fa-phone-alt"></i>
                    </span>
                    <div>
                        <span>Phone</span>
                        <p class="text">{{ $datas->phone }}</p>
                    </div>
                </div>
                <div class="contact-item">
                    <span class="contact-icon flex">
                        <i class="fa fa-map-marked-alt"></i>
                    </span>
                    <div>
                        <span>Address</span>
                        <p class="text">{{ $datas->address }}</p>
                    </div>
                </div>
                <div class="contact-item">
                    <span class="contact-icon flex">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <div>
                        <span>Email</span>
                        <p class="text">{{ $datas->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
