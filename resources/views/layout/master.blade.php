<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
    <title>Designer Inspiration - A Place for Designers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="lorem ipsum">
    <meta name="keywords" content="architecture,exterior design,furniture design,house,interior design">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" id="bootstrap-grid">
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" id="bootstrap-reboot">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">

    <!-- custom background -->
    <link rel="stylesheet" href="css/bg.css" type="text/css">

    <!-- color scheme -->
    <link rel="stylesheet" href="css/colors/brown.css" type="text/css" id="colors">

    <!-- RS5.0 Stylesheet -->
    <link rel="stylesheet" href="revolution/css/settings.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/layers.css" type="text/css">
    <link rel="stylesheet" href="revolution/css/navigation.css" type="text/css">
    <link rel="stylesheet" href="css/rev-settings.css" type="text/css">

    <!-- custom font -->
    <link rel="stylesheet" href="css/font-style-2.css" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        <!-- header begin -->
        @includeIf('layout.header')
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">

            <!-- revolution slider begin -->
            @yield('slider')
            <!-- revolution slider close -->

            @yield('banner')

            @yield('contact-info')

            @yield('content')
            <!-- section begin -->
            @section('cta')
                <!-- logo carousel section close -->


                <!-- footer begin -->
                @includeIf('layout.footer')
                <!-- footer close -->
            </div>
        </div>

        <div id="purchase-now" style="background-size: cover;">
            <a href="#whatsapp"><i class="fa fa-whatsapp fa-lg"></i></a>
            {{-- <a href="#whatsapp"><span>$</span>20</a> --}}
            <div class="pn-hover" style="background-size: cover;">Chat Us</div>
        </div>

        <!-- Javascript Files
                                                                                    ================================================== -->
        <script src="js/plugins.js"></script>
        <script src="js/designesia.js"></script>
        <script src="js/jquery.event.move.js"></script>
        <script src="js/jquery.twentytwenty.js"></script>

        <!-- RS5.0 Core JS Files -->
        <script src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

        <!-- RS5.0 Extensions Files -->
        <script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

        <script>
            jQuery(document).ready(function() {
                // revolution slider
                jQuery("#slider-revolution").revolution({
                    sliderType: "standard",
                    sliderLayout: "fullscreen",
                    delay: 5000,
                    navigation: {
                        arrows: {
                            enable: true
                        },
                        bullets: {
                            enable: false,
                            style: 'hermes'
                        },
                        onHoverStop: 'off',
                    },
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    },
                    responsiveLevels: [1920, 1380, 1240],
                    gridwidth: [1300, 1200, 940],
                    spinner: "off",
                    gridheight: 700,
                    disableProgressBar: "on"
                });
            });
        </script>

        <script>
            $(window).on("load", function() {
                $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
                    default_offset_pct: 0.5
                });
                $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
                    default_offset_pct: 0.5,
                    orientation: 'vertical'
                });
            });
        </script>


    </body>

    </html>
