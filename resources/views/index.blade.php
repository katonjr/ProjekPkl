@extends('layouts.main')
@section('content')
            <!-- header -->
            <header class="flex">
                <div class="container">
                    <div class="header-title">
                        <h1>Dicover</h1>
                        <p>The World's Hidden Gems<br> Your Journey Starts Here!</p>
                    </div>

                </div>
            </header>
            <!-- header -->

            <!-- featured section -->
            <section id="featured" class="py-4">
                <div class="container">
                    <div class="title-wrap">
                        <h2 class="sm-title">information</h2>
                        <h3 class="lg-title">featured places</h3>
                    </div>

                    <div class="featured-row">
                        <div class="featured-item my-2 shadow">
                            <img src="{{ asset('images/featured-reo-de-janeiro-brazil.jpg') }}" alt="featured place">
                            <div class="featured-item-content">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Reo De Janeiro, Brazil
                                </span>
                                <div>
                                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                        dignissimos libero soluta illum, harum amet excepturi sit?</p>
                                </div>
                            </div>
                        </div>

                        <div class="featured-item my-2 shadow">
                            <img src="{{ asset('images/featured-north-bondi-australia.jpg') }}" alt="featured place">
                            <div class="featured-item-content">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    North Bondi, Australia
                                </span>
                                <div>
                                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                        dignissimos libero soluta illum, harum amet excepturi sit?</p>
                                </div>
                            </div>
                        </div>

                        <div class="featured-item my-2 shadow">
                            <img src="{{ asset('images/featured-berlin-germany.jpg') }}" alt="featured place">
                            <div class="featured-item-content">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Berlin, Germany
                                </span>
                                <div>
                                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                        dignissimos libero soluta illum, harum amet excepturi sit?</p>
                                </div>
                            </div>
                        </div>

                        <div class="featured-item my-2 shadow">
                            <img src="{{ asset('images/featured-khwaeng-wat-arun-thailand.jpg') }}" alt="featured place">
                            <div class="featured-item-content">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Khwaeng wat arun, thailand
                                </span>
                                <div>
                                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                        dignissimos libero soluta illum, harum amet excepturi sit?</p>
                                </div>
                            </div>
                        </div>

                        <div class="featured-item my-2 shadow">
                            <img src="{{ asset('images/featured-rome-italy.jpg') }}" alt="featured place">
                            <div class="featured-item-content">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    Rome, Italy
                                </span>
                                <div>
                                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                        dignissimos libero soluta illum, harum amet excepturi sit?</p>
                                </div>
                            </div>
                        </div>

                        <div class="featured-item my-2 shadow">
                            <img src="{{ asset('images/featured-fuvahmulah-maldives.jpg') }}" alt="featured place">
                            <div class="featured-item-content">
                                <span>
                                    <i class="fas fa-map-marker-alt"></i>
                                    fuvahmulah, maldives
                                </span>
                                <div>
                                    <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed
                                        dignissimos libero soluta illum, harum amet excepturi sit?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end of featured section -->


            <!-- blog section -->
            <section id="blog" class="py-4">

                <div class="wave-image">
                    <img src="{{ asset('images/ombak.png') }}" alt="Wave" class="wave-img">
                </div>

                <div class="container">
                    <div class="title-wrap">
                        <h2 class="sm-title">information</h2>
                        <h3 class="lg-title">recent blog</h3>
                    </div>

                    <div class="blog-row">
                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/pantai.jpg') }}" alt="blog">
                                <span class="blog-date">April 04 , 2024</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>Pacitan | Katon</span>
                                <a href="{{ url('detail') }}">6 Recommendations for the Most Beautiful Beaches in Pacitan City, East
                                    Java</a>
                                <p class="text">Pacitan, a city on the southern coast of East Java, Indonesia, is famous for
                                    the
                                    stunning beauty of its beaches. With a long stretch of white sandy beaches, clear sea
                                    water
                                    and stunning coral cliffs, Pacitan Beach offers an unforgettable holiday experience for
                                    visitors looking for peace and natural beauty.

                                </p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-2.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-3.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-4.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-5.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-6.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-7.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-8.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                        <div class="blog-item my-2 shadow">
                            <div class="blog-item-top">
                                <img src="{{ asset('images/blog-3.jpg') }}" alt="blog">
                                <span class="blog-date">oct 28, 2021</span>
                            </div>
                            <div class="blog-item-bottom">
                                <span>travel | john doe</span>
                                <a href="#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                                    voluptatem
                                    nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero
                                    explicabo laboriosam.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- end of blog section -->

@endsection
