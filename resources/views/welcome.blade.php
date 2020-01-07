<!DOCTYPE html>
<html lang="en">
<head>
<title>Travello</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
    
    <!-- Header -->

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                            <div class="logo"><a href="{{ url('/') }}">Travello</a></div>
                            <nav class="main_nav">
                                <ul class="d-flex flex-row align-items-start justify-content-start">
                                    <li><a href="#">Početna</a></li>
                                    <li><a href="#">Destinacije</a></li>
                                    <li><a href="#">O nama</a></li>
                                    <li><a href="#">Kontakt</a></li>
                                    @guest
                                    <li><a href="{{ route('login') }}">Prijavite se</a></li>
                                    @else
                                        <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->role_id != 1)
                                    <a class="dropdown-item" href="{{ route('admin.home')}}">
                                        Admin
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                                    @endguest
                                </ul>
                            </nav>

                        
        
    </header>

    <!-- Home -->

    <div class="home">
        
        <!-- Home Slider -->
        <div class="home_slider_container">
            <div class="owl-carousel owl-theme home_slider">
                
                <!-- Slide -->
                <div class="owl-item">
                    <div class="background_image" style="background-image:url(images/home_slider.jpg)"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content">
                                        <div class="home_title"><h2>Let us take you away</h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            
        </div>
    </div>

    <div class="home_search">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_search_container">
                        <div class="home_search_title">Potraži svoj let</div>
                        <div class="home_search_content">
                            <form action="#" class="home_search_form" id="home_search_form">
                                <div class="d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
                                    <input type="text" class="search_input search_input_1" placeholder="Grad" required="required">
                                    <input type="text" class="search_input search_input_2" placeholder="Polazak" required="required">
                                    <input type="text" class="search_input search_input_3" placeholder="Dolazak" required="required">
                                    <button class="home_search_button">Traži</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_container">
                        <div class="row">

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="images/beach.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">Top Destinacije</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="images/wallet.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">Najbolje cijene</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Intro Item -->
                            <div class="col-lg-4 intro_col">
                                <div class="intro_item d-flex flex-row align-items-end justify-content-start">
                                    <div class="intro_icon"><img src="images/suitcase.svg" alt=""></div>
                                    <div class="intro_content">
                                        <div class="intro_title">Odlične usluge</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <!-- Destinations -->

    
    <!-- Footer -->

    <footer class="footer">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer_1.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter">
                        <div class="newsletter_title_container text-center">
<div class="newsletter_title">Prijavite se na newsletter!</div>
                            <div class="newsletter_subtitle">Prijavite se kako ne biste propustili novosti, akcije s poklon bonovima, nagradne igre, aktualna događanja ili posebne ponude.</div>
                        </div>
                        <div class="newsletter_form_container">
                            <form action="#" class="newsletter_form d-flex flex-md-row flex-column align-items-start justify-content-between" id="newsletter_form">
                                <div class="d-flex flex-md-row flex-column align-items-start justify-content-between">
                                    <div><input type="text" class="newsletter_input newsletter_input_name inpt" id="newsletter_input_name" placeholder="Ime" required="required"><div class="input_border"></div></div>
                                    <div><input type="email" class="newsletter_input newsletter_input_email inpt" id="newsletter_input_email" placeholder="Vaš e-mail" required="required"><div class="input_border"></div></div>
                                </div>
                                <div><button class="newsletter_button">Pretplatite se</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row footer_contact_row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="images/sign.svg" alt=""></div>
                                <div class="footer_contact_title">Nazovite nas</div>
                                <div class="footer_contact_list">
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="images/trekking.svg" alt=""></div>
                                <div class="footer_contact_title">Posjetite nas</div>
                                <div class="footer_contact_list">
                                    <ul style="max-width:190px">
                                        <li>Mostar</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Contact Item -->
                        <div class="col-xl-4 footer_contact_col">
                            <div class="footer_contact_item d-flex flex-column align-items-center justify-content-start text-center">
                                <div class="footer_contact_icon"><img src="images/around.svg" alt=""></div>
                                <div class="footer_contact_title">Pošaljite nam poruku</div>
                                <div class="footer_contact_list">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>