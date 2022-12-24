@extends('layout.master')

@section('banner')
    @includeIf('layout.banner')
@endsection

@section('content')
    <!-- content begin -->
    <section id="section-text" class="pb60" style="background-size: cover;">
        <div class="container" style="background-size: cover;">
            <div class="row align-items-center g-0" style="background-size: cover;">
                <div class="col-lg-6 sm-mb-30 text-center wow fadeInRight animated"
                    style="visibility: visible; animation-name: fadeInRight; background-size: cover;">
                    <div class="de-images" style="background-size: cover;">
                        <div class="di-box-2 text-light" style="background-size: cover;">
                            <div class="de_count very-big text-center" style="background-size: cover;">
                                <img class="img-fluid wow fadeInRight animated" data-wow-delay=".25s"
                                    src="images/portfolio/pf%20(6).jpg" alt=""
                                    style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                            </div>
                        </div>
                        <img class="img-fluid wow fadeInRight animated" data-wow-delay=".25s"
                            src="images/portfolio/pf%20(6).jpg" alt=""
                            style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInRight;">
                    </div>
                </div>

                <div class="col-lg-5 offset-md-1 wow fadeInLeft animated" data-wow-delay="0s"
                    style="visibility: visible; animation-delay: 0s; animation-name: fadeInLeft; background-size: cover;">
                    <h2 class="mb20">Architectural <span class="id-color">Design</span></h2>
                    <p>
                        Lorem ipsum sunt anim excepteur laboris ullamco enim irure occaecat velit commodo enim dolor
                        reprehenderit nulla occaecat aute voluptate adipisicing reprehenderit est proident incididunt sunt
                        do ea proident officia minim ex velit nulla consequat consequat reprehenderit commodo occaecat in ex
                        reprehenderit ut proident amet ut enim laboris veniam sint dolore esse ad sit nulla duis ut magna
                        voluptate laboris id ex incididunt reprehenderit ex labore nisi occaecat cupidatat incididunt anim
                        anim sit labore aliquip sint velit officia ut ea in ullamco laboris.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="section-about" style="background-size: cover;">
        <div class="wm wm-border dark wow fadeInDown animated"
            style="visibility: visible; animation-name: fadeInDown; background-size: cover;">01</div>
        <div class="container" style="background-size: cover;">
            <div class="row" style="background-size: cover;">
                <div class="col-md-6 offset-md-3 text-center wow fadeInUp animated"
                    style="visibility: visible; animation-name: fadeInUp; background-size: cover;">
                    <h1>Our Services</h1>
                    <div class="separator" style="background-size: cover;"><span><i class="fa fa-square"></i></span></div>
                    <div class="spacer-single" style="background-size: cover;"></div>
                </div>

                <div class="col-md-4 wow fadeInRight animated"
                    style="visibility: visible; animation-name: fadeInRight; background-size: cover;">
                    <a class="image-popup-no-margins" href="images-architecture/services/1.jpg">
                        <img src="images-architecture/services/1.jpg" class="img-responsive img-shadow" alt="">
                    </a>
                    <div class="spacer20" style="background-size: cover;"></div>
                    <h3><span class="id-color">01</span> New Construction</h3>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.


                </div>

                <div class="col-md-4 wow fadeInRight animated" data-wow-delay=".2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight; background-size: cover;">
                    <a class="image-popup-no-margins" href="images-architecture/services/2.jpg">
                        <img src="images-architecture/services/2.jpg" class="img-responsive img-shadow" alt="">
                    </a>
                    <div class="spacer20" style="background-size: cover;"></div>
                    <h3><span class="id-color">02</span> Remodeling</h3>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.


                </div>

                <div class="col-md-4 wow fadeInRight animated" data-wow-delay=".4s"
                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight; background-size: cover;">
                    <a class="image-popup-no-margins" href="images-architecture/services/3.jpg">
                        <img src="images-architecture/services/3.jpg" class="img-responsive img-shadow" alt="">
                    </a>
                    <div class="spacer20" style="background-size: cover;"></div>
                    <h3><span class="id-color">03</span> Tenant Improvement</h3>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque
                    ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.


                </div>

            </div>
        </div>
    </section>
    <div id="content" style="background-size: cover;">
        <div class="container" style="background-size: cover;">

            <div class="spacer-single" style="background-size: cover;"></div>

            <!-- portfolio filter begin -->
            <div class="row" style="background-size: cover;">
                <div class="col-md-12" style="background-size: cover;">
                    <ul id="filters" class="wow fadeInUp animated" data-wow-delay="0s"
                        style="visibility: visible; animation-delay: 0s; animation-name: fadeInUp; opacity: 0;">
                        <li><a href="#" data-filter=".residential">Beauty Center</a></li>
                        <li><a href="#" data-filter=".hospitaly">Hotel Lounge</a></li>
                        <li><a href="#" data-filter=".office">Palace</a></li>
                        <li><a href="#" data-filter=".commercial">Classic Hotel</a></li>
                        <li class="pull-right"><a href="#" data-filter="*" class="selected">All Projects</a></li>
                    </ul>

                </div>
            </div>
            <!-- portfolio filter close -->

            <div id="gallery" class="row gallery full-gallery de-gallery pf_4_cols wow fadeInUp animated"
                data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; background-size: cover; position: relative; height: 701.1px; opacity: 0;">

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential"
                    style="background-size: cover; position: absolute; left: 0px; top: 0px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Interior</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio/pf%20(1).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 hospitaly"
                    style="background-size: cover; position: absolute; left: 330px; top: 0px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Modern Elegance Suite</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(2).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 hospitaly"
                    style="background-size: cover; position: absolute; left: 660px; top: 0px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Apartment Renovation</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(3).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential"
                    style="background-size: cover; position: absolute; left: 990px; top: 0px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Project Name</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio/pf%20(4).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 office"
                    style="background-size: cover; position: absolute; left: 0px; top: 233px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Project Name</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio/pf%20(5).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 commercial"
                    style="background-size: cover; position: absolute; left: 330px; top: 233px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Restaurant</span>
                                </span>
                            </span>
                        </a>
                        <img src="images/portfolio/pf%20(6).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential"
                    style="background-size: cover; position: absolute; left: 660px; top: 233px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Project Name</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(7).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 office"
                    style="background-size: cover; position: absolute; left: 990px; top: 233px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="project-details.html">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Office On Space</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(8).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 office"
                    style="background-size: cover; position: absolute; left: 0px; top: 467px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Luxury Living Room</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(9).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 residential"
                    style="background-size: cover; position: absolute; left: 330px; top: 467px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Cozy Bedroom</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(10).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->

                <!-- gallery item -->
                <div class="col-md-3 col-sm-6 col-xs-12 item mb30 hospitaly"
                    style="background-size: cover; position: absolute; left: 660px; top: 467px;">
                    <div class="picframe" style="background-size: cover;">
                        <a class="simple-ajax-popup-align-top" href="/details">
                            <span class="overlay">
                                <span class="pf_text">
                                    <span class="project-name">Classic Furnishing</span>
                                </span>
                            </span>
                        </a>

                        <img src="images/portfolio/pf%20(11).jpg" alt="">
                    </div>
                </div>
                <!-- close gallery item -->
            </div>
        </div>
    </div>
@endsection
