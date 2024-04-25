@extends('layouts.main')
@section('content')

        <!-- header -->
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Blog Page</h1>
                    <p>Read To Get Information <br> Someone About The Journey The Have Taken</p>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- blog section -->
        <section id = "blog" class = "py-4">

            <div class="wave-image">
                <img src="images/ombak.png" alt="Wave" class="wave-img">
            </div>

            <div class = "container">
                <div class = "title-wrap">
                    <h2 class = "sm-title">information</h2>
                    <h3 class = "lg-title">recent blog</h3>
                </div>

                <div class="blog-row">
                    <div class="blog-item my-2 shadow">
                        <div class="blog-item-top">
                            <img src="images/pantai.jpg" alt="blog">
                            <span class="blog-date">April 04 , 2024</span>
                        </div>
                        <div class="blog-item-bottom">
                            <span>Pacitan | Katon</span>
                            <a href="{{ asset('detail') }}">6 Recommendations for the Most Beautiful Beaches in Pacitan City, East
                                Java</a>
                            <p class="text">Pacitan, a city on the southern coast of East Java, Indonesia, is famous for the
                                stunning beauty of its beaches. With a long stretch of white sandy beaches, clear sea water
                                and stunning coral cliffs, Pacitan Beach offers an unforgettable holiday experience for
                                visitors looking for peace and natural beauty.

                            </p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-2.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-3.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-4.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-5.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-6.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-7.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-8.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-2.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-3.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-4.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-5.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-6.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-5.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                    <div class = "blog-item my-2 shadow">
                        <div class = "blog-item-top">
                            <img src = "images/blog-6.jpg" alt = "blog">
                            <span class = "blog-date">oct 28, 2021</span>
                        </div>
                        <div class = "blog-item-bottom">
                            <span>travel | john doe</span>
                            <a href = "#">Lorem, ipsum dolor sit amet consectetur adipisicing elit?</a>
                            <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio voluptatem nulla harum accusantium tempora dicta quas quod id, repellat temporibus illo libero explicabo laboriosam.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end of blog section -->

@endsection
