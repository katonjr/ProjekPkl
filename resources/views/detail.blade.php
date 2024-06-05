@extends('layouts.main')
@section('content')

<div class="container content-container">
    <div class="rows"
        style="padding-top: 100px;display: flex;flex-wrap: wrap;align-content: stretch;justify-content: space-evenly;align-items: baseline;">
        <!-- Detail Blog -->
        <div class="col-lg-8">
            <div class="blog-title">
                <h1>{{ $blog->judul }}</h1>
            </div>
            <div class="blog-dates mb-3"> {{ $blog->namacategory->nama_category }} | {{ $blog->nama->name ?? '' }} |
                {{ date('F d, Y', strtotime($blog->tanggal)) }}</div>

            <div class="blog-content">

                <img src="{{ asset('uploads/'.$blog->image) }}" alt="Pantai Pacitan" class="mb-3">
                <p>
                    {!! $blog->deskripsi !!}
                </p>
            </div>
        </div>


        <div class="tags col-lg-3">
            <h2>Tags Blog:</h2>
            @foreach ($blog->tags as $tag)
            <a href="{{url('blog/'. $blog->slug) }}" class="tag">{{ $tag->tags }}</a> &nbsp
            @endforeach

        </div>
    </div>



    <!-- Recent Blog -->
    <div class="col-lg-12 recent-blog">
        <br>
        <br>
        <div class="container">
            <div class="title-wrap">
                <h3 class="lg-title">You Might Also Like</h3>
            </div>

            <div class="container">
                @foreach ($datablog->chunk(3) as $datablogs)
                <div class="row">
                    @foreach ($datablogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('uploads/'.$blog->image) }}" alt="blog" height="300px">
                                <span class="blog-date">{{ date('F d, Y', strtotime($blog->tanggal)) }}</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>{{ $blog->namacategory->nama_category }} | {{ $blog->nama->name ?? '' }}</span>
                                <a href="{{ url('blog/'. $blog->slug) }}">{{ $blog->judul }}</a>
                                <span>{!!Str::limit ($blog->deskripsi,50) !!}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
</div>


<style>
    .navbars {
        background-color: #1ec6b6;
    }

    .navbar-cng .navbar-nav .nav-link {
        color: white;
    }

    .navbar-cng .site-brand {
        color: white;
    }

    .navbar-cng .site-brand span {
        color: white;
    }

    .navbar-cng #navbar-show-btn {
        color: white
    }
</style>


<style>

</style>
@endsection
