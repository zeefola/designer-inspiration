@extends('layout.master')

@section('slider')
    @includeIf('layout.slider')
@endsection

@section('contact-info')
    @includeIf('layout.contact-info')
@endsection

@section('content')
    <section id="section-text">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 wow fadeInRight" data-wow-delay=".2s">
                    <div class="de_count ultra-big s2 text-center">
                        <h3 class="timer" data-to="15" data-speed="2000"></h3>
                        <span class="text-white">Years of Experience</span>
                    </div>
                </div>
                <div class="col-lg-4 p-lg-5  mb-sm-30 wow fadeInRight" data-wow-delay=".4s">
                    <h2 class="style-2 id-color">Welcome</h2>
                    <h2>Your Best Partner for Architecture and Construction</h2>
                </div>

                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".6s">
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                        voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                        occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                        mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                        expedita distinctio. At vero eos et accusamus et iusto odio dignissimos ducimus qui
                        blanditiis praesentium voluptatum deleniti.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- section begin -->
    <section id="section-services" class="pt60 pb20" data-bgcolor="#ffffff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-4-center-dots owl-carousel owl-theme">
                        <div class="item text-middle text-light">
                            <div data-bgimage="url(images-interior-landing/services/se_1.jpg) center">
                                <div class="padding40 overlay60">
                                    <h3>Furniture Layouts</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With
                                        years of experiences
                                        and continuing research, our team is ready to serve your interior design
                                        needs.</p>
                                    <a href="#" class="btn-line btn-fullwidth">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="item text-middle text-light">
                            <div data-bgimage="url(images-interior-landing/services/se_2.jpg) center">
                                <div class="padding40 overlay60">
                                    <h3>Space Planning</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With
                                        years of experiences
                                        and continuing research, our team is ready to serve your interior design
                                        needs.</p>
                                    <a href="#" class="btn-line btn-fullwidth">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="item text-middle text-light">
                            <div data-bgimage="url(images-interior-landing/services/se_3.jpg) center">
                                <div class="padding40 overlay60">
                                    <h3>Floor Plans</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With
                                        years of experiences
                                        and continuing research, our team is ready to serve your interior design
                                        needs.</p>
                                    <a href="#" class="btn-line btn-fullwidth">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="item text-middle text-light">
                            <div data-bgimage="url(images-interior-landing/services/se_4.jpg) center">
                                <div class="padding40 overlay60">
                                    <h3>Custom Furniture</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With
                                        years of experiences
                                        and continuing research, our team is ready to serve your interior design
                                        needs.</p>
                                    <a href="#" class="btn-line btn-fullwidth">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="item text-middle text-light">
                            <div data-bgimage="url(images-interior-landing/services/se_5.jpg) center">
                                <div class="padding40 overlay60">
                                    <h3>Kitchen &amp; Bedroom</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With
                                        years of experiences
                                        and continuing research, our team is ready to serve your interior design
                                        needs.</p>
                                    <a href="#" class="btn-line btn-fullwidth">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="item text-middle text-light">
                            <div data-bgimage="url(images-interior-landing/services/se_6.jpg) center">
                                <div class="padding40 overlay60">
                                    <h3>Preconstruction</h3>
                                    <p>Our commitment to quality and services ensure our clients happy. With
                                        years of experiences
                                        and continuing research, our team is ready to serve your interior design
                                        needs.</p>
                                    <a href="#" class="btn-line btn-fullwidth">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-testimonial" data-bgimage="url(images-interior-landing/bg/1.jpg) fixed" aria-label="section"
        class="text-light" data-stellar-background-ratio=".2">
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2 wow fadeInUp">

                    <div id="testimonial-carousel-single" class="owl-carousel owl-theme wow fadeInUp">
                        <blockquote class="testimonial-big">
                            <span class="title">Amazing, beyond our expectation!</span>
                            Lorem ipsum dolor sit amet. Ex numquam saepe hic accusantium aspernatur sed laborum eveniet non
                            totam dolor sit quaerat dignissimos! Qui internos quas ut nisi aliquid aut quae autem quo
                            voluptas tempore aut autem architecto ut natus illo. Et laudantium consequatur eum deleniti.

                            {{-- <span class="name">John, Four Seasons Hotel</span> --}}
                        </blockquote>

                        <blockquote class="testimonial-big">
                            <span class="title">Modern and great design!</span>
                            Lorem ipsum dolor sit amet. Ex numquam saepe hic accusantium aspernatur sed laborum eveniet non
                            totam dolor sit quaerat dignissimos! Qui internos quas ut nisi aliquid aut quae autem quo
                            voluptas tempore aut autem architecto ut natus illo. Et laudantium consequatur eum deleniti.

                            {{-- <span class="name">Sandra, Hilton Hotel</span> --}}
                        </blockquote>

                        <blockquote class="testimonial-big">
                            <span class="title">Better than we think!</span>
                            Lorem ipsum dolor sit amet. Ex numquam saepe hic accusantium aspernatur sed laborum eveniet non
                            totam dolor sit quaerat dignissimos! Qui internos quas ut nisi aliquid aut quae autem quo
                            voluptas tempore aut autem architecto ut natus illo. Et laudantium consequatur eum deleniti.

                            {{-- <span class="name">Michael, Central Park Mall</span> --}}
                        </blockquote>
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                    <div class="de_count">
                        <h3 class="timer" data-to="2350" data-speed="2500">0</h3>
                        <span class="text-light">Hours of Works</span>
                    </div>
                </div>

                <div class="col-md-3 wow fadeIn" data-wow-delay=".25s">
                    <div class="de_count">
                        <h3 class="timer" data-to="128" data-speed="2500">0</h3>
                        <span class="text-light">Projects Complete</span>
                    </div>
                </div>

                <div class="col-md-3 wow fadeIn" data-wow-delay=".5s">
                    <div class="de_count">
                        <h3 class="timer" data-to="750" data-speed="2500">0</h3>
                        <span class="text-light">Clients Satisfied</span>
                    </div>
                </div>

                <div class="col-md-3 wow fadeIn" data-wow-delay=".75s">
                    <div class="de_count">
                        <h3 class="timer" data-to="520" data-speed="2500">0</h3>
                        <span class="text-light">Something Here</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- section close -->

    <!-- section begin -->
    <section id="section-portfolio" class="no-top pb50" aria-label="section-portfolio">
        <div class="container">

            <div class="spacer-single"></div>

            <!-- portfolio filter begin -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                        <li><a href="#" data-filter="*" class="selected">All Servicess</a></li>
                        <li><a href="#" data-filter=".residential">Residential</a></li>
                        <li><a href="#" data-filter=".hospitaly">Hospitaly</a></li>
                        <li><a href="#" data-filter=".office">Office</a></li>
                        <li><a href="#" data-filter=".commercial">Commercial</a></li>
                    </ul>

                </div>
            </div>
            <!-- portfolio filter close -->

            <div id="gallery" class="row gallery full-gallery de-gallery pf_4_cols wow fadeInUp" data-wow-delay=".3s">

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Eco Green Interior</span>
                                </span>
                            </span>
                        </a>
                        <img src="images-interior-landing/portfolio/pf%20%281%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 hospitaly">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Modern Elegance Suite</span>
                                </span>
                            </span>
                        </a>

                        <img src="images-interior-landing/portfolio/pf%20%282%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 hospitaly">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Apartment Renovation</span>
                                </span>
                            </span>
                        </a>

                        <img src="images-interior-landing/portfolio/pf%20%283%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Project Name</span>
                                </span>
                            </span>
                        </a>
                        <img src="images-interior-landing/portfolio/pf%20%284%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 office">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Project Name</span>
                                </span>
                            </span>
                        </a>
                        <img src="images-interior-landing/portfolio/pf%20%285%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 commercial">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Restaurant</span>
                                </span>
                            </span>
                        </a>
                        <img src="images-interior-landing/portfolio/pf%20%286%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="project-details.html">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Summer House</span>
                                </span>
                            </span>
                        </a>

                        <img src="images-interior-landing/portfolio/pf%20%287%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 office">
                    <div class="picframe">
                        <a class="simple-ajax-popup-align-top" href="#">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Office On Space</span>
                                </span>
                            </span>
                        </a>

                        <img src="images-interior-landing/portfolio/pf%20%288%29.jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

            </div>

        </div>
        <div id="loader-area">
            <div class="project-load"></div>
        </div>
    </section>
    <!-- section close -->

    <section id="section-why-choose-us-2" class="de_light" data-bgcolor="#ffffff">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-icon top">
                        <span class="icon wow bounceIn" data-wow-delay="0s"><i
                                class="id-color icon-paintbrush"></i></span>
                        <div class="text wow fadeIn" data-wow-delay=".15s">
                            <h3 class="style-1">Interior Expertise</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-icon top">
                        <span class="icon wow bounceIn" data-wow-delay=".25s"><i class="id-color icon-trophy"></i></span>
                        <div class="text wow fadeIn" data-wow-delay=".4s">
                            <h3 class="style-1">Awards Winning</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-icon top">
                        <span class="icon wow bounceIn" data-wow-delay=".5s"><i class="id-color icon-chat"></i></span>
                        <div class="text wow fadeIn" data-wow-delay=".65s">
                            <h3 class="style-1">Free Consultation</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="box-icon top">
                        <span class="icon wow bounceIn" data-wow-delay=".75s"><i class="id-color icon-wallet"></i></span>
                        <div class="text wow fadeIn" data-wow-delay=".9s">
                            <h3 class="style-1">Affordable Price</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque
                                laudantium, totam rem aperiam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-how-it-works" data-bgimage="url(images-interior-landing/bg/2.jpg) fixed center"
        data-stellar-background-ratio=".2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 wow fadeInRight" data-wow-delay=".2s">
                    <h2 class="style-2"><span class="id-color">Discover</span></h2><br>
                    <h2>How It Works?</h2>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="spacer-half"></div>
                    <a href="/contact-us" class="btn-line-white">Contact Us Now</a>
                </div>
                <div class="col-md-6 offset-md-1 wow fadeInLeft" data-wow-delay=".4s">
                    <figure class="picframe invert transparent shadow-soft rounded">
                        <span class="v-center">
                            <span>
                                <a id="play-video" class="video-play-button popup-youtube" href="#">
                                    <span></span>
                                </a>
                            </span>
                        </span>
                        <img src="images-interior-landing/misc/1.jpg" class="img-fullwidth" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection
