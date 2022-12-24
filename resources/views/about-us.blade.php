@extends('layout.master')

@section('banner')
    @includeIf('layout.banner')
@endsection

@section('content')
    <!-- content begin -->
    <div id="content" class="no-top no-bottom">

        <section id="section-intro" class="pt60" data-bgcolor="#ffffff"
            style="background-color: rgb(239, 231, 211); background-size: cover;">
            <div class="container" style="background-size: cover;">
                <div class="row align-items-center" style="background-size: cover;">
                    <div class="col-lg-3 col-6" style="background-size: cover;">
                        <div class="spacer-double sm-hide" style="background-size: cover;"></div>
                        <img src="images-hotel/misc/1.jpg" alt="" class="img-responsive wow fadeInUp animated"
                            data-wow-duration="1s"
                            style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                    </div>

                    <div class="col-lg-3 col-6" style="background-size: cover;">
                        <img src="images-hotel/misc/2.jpg" alt="" class="img-responsive wow fadeInUp animated"
                            data-wow-duration="1.5s"
                            style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    </div>

                    <div class="col-lg-6 wow fadeIn animated"
                        style="visibility: visible; animation-name: fadeIn; background-size: cover;">
                        <div class="padding20" style="background-size: cover;">
                            <h2><span class="id-color">Designers Inspiration</h2>

                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                            </p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                            </p>

                            <a href="/contact-us" class="btn-custom font-weight-bold text-white">Contact Us</a>

                        </div>
                    </div>

                    <div class="clearfix" style="background-size: cover;"></div>
                </div>
            </div>
        </section>
        {{-- <section id="section-about-us-2" class="side-bg no-padding">
            <div class="image-container col-md-5 pull-left" data-delay="0"></div>
            <div class="container">
                <div class="row">
                    <div class="inner-padding">
                        <div class="col-md-6 offset-md-6 " data-animation="fadeInRight" data-delay="200">
                            <h2>Award Winning Interior Design</h2>

                            <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- section begin -->
        {{-- <section id="view-all-projects" class="call-to-action bg-color dark text-center" data-speed="5"
            data-type="background" aria-label="view-all-projects"> --}}
        <section id="section-intro" class="pt60" data-bgcolor="#fffff"
            style="background-color: rgb(239, 231, 211); background-size: cover;">
            <div class="container" style="background-size: cover;">
                <div class="row" style="background-size: cover;">
                    <div class="col-md-9" style="background-size: cover;">
                        <div class="tab-default" style="background-size: cover;">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background-size: cover;">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Mission</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Vision</button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-contact" type="button" role="tab"
                                        aria-controls="nav-contact" aria-selected="false">Goal</button>
                                    <button class="nav-link" id="nav-second-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-second" type="button" role="tab"
                                        aria-controls="nav-second" aria-selected="false">Goal</button>
                                    <button class="nav-link" id="nav-third-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third"
                                        aria-selected="false">Goal</button>
                                </div>
                            </nav>

                            <div class="tab-content" id="nav-tabContent" style="background-size: cover;">
                                <div class="tab-pane fade active show" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab" style="background-size: cover;">
                                    <p>Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis
                                        anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud
                                        exercitation proident est nisi. Irure magna elit commodo anim ex veniam culpa
                                        eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing
                                        minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation
                                        irure Lorem incididunt nostrud.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab" style="background-size: cover;">
                                    <p>Ad pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex.
                                        Aute sunt incididunt amet commodo est sint nisi deserunt pariatur do. Aliquip ex
                                        eiusmod voluptate exercitation cillum id incididunt elit sunt. Qui minim sit magna
                                        Lorem id et dolore velit Lorem amet exercitation duis deserunt. Anim id labore elit
                                        adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab" style="background-size: cover;">
                                    <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                                        aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit
                                        laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore
                                        incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud.
                                        Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure
                                        officia elit do ipsum ullamco Lorem.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-second" role="tabpanel"
                                    aria-labelledby="nav-second-tab" style="background-size: cover;">
                                    <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                                        aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit
                                        laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore
                                        incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud.
                                        Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure
                                        officia elit do ipsum ullamco Lorem.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-third" role="tabpanel"
                                    aria-labelledby="nav-third-tab" style="background-size: cover;">
                                    <p>Est quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor
                                        aliqua irure ex. Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit
                                        laborum veniam eu veniam. Eiusmod minim exercitation fugiat irure ex labore
                                        incididunt do fugiat commodo aliquip sit id deserunt reprehenderit aliquip nostrud.
                                        Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure
                                        officia elit do ipsum ullamco Lorem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-fun-facts" class="text-light" data-bgcolor="#33353a"
            style="background-color: rgb(51, 53, 58); background-size: cover;">
            <div class="container" style="background-size: cover;">

                <div class="row align-items-center" style="background-size: cover;">
                    <div class="col-md-3 fadeIn" data-wow-delay="0" style="background-size: cover;">
                        <img src="images/logo/LOGO.png" class="logo-small" alt="">
                    </div>
                    <div class="col-md-3 wow fadeIn animated" data-wow-delay=".25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn; background-size: cover;">
                        <div class="de_count no-padding" style="background-size: cover;">
                            {{-- <h3 class="timer" data-to="2350" data-speed="2500">2350</h3>
                            <span class="text-light">Hours of Works</span> --}}
                            <img src="images/logo/LOGO.png" class="logo-small" alt="">
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn animated" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn; background-size: cover;">
                        <div class="de_count no-padding" style="background-size: cover;">
                            {{-- <h3 class="timer" data-to="128" data-speed="2500">128</h3>
                            <span class="text-light">Projects Complete</span> --}}
                            <img src="images/logo/LOGO.png" class="logo-small" alt="">
                        </div>
                    </div>

                    <div class="col-md-3 wow fadeIn animated" data-wow-delay=".75s"
                        style="visibility: visible; animation-delay: 0.75s; animation-name: fadeIn; background-size: cover;">
                        <div class="de_count no-padding" style="background-size: cover;">
                            {{-- <h3 class="timer" data-to="750" data-speed="2500">750</h3>
                            <span class="text-light">Slice of Pizza</span> --}}
                            <img src="images/logo/LOGO.png" class="logo-small" alt="">
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection
