<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

	<head>
    <meta charset="utf-8">

    <title>CountDown Africa</title>
    <meta content="" name="description">
    <meta content="" name="author">
    <meta content="" name="keywords">
    <meta content="height=device-height, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" name="viewport">

    <!-- style start -->
    <link href="assets/css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/media.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/skeleton-wide.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome-4.1.0/css/font-awesome.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/grid.css" media="all" rel="stylesheet" type="text/css">
    <link href="assets/css/modal.css" media="all" rel="stylesheet" type="text/css"><!-- style end -->

    <link href="assets/css/my_style.css" media="all" rel="stylesheet" type="text/css">

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css"> --}}


    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}

    <script async src="https://api.countapi.xyz/hit/countdownafrica.com/c0af2d33-abca-425f-8afb-70b3f0650174?callback=websiteVisits"></script>
    <script src="https://www.youtube.com/iframe_api"></script>





    <!--[if lt IE 9]>
    <script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- modernizr start || menu effect || quotes effect -->
    <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.61141.js"></script><!-- modernizr end -->


	</head>
	<body>
		<!-- site loader -->
		{{-- <div class="loader"></div><!-- site loader end --> --}}
        <!-- borders start -->
        <div class="border-top"></div>
        <div class="border-bottom"></div>
        <div class="border-left"></div>
        <div class="border-right"></div><!-- borders end -->
        <!-- curtains start -->
        <div id="curtains"></div><!-- curtains end -->
        <!-- top shade start -->
        <div id="top-shade"></div><!-- top shade end -->
        <!-- shadows start -->
        <div id="top-shadow"></div>
        <div id="left-shadow"></div>
        <div id="right-shadow"></div>
        <div id="bottom-shadow"></div><!-- shadows end -->
        <!-- overlay start -->
        <div id="overlay"></div><!-- overlay end -->


        @yield('content')

        <script>
            function stopVideo() {
        console.log('Stopping video...');

                var iframe = document.getElementById("youtube-video");
                var currentSrc = iframe.src;
                iframe.src = "";
                iframe.src = currentSrc;
        // var iframe = document.querySelector('.iframe_video');
        // var videoSrc = iframe.src;
        // iframe.src = '';
        // iframe.src = videoSrc;
        }

        </script>


		<!-- scripts start -->
        {{-- <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script> --}}
		<script type="text/javascript" src="assets/js/jquery.cbpQTRotator.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.nicescroll.3.5.4.js"></script>
		<script type="text/javascript" src="assets/js/jquery.panelslider.js"></script>
        <script type="text/javascript" src="assets/js/supersized.3.2.7.min.js"></script>
		<script type="text/javascript" src="assets/js/supersized.3.2.7.bg.js"></script>
		<script type="text/javascript" src="assets/js/supersized.shutter.min.js"></script>
        <script type="text/javascript" src="assets/YTPlayer/jquery.mb.YTPlayer.js"></script>
        <script type="text/javascript" src="assets/js/eva.js"></script>
        {{-- <script type="text/javascript" src="assets/twitter/jquery.tweet.js"></script>
        <script type="text/javascript" src="assets/twitter/ticker.js"></script> --}}
		<script type="text/javascript" src="assets/js/form-subscribe.js"></script>
        <script type="text/javascript" src="assets/js/countdown.js"></script>
        <!-- countdown setup start -->
    	<script type="text/javascript">
    	//<![CDATA[
        $(document).ready(function(){
            "use strict";
                $("#countdown").countdown({
                    date: "31 December 2023 23:59:00", // countdown target date settings
                    format: "on"
                },

                function() {
            // callback function
            });
        });


		//]]>
		</script><!-- countdown setup end -->
        <script type="text/javascript" src="assets/js/classie.js"></script>
        {{-- <script type="text/javascript" src="assets/js/pauseplayer.js"></script> --}}
        <script type="text/javascript" src="assets/js/modalEffects.js"></script><!-- scripts end -->

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}


    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>

        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> --}}

        <a id="back-to-top" href="#top"
           class="btt circle width-60 width-50-sm height-60 height-50-sm bg-white b-1 b-gray2 gray7">
            <i class="ti-angle-up fs-18"></i>
        </a>

	</body>
</html>
