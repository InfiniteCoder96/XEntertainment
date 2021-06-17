<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->


<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="webthemez.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Event</title>
    <link rel="stylesheet" href="{{asset('shop/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/css/flexslider.css')}}">
    <link rel="stylesheet" href="{{asset('shop/css/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('shop/css/main.css')}}">
    <link href="jPlayer-2.9.2/dist/skin/pink.flag/css/jplayer.pink.flag.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('shop/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('shop/css/font-icon.css')}}">
    <link rel="stylesheet" href="{{asset('shop/css/animate.min.css')}}">
    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.3.2/main.min.css,npm/fullcalendar@5.3.2/main.min.css">

    <style>
        .fc .fc-toolbar-title {
            color: white;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>

</head>

<body>
    <!-- header section -->
    <section class="banner" role="banner" id="banner">
        <header id="header">
            <div class="header-content clearfix"> <span class="logo"><a href="index-2.html">X<b>Entertainment</b></a></span>
                <nav class="navigation" role="navigation">
                    <ul class="primary-nav">
                        <li><a href="#banner">HOME</a></li>
                        <li><a href="#intro">ABOUT</a></li>
                        <li><a href="#events">PROJECTS</a></li>
                        <li><a href="#Playlist">SERVICE</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        @guest
                        @if (Route::has('login'))
                        <li>
                            <a href="{{ route('login') }}">
                                Login
                            </a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                                Login
                            </a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Hi, {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest



                    </ul>
                </nav>
                <a href="#" class="nav-toggle">Menu<span></span></a>
            </div>
        </header>
        <!-- banner text -->
        <div class="container">
            <div class="col-md-12">
                <div class="banner-text text-center">
                    <h1>E-EVENT(EUIPMENT RENTAL)</h1>
                    <p>XENTERTAINMENT</p>
                    <div class="countdown styled"></div>
                </div>
                <!-- banner text -->
            </div>
        </div>
    </section>
    <!-- header section -->
    <!-- intro section -->
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>WE DESIGN, RENT, AND PLANING LIVE EXPERIENCES </h3>
                <p>As experiential leaders, our passion is to create incredible experiences that defy industry standards. We think in practicality, not theory—our comprehensive approach to design, production, and planning levates our clients’ work while ensuring its success.</p>
                <a href="#events" class="btn btn-large">Events</a>
            </div>
        </div>
    </section>
    <!-- intro section -->
    <!-- services section -->
    <section id="services" class="services service-section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">WHAT WE MAKE</h2>
                <p class="wow fadeInDown animated">The expertise and level of commitment we bring to your project makes us different. At X ENTERTAINMENT we meticulously plan your event to your exact specifications, then bring in the right people and the right equipment to get the job done; on-time and on budget. <br> We know event production better than anyone, and we offer a wide range of services that include consultation, design, management, audio, video, lighting, staging, staffing, structures, scenic, technical direction, event support, logistics, installations, and rentals. We are your one-stop-place for event planning and production.</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <h5>CORPORATE</h5>

                        <p>Events and Meetings<Br>Fashion Shows<Br>Product Launches<Br>Brand Activation<Br>Election Event Technology<Br>Automotive Events
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <h5>TELEVISION & FILM</h5>

                        <p>Light Entertainment<Br>Current Affairs & Factual Television<Br>Awards Shows<Br>Film
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <h5>THEATRE</h5>

                        <p>West End Theatre<Br>Theatre & Performing Arts<Br>Touring Theatre<Br>Regional Theatre
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="events" class="section teams">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Events</h2>
                <p class="wow fadeInDown animated">We consistently provide the highest level of event planning, production, lighting, audio and video services. We love producing experiential concerts, trade shows, corporate events, sporting events, movie premiers and more</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('shop/images/pic2.jpg')}}" class="img-responsive" alt="">
                </div>
                <div class="col-md-6">
                    <div class="col-md-11">
                        <h3>Up Comming events</h3>
                        <dic class="row">
                            <div style="background-color: #1E1E1E;padding: 5px;border-radius: 5px" id='calendar'></div>
                        </dic>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section -->
    <section id="Playlist" class="playlistList">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">SERVICES</h2>
                <p class="wow fadeInDown animated">Popular Equipment for Rent</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="dropdown">
                        <button class="dropbtn">Dropdown</button>
                        <div class="dropdown-content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <h5>LED</h5>
                        <img src="{{asset('shop/images/EQR/stock-photo-led-wall-cabinet-243410164.jpg')}}" class="img-responsive" alt="">
                        <p>P3 High Definition Indoor<Br>P4 High Definition Indoor<Br>P12 High Definition Indoor<Br>P3 High Definition Outdoor<Br>P10 High Definition Outdoor<Br>P4 High Definition Indoor<Br>P8 High Definition Indoor<Br>P4 High Definition Outdoor
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <h5>LIGHT</h5>
                        <img src="{{asset('shop/images/EQR/luminus-60w-led-moving-head-spot-light-led.jpg')}}" class="img-responsive" alt="">
                        <p>1000W ZoomWash<Br>1200 Solo<Br>17 Beam<Br>Moving Head
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <h5>SOUND</h5>
                        <img src="{{asset('shop/images/EQR/55154655-dj-mixer-with-headphones-at-nightclub.jpg')}}" class="img-responsive" alt="">
                        <p>Mics<Br>Sound Mixers<Br>Speackers<Br>Mic stands<Br>MULTICORES<Br>Cabals<br>GL4000 32.8.2<br>ALLEN AND HEATH
                            GL2200 24.4.2<br>Amplifiers:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJCET section -->
    <section id="gallery" class="gallery section">
        <div class="container-fluid">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">PROJECT</h2>
                <p class="wow fadeInDown animated">We consistently provide the highest level of event planning, production, lighting, audio and video services. We love producing experiential concerts, trade shows, corporate events, sporting events, movie premiers and more</p>
            </div>
            <div class="row no-gutter">
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/73216820_2897379640296454_6002484003255353344_o.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/73216820_2897379640296454_6002484003255353344_o.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/02.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/02.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/IMG_20191123_233430-scaled.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/IMG_20191123_233430-scaled.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/04.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/04.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/IMG_8325.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/IMG_8325.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/06.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/06.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/07.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/07.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
                <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="{{asset('shop/images/portfolio/08.jpg')}}" class="work-box"> <img src="{{asset('shop/images/portfolio/08.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div>
                        <!-- overlay -->
                    </a> </div>
            </div>
        </div>
    </section>
    <!-- gallery section -->

    <!-- contact section -->
    <section id="contact" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Contact Us</h2>
                <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
            </div>
            <div class="row">
                <div class="col-md-7 conForm">
                    <div id="message"></div>
                    <form method="post" action="https://Templates Hub.net/php/contact.php" name="cform" id="cform">
                        <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name...">
                        <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address...">
                        <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
                        <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
                        <div id="simple-msg"></div>
                    </form>
                </div>

                <div class="col-xs-5">
                    <h3 style="margin-top:0;color:#fff;">Our Address</h3>
                    <address style="color:#fff;">
                        <strong>X Entertainment</strong><br>
                        No : 01 delkanda, <br>
                        Old Kesbewa Rd,<br>
                        Nugegoda<br>
                        <abbr title="Phone">Tel:</abbr> (604) 555-4321
                    </address>

                </div>

            </div>
        </div>
    </section>
    <!-- contact section -->
    <!-- Footer section -->


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->
    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.3.2,npm/fullcalendar@5.3.2/locales-all.min.js,npm/fullcalendar@5.3.2/locales-all.min.js,npm/fullcalendar@5.3.2/main.min.js"></script>
    <script src="{{asset('shop/../../../ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>
    <script src="{{asset('shop/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('shop/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('shop/js/modernizr.js')}}"></script>
    <script src="{{asset('shop/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('shop/js/jquery.countdown.js')}}"></script>
    <script type="text/javascript" src="{{asset('shop/js/global.js')}}"></script>
    <script type="text/javascript" src="{{asset('shop/js/jquery.contact.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>
</body>

</html>