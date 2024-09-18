<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from goldeyes.net/quadra/demo-musician.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2023 12:34:01 GMT -->
<head>
    @include('pages.layouts.header')
{{--    {!! notifyCss() !!}--}}
</head>

<!-- BODY START -->
<body class="c-dot hover-cursor bg-dark4">


{{--@include('pages.layout.loader')--}}

@include('pages.layouts.navigation')

<!-- HOME SECTION -->
<div id="home" class="rev_slider_wrapper fullscreen-container bg-dark">

    <!-- Start Slider -->
    <div id="home_slider" class="rev_slider fullscreenbanner">

        <!-- Slider Container -->
        <ul>
            <!-- Slide -->
                        <li  data-masterspeed="600" data-transition="fade" data-thumb="content/musician/images/home_02.png" data-saveperformance="off"  data-title="Take the Scene" data-description="Home Slider">


                                <!-- Video - Parent * should have "relative" class -->
                                <div class="videobg" data-background="images/videos/home_02.jpg">
                                    <video poster="images/videos/home_02.png" playsinline autoplay muted loop>
                                        <!-- <source src="images/videos/rod23.webm" type="video/webm"> -->
                                        <!-- <source src="images/videos/rod23.mp4" type="video/mp4"> -->
                                    </video>
                                </div>
                                <!-- End Video -->
                                {{-- <div class="relative zi-1">
                                    <h4 class="t-center white light">This is local video template.</h4>
                                </div> --}}


                            <div class="tp-caption white font-secondary uppercase rs-parallaxlevel-0"
                            data-x="['center','center','center','center']"
                            data-y="['middle','middle','middle','middle']"
                            data-fontsize="['80','77','65','45']"
                            data-frames='[{"delay":"+1100","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['-50','-50','-45','-42']">
                           <div style="text-align: center;">
                               <img class="edmlogos" src="content/musician/images/rodlogo.png"
                               style="width: 40%; max-width: 10rem;" alt="logo">
                           </div> {{-- The EDM Festival --}}
                       </div>



                     <div class="tp-caption white semibold uppercase mb-30 rs-parallaxlevel-0"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-lineheight="80"
                        data-fontsize="['18','18','18','18']"
                        data-frames='[{"delay":"+1400","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['30','28','24','15']" style="color: #ffffff!important;">
                        <br><br><br><br>  30th November
                    </div>
                    <br><br>

                <!-- Layer -->
                <div class="tp-caption rs-parallaxlevel-0 pt-250"
                     data-x="['center','center','center','center']"
                     data-y="['middle','middle','middle','middle']"
                     data-start="2100"
                     data-lineheight="29"
                     data-textalign="center"
                     data-frames='[{"delay":"+1700","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                     data-hoffset="['0','0','0','0']"
                     data-voffset="['103','100','97','85']">
                    <a href="#prices" class="lg-btn fs-15 radius bg-colored btn-hover-light white semibold uppercase">Grab
                        a ticket</a>
                </div>

                           </li>
            <!-- End Slide -->

            <!-- Slide -->
            {{--                <li data-masterspeed="600" data-transition="fade" data-thumb="content/musician/images/home_02.png" data-saveperformance="off"  data-title="Take the Scene" data-description="Home Slider">--}}

            {{--                    <!-- Background Image -->--}}
            {{--                    <img src="content/musician/images/home_02.png"  alt="Image Background"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="9" class="rev-slidebg" data-no-retina>--}}

            {{--                    <!-- Layer -->--}}
            {{--                    <div class="tp-caption white font-secondary uppercase rs-parallaxlevel-0"--}}
            {{--                    data-x="['center','center','center','center']"--}}
            {{--                    data-y="['middle','middle','middle','middle']"--}}
            {{--                    data-fontsize="['80','77','65','45']"--}}
            {{--                    data-frames='[{"delay":"+1100","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--                    data-hoffset="['0','0','0','0']"--}}
            {{--                    data-voffset="['-50','-50','-45','-42']">--}}
            {{--                        The EDM Festival--}}
            {{--                    </div>--}}

            {{--                    <!-- Layer -->--}}
            {{--                    <div class="tp-caption white semibold uppercase rs-parallaxlevel-0"--}}
            {{--                    data-x="['center','center','center','center']"--}}
            {{--                    data-y="['middle','middle','middle','middle']"--}}
            {{--                    data-lineheight="80"--}}
            {{--                    data-fontsize="['18','18','18','18']"--}}
            {{--                    data-frames='[{"delay":"+1400","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--                    data-hoffset="['0','0','0','0']"--}}
            {{--                    data-voffset="['30','28','24','15']">--}}
            {{--                        Ghanas' Biggest Music Festival--}}
            {{--                    </div>--}}

            {{--                    <!-- Layer -->--}}
            {{--                    <div class="tp-caption rs-parallaxlevel-0"--}}
            {{--                    data-x="['center','center','center','center']"--}}
            {{--                    data-y="['middle','middle','middle','middle']"--}}
            {{--                    data-start="2100"--}}
            {{--                    data-lineheight="29"--}}
            {{--                    data-textalign="center"--}}
            {{--                    data-frames='[{"delay":"+1700","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'--}}
            {{--                    data-hoffset="['0','0','0','0']"--}}
            {{--                    data-voffset="['103','100','97','85']">--}}
            {{--                        <a href="#concerts" class="lg-btn fs-15 radius bg-colored btn-hover-light white semibold uppercase">Grab a Ticket</a>--}}
            {{--                    </div>--}}

            {{--                </li>--}}
            <!-- End Slide -->

        </ul>
        <!-- End Container -->

    </div>
    <!-- End Slider -->

    <!-- Home Content -->
    <div class="home-content">
        <div class="container t-center">
            <!-- Animated Mouse Icon -->
            <div class="mouse-icon">
                <div class="wheel"></div>
            </div>
        </div>
    </div>

</div>










@include('pages.layouts.footer')
{{--{!! notify()->ready() !!}--}}

{{-- <x-notify::notify />
@notifyJs --}}


</body>
<!-- Body End -->

<!-- Mirrored from goldeyes.net/quadra/demo-musician.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2023 12:34:29 GMT -->
</html>
