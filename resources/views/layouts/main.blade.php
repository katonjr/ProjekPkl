<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TonBlog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--file bootstrap cdn alert --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- fonts -->
    <link rel="stylesheet" href="{{ asset('font/fonts.css') }}">
    <!-- normalize css -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/utility.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>

    <!-- navbar  -->
    <nav class="navbars">
        <div class="container flex">
            <a href="/" class="site-brand">
                Ton<span>Blog</span>
            </a>

            <button type="button" id="navbar-show-btn" class="flex">
                <i class="fas fa-bars"></i>
            </button>
            <div id="navbar-collapse">
                <button type="button" id="navbar-close-btn" class="flex">
                    <i class="fas fa-times"></i>
                </button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/gallery" class="nav-link">Destiny</a>
                    </li>
                    <li class="nav-item">
                        <a href="/blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- end of navbar  -->

    {{-- isi konten --}}
    @yield('content')
    @include('sweetalert::alert')
    {{-- akhir konten --}}

    <!-- footer -->
    <section class="mountain-section">
        <img src="{{ asset('images/gunung.png') }}" alt="Mountain" class="mountain-image">
        <footer class="py-4">
            <div class="container footer-row">
                <div class="footer-item">
                    <a href="/" class="site-brand">
                        Ton<span>Blog</span>
                    </a>
                    <p class="text">Discover the world through our lens. Our travel blog is your passport to
                        unforgettable experiences, insider tips, and hidden treasures across the globe. Join us as
                        we
                        navigate the world's wonders, providing expert insights and curated itineraries to enhance
                        your
                        adventures. Let's embark on a journey together and unlock the extraordinary. Adventure
                        awaits!
                    </p>
                </div>

                <div class="footer-item">
                    <h2>Follow us on: </h2>
                    <ul class="social-links">
                        <li>
                            <a href="https://www.facebook.com/profile.php?id=100013998197181">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/katon_galih_/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/Katon_me/">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://id.pinterest.com/neutralshop/">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/@galiharts539">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href="#">Thailand</a></li>
                        <li><a href="#">Australia</a></li>
                        <li><a href="#">Maldives</a></li>
                        <li><a href="#">Switzerland</a></li>
                        <li><a href="#">Germany</a></li>
                    </ul>
                </div>

                <div class="subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class="flex">
                        <input type="email" placeholder="Enter Email" class="form-control">
                        <input type="submit" class="btn" value="Subscribe">
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <!-- end of footer -->

    <script>
        // JavaScript untuk mengubah navbar saat digulir
        let navbarDiv = document.querySelector('.navbars');
        window.addEventListener('scroll', () => {
            if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
                navbarDiv.classList.add('navbar-cng');
            } else {
                navbarDiv.classList.remove('navbar-cng');
            }
        });

        // JavaScript untuk menangani tampilan dan pengaturan sidebar navbar
        const navbarCollapseDiv = document.getElementById('navbar-collapse');
        const navbarShowBtn = document.getElementById('navbar-show-btn');
        const navbarCloseBtn = document.getElementById('navbar-close-btn');

        // Tampilkan sidebar navbar
        navbarShowBtn.addEventListener('click', () => {
            navbarCollapseDiv.classList.add('navbar-collapse-rmw');
        });

        // Sembunyikan sidebar navbar
        navbarCloseBtn.addEventListener('click', () => {
            navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
        });

        document.addEventListener('click', (e) => {
            if (e.target.id != "navbar-collapse" && e.target.id != "navbar-show-btn" && e.target.parentElement
                .id != "navbar-show-btn") {
                navbarCollapseDiv.classList.remove('navbar-collapse-rmw');
            }
        });

        // Berhenti transisi dan animasi saat menyesuaikan ukuran jendela
        let resizeTimer;
        window.addEventListener('resize', () => {
            document.body.classList.add("resize-animation-stopper");
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                document.body.classList.remove("resize-animation-stopper");
            }, 400);
        });
    </script>
</body>

</html>
