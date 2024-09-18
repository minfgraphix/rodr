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

<!-- END HOME SECTION -->

















<!-- EVENTS -->
<section id="models" class="events py-150 bg-dark2 t-center">
    <!-- Background image with horizontal parallax -->
    <div class="bg-parallax skrollr bg-cover bg-repeat" style="width:140%; width:calc(100% + 350px);"
         data-anchor-target="#models" data-bottom-top="transform:translate3d(0px, 0px, 0px);"
         data-top-bottom="transform:translate3d(-350px, 0px, 0px);"
         data-background="content/musician/images/aquabgab.jpg"></div>
    <!-- Container for title -->
    <div class="container t-center">
        <br><br><br><br><br>
        <!-- Title -->
        <h1 class="font-secondary uppercase white">
            2022 - Green Edition 
        </h1>
        <!-- Strips -->
        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">
            <div class="width-percent-50 fullheight bg-gray6"></div>
        </div>
        <!-- Description -->
        <p class="mt-25 white lh-30 fs-18">
            The 2022 edition of Rhythms On Da Runway was held at the Grand Arena of the Accra International Conference Centre on Sunday, November 20.

            Themed the Green Edition, the 2021 event (the 10th edition) was aimed at creating awareness of the environment and sustainable fashion.

            Various fashion brands had their works showcased by models on the runway.        </p>
    </div>
    <!-- End container for title -->


<!-- Container for events -->
    <div class="container mt-40 mb-20">

        <!-- Row for filters and search input -->
        {{-- <div class="row">

            <!-- Col for filters -->
            <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center order-lg-1 order-2">
                <!-- Filters -->
                <div id="event-filters" class="cbp-l-filters-button">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item c-pointer">
                        All
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".istanbul" class="cbp-filter-item c-pointer">
                       #RODR20
                       <div class="cbp-filter-counter"></div>
                   </div>
                    <div data-filter=".madrid" class="cbp-filter-item c-pointer">
                        #RODR21
                        <div class="cbp-filter-counter"></div>
                    </div>
                    <div data-filter=".paris" class="cbp-filter-item c-pointer">
                        #RODR22
                        <div class="cbp-filter-counter"></div>
                    </div>


                </div>
            </div>
            <!-- End col for filters -->


            <!-- Col for search -->
            <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center order-lg-2 order-1">
                <!-- Search -->
                <div class="cbp-search">
                    <input id="event-search" type="text" placeholder="Search by day" autocomplete="off"
                           data-search=".item-city" class="cbp-search-input">
                    <div class="cbp-search-icon"></div>
                     <div class="cbp-search-nothing">No results match for <i></i></div>
                </div>
            </div>
            <!-- End col for search -->

        </div> --}}
        <!-- End row for filters and search input -->

{{--                    <h1 class="font-secondary uppercase white">--}}
{{--                        Events &amp; concerts with the list--}}
{{--                    </h1>--}}

        <!-- Row for items -->
        <div class="row">

            <!-- Column for all items -->
            <div class="col-12">

                <!-- Container for portfolio items -->
                <div id="event-items" class="cbp cbp-l-grid-masonry-projects t-center">

                    <!-- Item -->
                    <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="">
                        <div class="item-container" style="color: #B10DB7!important;">
                            <!-- Image -->
                            <div class="item-img">
                                <div class="city">#RODR22</div>
                                <img src="content/musician/images/rodr2022__1.jpg" alt="">
                            </div>
                            <!-- Texts -->
                            {{-- <h2 class="item-title">Green Edition</h2>
                            <p class="item-city">View</p>
                            <div class="date">November 20, 2022</div> --}}
                        </div>
                    </a>
                    <!-- End Item -->

                    <!-- Item -->
                    <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="">
                        <div class="item-container">
                            <!-- Image -->
                            <div class="item-img">
                                <div class="city">#RODR22</div>
                                <img src="content/musician/images/rodr2022__2.jpg" alt="">
                            </div>
                            <!-- Texts -->
                            {{-- <h2 class="item-title">Masquerade Edition</h2>
                            <p class="item-city">View</p>
                            <div class="date">December 4, 2021</div> --}}
                        </div>
                    </a>
                    <!-- End Item -->

                    <!-- Item -->
                    <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#rodr2020">
                        <div class="item-container">
                            <!-- Image -->
                            <div class="item-img">
                                <div class="city">#RODR22</div>
                                <img src="content/musician/images/rodr2022__3.jpg" alt="">
                            </div>
                            <!-- Texts -->
                            {{-- <h2 class="item-title">Beyond The Return Edition</h2>
                            <p class="item-city">View</p>
                            <div class="date">November 14, 2020</div> --}}
                        </div>
                    </a>
                    <!-- End Item -->

                     <!-- Item -->
                     <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="">
                        <div class="item-container" style="color: #B10DB7!important;">
                            <!-- Image -->
                            <div class="item-img">
                                <div class="city">#RODR22</div>
                                <img src="content/musician/images/rodr2022__4.jpg" alt="">
                            </div>
                            <!-- Texts -->
                            {{-- <h2 class="item-title">Green Edition</h2>
                            <p class="item-city">View</p>
                            <div class="date">November 20, 2022</div> --}}
                        </div>
                    </a>
                    <!-- End Item -->

                    <!-- Item -->
                    <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="">
                        <div class="item-container">
                            <!-- Image -->
                            <div class="item-img">
                                <div class="city">#RODR22</div>
                                <img src="content/musician/images/rodr2022__5.jpg" alt="">
                            </div>
                            <!-- Texts -->
                            {{-- <h2 class="item-title">Masquerade Edition</h2>
                            <p class="item-city">View</p>
                            <div class="date">December 4, 2021</div> --}}
                        </div>
                    </a>
                    <!-- End Item -->

                    <!-- Item -->
                    {{-- <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#rodr2020">
                        <div class="item-container">
                            <!-- Image -->
                            <div class="item-img">
                                <div class="city">#RODR22</div>
                                <img src="content/musician/images/rodr2022__6.jpg" alt="">
                            </div>

                        </div>
                    </a> --}}
                    <!-- End Item -->


                    <!-- Item -->
                   <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">
                       <div class="item-container">
                           <!-- Image -->
                           <div class="item-img">
                               <div class="city">#RODR22</div>
                               <img src="content/musician/images/rodr2022__6.jpg" alt="">
                           </div>

                       </div>
                   {{-- </a> <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">
                       <div class="item-container">
                           <!-- Image -->
                           <div class="item-img">
                               <div class="city">#RODR22</div>
                               <img src="content/musician/images/rodr2022__6.jpg" alt="">
                           </div>

                       </div>
                   </a> --}}
                    <!-- End Item -->



                    <!-- Item -->
{{--                    <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Day 2</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Activity 2</h2>--}}
{{--                            <p class="item-city">Day 2</p>--}}
{{--                            <div class="date">March 11, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <!-- End Item -->

{{--                    <!-- Item -->--}}
{{--                                               <a href="#" class="item cbp-item rome" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                                                   <div class="item-container">--}}
{{--                                                       <!-- Image -->--}}
{{--                                                       <div class="item-img">--}}
{{--                                                           <div class="city">Accra</div>--}}
{{--                                                           <img src="content/musician/images/event_05.jpg" alt="">--}}
{{--                                                       </div>--}}
{{--                                                       <!-- Texts -->--}}
{{--                                                       <h2 class="item-title">EDM Festival</h2>--}}
{{--                                                       <p class="item-city">Accra</p>--}}
{{--                                                       <div class="date">March 19, 2022</div>--}}
{{--                                                   </div>--}}
{{--                                               </a>--}}
                    <!-- End Item -->

                    <!-- Item -->
{{--                    <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Day 2</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Activity 3</h2>--}}
{{--                            <p class="item-city">Day 2 </p>--}}
{{--                            <div class="date">March 24, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <!-- End Item -->

                    <!-- Item -->
{{--                    <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Dj</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Dj Mensah</h2>--}}
{{--                            <p class="item-city">Dj</p>--}}
{{--                            <div class="date">March 28, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <!-- End Item -->
                    <!-- Item -->
{{--                    <a href="#" class="item cbp-item london" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Artiste</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Sarkodie</h2>--}}
{{--                            <p class="item-city">Artiste</p>--}}
{{--                            <div class="date">February 28, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <!-- End Item -->
                      <!-- Item -->
{{--                    <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Dj</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Dj Slim</h2>--}}
{{--                            <p class="item-city">Dj</p>--}}
{{--                            <div class="date">April 02, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
                                      <!-- End Item -->


                </div>
                <!-- End container for works -->

            </div>
            <!-- End column for all items -->

        </div>
        <!-- End row for items -->


    </div>
<!-- End container for events -->

</section>
<!-- End EVENTS -->

<!-- EVENTS -->
{{--<section id="djsartiste" class="events py-150 bg-dark2 t-center">--}}
{{--    <!-- Background image with horizontal parallax -->--}}
{{--    <div class="bg-parallax skrollr bg-cover bg-repeat" style="width:140%; width:calc(100% + 350px);"--}}
{{--         data-anchor-target="#events" data-bottom-top="transform:translate3d(-350px, 0px, 0px);"--}}
{{--         data-top-bottom="transform:translate3d(0px, 0px, 0px);"--}}
{{--         data-background="content/musician/images/background_04.jpg"></div>--}}
{{--    <!-- Container for title -->--}}
{{--    <div class="container t-center">--}}
{{--        <!-- Title -->--}}
{{--        <h1 class="font-secondary uppercase black">--}}
{{--            Dj's and Artistes--}}
{{--        </h1>--}}
{{--        <!-- Strips -->--}}
{{--        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--            <div class="width-percent-50 fullheight bg-black"></div>--}}
{{--        </div>--}}
{{--        <!-- Description -->--}}
{{--        <p class="mt-25 black lh-30 fs-18">--}}
{{--            The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <!-- End container for title -->--}}


{{--    <!-- Container for events -->--}}
{{--    <div class="container mt-90">--}}

{{--        <!-- Row for filters and search input -->--}}
{{--        <div class="row">--}}

{{--            <!-- Col for filters -->--}}
{{--            <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center order-lg-1 order-2">--}}
{{--                <!-- Filters -->--}}
{{--                <div id="event-filters" class="cbp-l-filters-button">--}}
{{--                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item c-pointer">--}}
{{--                        All--}}
{{--                        <div class="cbp-filter-counter"></div>--}}
{{--                    </div>--}}
{{--                    <div data-filter=".istanbul" class="cbp-filter-item c-pointer">--}}
{{--                        DJ's--}}
{{--                        <div class="cbp-filter-counter"></div>--}}
{{--                    </div>--}}
{{--                    <div data-filter=".london" class="cbp-filter-item c-pointer">--}}
{{--                        Artistes--}}
{{--                        <div class="cbp-filter-counter"></div>--}}
{{--                    </div>--}}
{{--                    --}}{{--                              <div data-filter=".istanbul" class="cbp-filter-item c-pointer">--}}
{{--                    --}}{{--                                   Accra <div class="cbp-filter-counter"></div>--}}
{{--                    --}}{{--                              </div>--}}
{{--                    --}}{{--                              <div data-filter=".london" class="cbp-filter-item c-pointer">--}}
{{--                    --}}{{--                                   Day 1 <div class="cbp-filter-counter"></div>--}}
{{--                    --}}{{--                              </div>--}}
{{--                    --}}{{--                              <div data-filter=".rome" class="cbp-filter-item c-pointer">--}}
{{--                    --}}{{--                                   Accra <div class="cbp-filter-counter"></div>--}}
{{--                    --}}{{--                              </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- End col for filters -->--}}


{{--            <!-- Col for search -->--}}
{{--            <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center order-lg-2 order-1">--}}
{{--                <!-- Search -->--}}
{{--                <div class="cbp-search">--}}
{{--                    <input id="event-search" type="text" placeholder="Search by day" autocomplete="off"--}}
{{--                           data-search=".item-city" class="cbp-search-input">--}}
{{--                    <div class="cbp-search-icon"></div>--}}
{{--                    --}}{{-- <div class="cbp-search-nothing">No results match for <i>{{query}}</i></div> --}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- End col for search -->--}}

{{--        </div>--}}
{{--        <!-- End row for filters and search input -->--}}

{{--        --}}{{--            <h1 class="font-secondary uppercase white">--}}
{{--        --}}{{--                Events &amp; concerts with the list--}}
{{--        --}}{{--            </h1>--}}

{{--        <!-- Row for items -->--}}
{{--        <div class="row">--}}

{{--            <!-- Column for all items -->--}}
{{--            <div class="col-12">--}}

{{--                <!-- Container for portfolio items -->--}}
{{--                <div id="event-itemstwo" class="cbp cbp-l-grid-masonry-projects t-center">--}}

{{--                    <!-- Item -->--}}
{{--                    <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">DJ</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Dj Mensah</h2>--}}
{{--                            <p class="item-city">Dj</p>--}}
{{--                            <div class="date">February 12, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Dj</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Dj Slim</h2>--}}
{{--                            <p class="item-city">Dj</p>--}}
{{--                            <div class="date">April 02, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    <a href="#" class="item cbp-item istanbul" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Dj</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Dj Azonto</h2>--}}
{{--                            <p class="item-city">Dj</p>--}}
{{--                            <div class="date">March 07, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    <a href="#" class="item cbp-item london" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Artiste</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Sarkodie</h2>--}}
{{--                            <p class="item-city">Artiste</p>--}}
{{--                            <div class="date">February 24, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    --}}{{--                           <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                    --}}{{--                               <div class="item-container">--}}
{{--                    --}}{{--                                   <!-- Image -->--}}
{{--                    --}}{{--                                   <div class="item-img">--}}
{{--                    --}}{{--                                       <div class="city">Accra</div>--}}
{{--                    --}}{{--                                       <img src="content/musician/images/event_03.jpg" alt="">--}}
{{--                    --}}{{--                                   </div>--}}
{{--                    --}}{{--                                   <!-- Texts -->--}}
{{--                    --}}{{--                                   <h2 class="item-title">EDM Festival</h2>--}}
{{--                    --}}{{--                                   <p class="item-city">Accra</p>--}}
{{--                    --}}{{--                                   <div class="date">February 28,  2022</div>--}}
{{--                    --}}{{--                               </div>--}}
{{--                    --}}{{--                           </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    <a href="#" class="item cbp-item london" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Artiste</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Blacko</h2>--}}
{{--                            <p class="item-city">Artiste</p>--}}
{{--                            <div class="date">March 11, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    --}}{{--                           <a href="#" class="item cbp-item rome" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                    --}}{{--                               <div class="item-container">--}}
{{--                    --}}{{--                                   <!-- Image -->--}}
{{--                    --}}{{--                                   <div class="item-img">--}}
{{--                    --}}{{--                                       <div class="city">Accra</div>--}}
{{--                    --}}{{--                                       <img src="content/musician/images/event_05.jpg" alt="">--}}
{{--                    --}}{{--                                   </div>--}}
{{--                    --}}{{--                                   <!-- Texts -->--}}
{{--                    --}}{{--                                   <h2 class="item-title">EDM Festival</h2>--}}
{{--                    --}}{{--                                   <p class="item-city">Accra</p>--}}
{{--                    --}}{{--                                   <div class="date">March 19, 2022</div>--}}
{{--                    --}}{{--                               </div>--}}
{{--                    --}}{{--                           </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    <a href="#" class="item cbp-item london" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                        <div class="item-container">--}}
{{--                            <!-- Image -->--}}
{{--                            <div class="item-img">--}}
{{--                                <div class="city">Artiste</div>--}}
{{--                                <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <!-- Texts -->--}}
{{--                            <h2 class="item-title">Strongman</h2>--}}
{{--                            <p class="item-city">Artiste </p>--}}
{{--                            <div class="date">March 24, 2022</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <!-- End Item -->--}}

{{--                    <!-- Item -->--}}
{{--                    --}}{{--                           <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                    --}}{{--                               <div class="item-container">--}}
{{--                    --}}{{--                                   <!-- Image -->--}}
{{--                    --}}{{--                                   <div class="item-img">--}}
{{--                    --}}{{--                                       <div class="city">accra</div>--}}
{{--                    --}}{{--                                       <img src="content/musician/images/event_07.jpg" alt="">--}}
{{--                    --}}{{--                                   </div>--}}
{{--                    --}}{{--                                   <!-- Texts -->--}}
{{--                    --}}{{--                                   <h2 class="item-title">EDM Festival</h2>--}}
{{--                    --}}{{--                                   <p class="item-city">Accra</p>--}}
{{--                    --}}{{--                                   <div class="date">March 28,  2022</div>--}}
{{--                    --}}{{--                               </div>--}}
{{--                    --}}{{--                           </a>--}}
{{--                    <!-- End Item -->--}}


{{--                </div>--}}
{{--                <!-- End container for works -->--}}

{{--            </div>--}}
{{--            <!-- End column for all items -->--}}

{{--        </div>--}}
{{--        <!-- End row for items -->--}}


{{--    </div>--}}
{{--    <!-- End container for events -->--}}

{{--</section>--}}
<!-- End EVENTS -->


<!-- Gallery -->
{{--<section id="gallery" class="t-center pt-100 bg-dark4" data-bg="url(content/musician/images/bgab.jpg)">--}}

{{--    <!-- Container for title -->--}}
{{--    <div class="container">--}}
{{--        <!-- Title -->--}}
{{--        <h1 class="font-secondary uppercase white fs-40">--}}
{{--            Photos from the last concert--}}
{{--        </h1>--}}
{{--        <!-- Strips -->--}}
{{--        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--            <div class="width-percent-50 fullheight bg-gray6"></div>--}}
{{--        </div>--}}
{{--        <!-- Description -->--}}
{{--        <p class="mt-25 lh-30 fs-18 gray2">--}}
{{--            The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--        </p>--}}
{{--    </div>--}}

{{--    <!-- Portfolio Items -->--}}
{{--    <div id="gallery-items" class="cbp lightbox_gallery white t-left mt-70">--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_01_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap ">--}}
{{--                    <img src="content/musician/images/works_01.jpg" alt="John Carter">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Best Moments</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_02_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap">--}}
{{--                    <img src="content/musician/images/works_02.jpg" alt="Matt Holmes">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Best Moments</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_03_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap">--}}
{{--                    <img src="content/musician/images/works_03.jpg" alt="Capture the moment">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Capture the moment</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_04_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap">--}}
{{--                    <img src="content/musician/images/works_04.jpg" alt="William Powell">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Capture the moment</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_05_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap">--}}
{{--                    <img src="content/musician/images/works_05.jpg" alt="Best moments">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Best moments</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_06_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap">--}}
{{--                    <img src="content/musician/images/works_06.jpg" alt="Robert Snyder">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Capture the moment</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_07_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap">--}}
{{--                    <img src="content/musician/images/works_07.jpg" alt="Taylor Parker">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap bg-gradient">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Capture the moment</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--        <!-- Item -->--}}
{{--        <div class="cbp-item">--}}
{{--            <!-- Your Url -->--}}
{{--            <a href="content/musician/images/works_08_b.html" class="cbp-caption">--}}
{{--                <!-- Your Image -->--}}
{{--                <div class="cbp-caption-defaultWrap bg-gradient">--}}
{{--                    <img src="content/musician/images/works_08.jpg" alt="Dear beauties">--}}
{{--                </div>--}}
{{--                <!-- Details -->--}}
{{--                <div class="cbp-caption-activeWrap">--}}
{{--                    <div class="cbp-l-caption-alignCenter">--}}
{{--                        <div class="cbp-l-caption-body">--}}
{{--                            <!-- Texts -->--}}
{{--                            <h4 class="uppercase semibold">Capture the moment</h4>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <!-- End Item -->--}}

{{--    </div>--}}
{{--    <!-- End Portfolio Items -->--}}
{{--</section>--}}
<!-- End gallery -->


<!-- MUSIC PLAYER -->
{{--<section id="vendor" class="player-section py-150" data-background="content/musician/images/bgab.jpg">--}}

{{--    <!-- Container for title -->--}}
{{--    <div class="container t-center">--}}
{{--        <!-- Title -->--}}
{{--        <h1 class="font-secondary uppercase white">--}}
{{--            Vendors--}}
{{--        </h1>--}}
{{--        <!-- Strips -->--}}
{{--        <div class="mt-20 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--            <div class="width-percent-50 fullheight bg-white"></div>--}}
{{--        </div>--}}
{{--        <!-- Description -->--}}
{{--        <p class="mt-10 black lh-30 fs-18 white">--}}
{{--            We are inviting sponsors, brands, and vendors from all aspects of the creative industry, and all other <br>--}}
{{--            stake holders to take this opportunity to partner with The Festival to benefit from the plethora of <br>--}}
{{--            10,000 visitors and fun lovers that will be present on the grounds over the period of two days.--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <div class="container t-center mt-50">--}}
{{--        <h3 class="font-secondary uppercase white">--}}
{{--            Category for vendors--}}
{{--        </h3>--}}
{{--    </div>--}}
{{--    <!-- End container for title -->--}}
{{--    <div class="container">--}}

{{--        <div class="event-list mxw-full ">--}}
{{--            <a href="#" class="list-item clearfix title colored-hover slow">--}}
{{--                <div>January 12, 2017</div>--}}
{{--                <div>Kumasi</div>--}}
{{--                <div>EDM Festival</div>--}}
{{--                <div>Ticket</div>--}}
{{--            </a>--}}
{{--            <a href="#" class="list-item clearfix colored-hover">--}}
{{--                <div> Local and Continental Dishes </div>--}}
{{--                <div></div>--}}
{{--                <div>Grills</div>--}}
{{--                <div></div>--}}
{{--            </a>--}}
{{--            <a href="#" class="list-item clearfix colored-hover">--}}
{{--                <div>Clothes and Accessories</div>--}}
{{--                <div>Art and Lifestyle</div>--}}
{{--                <div>Takoradi</div>--}}
{{--                <div>Ticket</div>--}}
{{--            </a>--}}
{{--            <a href="#" class="list-item clearfix colored-hover">--}}
{{--                <div>April 26, 2017</div>--}}
{{--                <div>Kumasi</div>--}}
{{--                <div>EDM Festival</div>--}}
{{--                <div>Ticket</div>--}}
{{--            </a>--}}
{{--            <a href="#" class="list-item clearfix colored-hover">--}}
{{--                <div>June 23, 2017</div>--}}
{{--                <div>Takoradi</div>--}}
{{--                <div>EDM Festival</div>--}}
{{--                <div>Ticket</div>--}}
{{--            </a>--}}
{{--            <a href="#" class="list-item clearfix colored-hover">--}}
{{--                <div>July 18, 2017</div>--}}
{{--                <div>Takoradi</div>--}}
{{--                <div>EDM Festival</div>--}}
{{--                <div>Ticket</div>--}}
{{--            </a>--}}
{{--            <div id="concertTable" class="collapse expander">--}}
{{--                <a href="#" class="list-item clearfix colored-hover bt-0">--}}
{{--                    <div>April 26, 2017</div>--}}
{{--                    <div>Accra</div>--}}
{{--                    <div>EDM Festival</div>--}}
{{--                    <div>Ticket</div>--}}
{{--                </a>--}}
{{--                <a href="#" class="list-item clearfix colored-hover">--}}
{{--                    <div>June 23, 2017</div>--}}
{{--                    <div>Kumasi</div>--}}
{{--                    <div>EDM Festival</div>--}}
{{--                    <div>Ticket</div>--}}
{{--                </a>--}}
{{--                <a href="#" class="list-item clearfix colored-hover">--}}
{{--                    <div>February 22, 2017</div>--}}
{{--                    <div>Takoradi</div>--}}
{{--                    <div>EDM Festival</div>--}}
{{--                    <div>Ticket</div>--}}
{{--                </a>--}}
{{--                <a href="#" class="list-item clearfix colored-hover">--}}
{{--                    <div>March 17, 2017</div>--}}
{{--                    <div>Accra</div>--}}
{{--                    <div>EDM Festival</div>--}}
{{--                    <div>Ticket</div>--}}
{{--                </a>--}}
{{--                <a href="#" class="list-item clearfix colored-hover">--}}
{{--                    <div>April 26, 2017</div>--}}
{{--                    <div>Kumasi</div>--}}
{{--                    <div>EDM Festival</div>--}}
{{--                    <div>Ticket</div>--}}
{{--                </a>--}}
{{--                <a href="#" class="list-item clearfix colored-hover">--}}
{{--                    <div>June 23, 2017</div>--}}
{{--                    <div>Accra</div>--}}
{{--                    <div>EDM Festival</div>--}}
{{--                    <div>Ticket</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- More Button -->--}}
{{--        <button class="bg-gradient1 radius-lg uppercase lg-btn px-60 white btn-hover-6 mt-30 fs-16 expander-btn collapsed more-concerts" type="button" data-bs-toggle="collapse" data-bs-target="#concertTable" aria-expanded="false" aria-controls="concertTable">--}}
{{--            <span id="show">See All Plans</span>--}}
{{--            <span id="hide">Hide All Plans</span>--}}
{{--            <i class="ti-angle-down slow"></i>--}}
{{--        </button>--}}
{{--    </div>--}}

{{--    <!-- Container for audio player -->--}}
{{--    <div class="container-md mt-70">--}}
{{--        <!-- Container for tables -->---}}

{{--        <!-- Start playlist - you can set playlist content in content/musician/js/plugins.js file -->--}}
{{--        <div class="playlist">--}}
{{--            <!-- Container for audio -->--}}
{{--            <div id="audio0"--}}
{{--                 class="audio-container bg-soft-dark6 bg-blur d-flex align-items-center justify-content-between">--}}
{{--                <!-- Template audio -->--}}
{{--                <audio id="audio1" preload controls autoplay loop>Your browser does not support HTML5 Audio! 😢</audio>--}}
{{--                <!-- Step previous & next buttons -->--}}
{{--                <div id="tracks" class="step-buttons d-flex align-items-center justify-content-center">--}}
{{--                    <a href="#" id="btnPrev" class="stay prev"></a><a href="#" id="btnNext" class="stay next"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Playlist -->--}}
{{--            <ul id="playlist"></ul>--}}
{{--        </div>--}}
{{--        <!-- End container for templates -->--}}

{{--    </div>--}}

{{--</section>--}}
<!-- END MUSIC PLAYER -->


<section id="player1" class="player-section py-1" data-background="/content/musician/images/aquabgab.jpg">

    <!-- Container for title -->
    <div class="container t-center">
        <!-- Title -->
        {{--        <h1 class="font-secondary uppercase black">--}}
        {{--            Music--}}
        {{--        </h1>--}}
        <!-- Strips -->
        {{--        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
        {{--            <div class="width-percent-50 bg-black"></div>--}}
        {{--        </div>--}}
        <!-- Description -->
        {{--        <p class="mt-25 black lh-30 fs-18">--}}
        {{--            The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
        {{--        </p>--}}
    </div>
    <!-- End container for title -->

    <!-- Container for audio player -->
{{--    <div class="container-md mt-5">--}}

{{--        <!-- Start playlist - you can set playlist content in content/musician/js/plugins.js file -->--}}
{{--        <div class="playlist">--}}
{{--            <!-- Container for audio -->--}}
{{--            <div id="audio0"--}}
{{--                 class="audio-container bg-soft-dark6 bg-blur d-flex align-items-center justify-content-between">--}}
{{--                <!-- Template audio -->--}}
{{--                <audio id="audio1" preload controls autoplay loop>Your browser does not support HTML5 Audio! 😢</audio>--}}
{{--                <!-- Step previous & next buttons -->--}}
{{--                <div id="tracks" class="step-buttons d-flex align-items-center justify-content-center">--}}
{{--                    <a href="#" id="btnPrev" class="stay prev"></a><a href="#" id="btnNext" class="stay next"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Playlist -->--}}
{{--            <ul id="playlist"></ul>--}}
{{--        </div>--}}
{{--        <!-- End container for templates -->--}}

{{--    </div>--}}

</section>
<!-- END MUSIC PLAYER -->
<!-- MUSIC PLAYER -->
{{--<section id="projects" class="player-section py-150" data-background="/content/musician/images/background_07.jpg">--}}

{{--    <!-- Container for title -->--}}
{{--    <div class="container t-center">--}}
{{--        <!-- Title -->--}}
{{--        <h1 class="font-secondary uppercase black">--}}
{{--            Projects--}}
{{--        </h1>--}}
{{--        <!-- Strips -->--}}
{{--        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--            <div class="width-percent-50 fullheight bg-black"></div>--}}
{{--        </div>--}}
{{--        <!-- Description -->--}}
{{--        <p class="mt-25 black lh-30 fs-18">--}}
{{--            The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <!-- End container for title -->--}}

{{--    <!-- Container for audio player -->--}}
{{--    <div class="player-item mb-5 py-50 px-30 px-15-sm bs-hover container-md t-center mt-40">--}}

{{--        <h3 class="font-secondary white uppercase black mb-7">--}}
{{--            to the Top--}}
{{--        </h3>--}}

{{--        <span class="block white">--}}
{{--            To The Top is an initiative from the festival that seeks to empower dreams, fuel the future, and be a catalyst for change by supporting <br> five passionate entrepreneurs on their journey to success.<br>--}}
{{--            The Eat Drink Music festival has set a target to raise GHS 200,000 to support scaling up the selected entrepreneurs.--}}
{{--            <br><br>--}}
{{--            Entrepreneurial seminars will be held during the festival for 50 young entrepreneurs in two different sessions to <br> build their capacities for the ever-challenging world of entrepreneurship.--}}
{{--            <br>A portion of revenue generated from the festival and generous donations will help us meet our target.--}}



{{--        </span>--}}
{{--        <a href="https://paystack.com/pay/eatdrinkmusicfestival" class="bg-gradient1 radius-lg uppercase lg-btn px-60 white btn-hover-6 mt-30 fs-16 expander-btn collapsed more-concerts" aria-expanded="false" aria-controls="concertTable">--}}
{{--            <span id="show">Donate</span>--}}
{{--        </a>--}}

{{--    </div>--}}

{{--</section>--}}
<!-- END MUSIC PLAYER -->


<!-- MUSIC PLAYER -->
{{--<section id="updates" class="player-section py-150" data-background="content/musician/images/background_07.jpg">--}}

{{--    <!-- Container for title -->--}}
{{--    <div class="container t-center">--}}
{{--        <!-- Title -->--}}
{{--        <h1 class="font-secondary uppercase black">--}}
{{--            NEWS & Updates--}}
{{--        </h1>--}}
{{--        <!-- Strips -->--}}
{{--        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--            <div class="width-percent-50 fullheight bg-black"></div>--}}
{{--        </div>--}}
{{--        <!-- Description -->--}}
{{--        <p class="mt-25 black lh-30 fs-18">--}}
{{--            The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <!-- End container for title -->--}}

{{--    <!-- Container for audio player -->--}}
{{--    <div class="player-item mb-5 py-70 px-30 px-15-sm bs-hover container-md t-center mt-40">--}}

{{--        <span class="block white">--}}
{{--            We are dedicating this section to bring you all the exciting news and pre event updates. <br>--}}
{{--            If you will like to receive updates directly in your email then signup now.--}}
{{--            <br>We will update you every step of the way.--}}
{{--        </span>--}}
{{--        <button class="bg-gradient1 radius-lg uppercase lg-btn px-60 white btn-hover-6 mt-30 fs-16 expander-btn collapsed more-concerts" type="button" data-bs-toggle="collapse" data-bs-target="#concertTable" aria-expanded="false" aria-controls="concertTable">--}}
{{--            <span id="show">sign Up</span>--}}
{{--        </button>--}}

{{--    </div>--}}

{{--</section>--}}
<!-- END MUSIC PLAYER -->









<!-- MUSIC PLAYER -->
{{--<section id="player" class="player-section py-150" data-background="content/musician/images/background_04.jpg">--}}

{{--    <!-- Container for title -->--}}
{{--    <div class="container t-center">--}}
{{--        <!-- Title -->--}}
{{--        <h1 class="font-secondary uppercase black">--}}
{{--            Music--}}
{{--        </h1>--}}
{{--        <!-- Strips -->--}}
{{--        <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--            <div class="width-percent-50 fullheight bg-black"></div>--}}
{{--        </div>--}}
{{--        <!-- Description -->--}}
{{--        <p class="mt-25 black lh-30 fs-18">--}}
{{--            The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--        </p>--}}
{{--    </div>--}}
{{--    <!-- End container for title -->--}}

{{--    <!-- Container for audio player -->--}}
{{--    <div class="container-md mt-70">--}}

{{--        <!-- Start playlist - you can set playlist content in content/musician/js/plugins.js file -->--}}
{{--        <div class="playlist">--}}
{{--            <!-- Container for audio -->--}}
{{--            <div id="audio0"--}}
{{--                 class="audio-container bg-soft-dark6 bg-blur d-flex align-items-center justify-content-between">--}}
{{--                <!-- Template audio -->--}}
{{--                <audio id="audio1" preload controls autoplay loop>Your browser does not support HTML5 Audio! 😢</audio>--}}
{{--                <!-- Step previous & next buttons -->--}}
{{--                <div id="tracks" class="step-buttons d-flex align-items-center justify-content-center">--}}
{{--                    <a href="#" id="btnPrev" class="stay prev"></a><a href="#" id="btnNext" class="stay next"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Playlist -->--}}
{{--            <ul id="playlist"></ul>--}}
{{--        </div>--}}
{{--        <!-- End container for templates -->--}}

{{--    </div>--}}

{{--</section>--}}
<!-- END MUSIC PLAYER -->


{{--    <!-- ALBUMS -->--}}
{{--    <section id="albums" class="white t-center bg-dark5 py-150">--}}

{{--        <!-- Container for title -->--}}
{{--        <div class="container">--}}
{{--             <!-- Title -->--}}
{{--             <h1 class="font-secondary uppercase white">--}}
{{--                  Memories &amp; best moments--}}
{{--             </h1>--}}
{{--             <!-- Strips -->--}}
{{--             <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--                  <div class="width-percent-50 fullheight bg-gray6"></div>--}}
{{--             </div>--}}
{{--             <!-- Description -->--}}
{{--             <p class="mt-25 gray4 lh-30 fs-20">--}}
{{--                The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}

{{--             </p>--}}
{{--        </div>--}}
{{--        <!-- End container for title -->--}}


{{--        <div class="container t-left mt-70">--}}

{{--             <!-- Start items -->--}}
{{--             <div id="albums-items">--}}
{{--                 <!-- Item -->--}}
{{--                 <div class="cbp-item">--}}
{{--                     <!-- Image album -->--}}
{{--                     <div class="work-image relative lightbox_gallery">--}}
{{--                         <!-- Main Image -->--}}
{{--                         <a href="content/musician/images/album_01_01.jpg" class="has-overlay-hover d-flex relative zi-3">--}}
{{--                             <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_01_01.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             <div class="overlay-hover bg-soft-dark3 slow-lg"><span class="fs-13 bold t-shadow uppercase white ls--03">See Photo album</span></div>--}}
{{--                         </a>--}}
{{--                         <!-- Other images -->--}}
{{--                         <div class="absolute bottom-0 right-0 zi-5 px-10 d-flex zi-5">--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_01_02.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_01_02.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_01_03.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_01_03.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_01_04.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_01_04.jpg" alt="Atlas Concert Hall Moments! Your message here for each photo">--}}
{{--                             </a>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <!-- Details -->--}}
{{--                     <div class="py-30">--}}
{{--                         <h5 class="fs-12 medium lh-normal uppercase ls-3 colored">13.01.2022</h5>--}}
{{--                         <h3 class="fs-18 mt-15 white uppercase">EDM Festival</h3>--}}
{{--                         <p class="fs-18 lh-30 gray5 mt-10">--}}
{{--                             The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--                         </p>--}}
{{--                     </div>--}}
{{--                     <!-- End details -->--}}
{{--                 </div>--}}
{{--                 <!-- End item -->--}}

{{--                 <!-- Item -->--}}
{{--                 <div class="cbp-item">--}}
{{--                     <!-- Image album -->--}}
{{--                     <div class="work-image relative lightbox_gallery">--}}
{{--                         <!-- Main Image -->--}}
{{--                         <a href="content/musician/images/album_02_01.jpg" class="has-overlay-hover d-flex relative zi-3">--}}
{{--                             <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_02_01.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             <div class="overlay-hover bg-soft-dark3 slow-lg"><span class="fs-13 bold t-shadow uppercase white ls--03">See Photo album</span></div>--}}
{{--                         </a>--}}
{{--                         <!-- Other images -->--}}
{{--                         <div class="absolute bottom-0 right-0 zi-5 px-10 d-flex zi-5">--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_02_02.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_02_02.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_02_03.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_02_03.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_02_04.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_02_04.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- More icon -->--}}
{{--                             <div class="width-60 height-60 d-flex align-items-center justify-content-center circle bg-colored bs-md mr-5 move-down-half">--}}
{{--                                 <span class="fs-15 relative right-2 bold white">+1</span>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <!-- Details -->--}}
{{--                     <div class="py-30">--}}
{{--                          <h5 class="fs-12 medium lh-normal uppercase ls-3 colored">12.01.2022</h5>--}}
{{--                          <h3 class="fs-18 mt-15 white uppercase">EDM Festival</h3>--}}
{{--                          <p class="fs-18 lh-30 gray5 mt-10">--}}
{{--                              The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--                          </p>--}}
{{--                     </div>--}}
{{--                     <!-- End details -->--}}
{{--                 </div>--}}
{{--                 <!-- End item -->--}}

{{--                 <!-- Item -->--}}
{{--                 <div class="cbp-item">--}}
{{--                     <!-- Image album -->--}}
{{--                     <div class="work-image relative lightbox_gallery">--}}
{{--                         <!-- Main Image -->--}}
{{--                         <a href="content/musician/images/album_03_01.jpg" class="has-overlay-hover d-flex relative zi-3">--}}
{{--                             <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_03_01.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             <div class="overlay-hover bg-soft-dark3 slow-lg"><span class="fs-13 bold t-shadow uppercase white ls--03">See Photo album</span></div>--}}
{{--                         </a>--}}
{{--                         <!-- Other images -->--}}
{{--                         <div class="absolute bottom-0 right-0 zi-5 px-10 d-flex zi-5">--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_03_02.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_03_02.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_03_03.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_03_03.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_03_04.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_03_04.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_03_05.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_03_05.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_03_06.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_03_06.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- More icon -->--}}
{{--                             <div class="width-60 height-60 d-flex align-items-center justify-content-center circle bg-colored bs-md mr-5 move-down-half">--}}
{{--                                 <span class="fs-15 relative right-2 bold white">+3</span>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <!-- Details -->--}}
{{--                     <div class="py-30">--}}
{{--                          <h5 class="fs-12 medium lh-normal uppercase ls-3 colored">12.01.2022</h5>--}}
{{--                          <h3 class="fs-18 mt-15 white uppercase">EDM Festival</h3>--}}
{{--                          <p class="fs-18 lh-30 gray5 mt-10">--}}
{{--                              The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--                          </p>--}}
{{--                     </div>--}}
{{--                     <!-- End details -->--}}
{{--                 </div>--}}
{{--                 <!-- End item -->--}}

{{--                 <!-- Item -->--}}
{{--                 <div class="cbp-item">--}}
{{--                     <!-- Image album -->--}}
{{--                     <div class="work-image relative lightbox_gallery">--}}
{{--                         <!-- Main Image -->--}}
{{--                         <a href="content/musician/images/album_04_01.jpg" class="has-overlay-hover d-flex relative zi-3">--}}
{{--                             <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_04_01.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             <div class="overlay-hover bg-soft-dark3 slow-lg"><span class="fs-13 bold t-shadow uppercase white ls--03">See Photo album</span></div>--}}
{{--                         </a>--}}
{{--                         <!-- Other images -->--}}
{{--                         <div class="absolute bottom-0 right-0 zi-5 px-10 d-flex zi-5">--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_04_02.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_04_02.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_04_03.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_04_03.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_04_04.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_04_04.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_04_05.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_04_05.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- More icon -->--}}
{{--                             <div class="width-60 height-60 d-flex align-items-center justify-content-center circle bg-colored bs-md mr-5 move-down-half">--}}
{{--                                 <span class="fs-15 relative right-2 bold white">+2</span>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <!-- Details -->--}}
{{--                     <div class="py-30">--}}
{{--                          <h5 class="fs-12 medium lh-normal uppercase ls-3 colored">12.01.2022</h5>--}}
{{--                          <h3 class="fs-18 mt-15 white uppercase">EDM Festival</h3>--}}
{{--                          <p class="fs-18 lh-30 gray5 mt-10">--}}
{{--                              The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--                          </p>--}}
{{--                     </div>--}}
{{--                     <!-- End details -->--}}
{{--                 </div>--}}
{{--                 <!-- End item -->--}}


{{--                 <!-- Item -->--}}
{{--                 <div class="cbp-item">--}}
{{--                     <!-- Image album -->--}}
{{--                     <div class="work-image relative lightbox_gallery">--}}
{{--                         <!-- Main Image -->--}}
{{--                         <a href="content/musician/images/album_05_01.jpg" class="has-overlay-hover d-flex relative zi-3">--}}
{{--                             <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_05_01.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             <div class="overlay-hover bg-soft-dark3 slow-lg"><span class="fs-13 bold t-shadow uppercase white ls--03">See Photo album</span></div>--}}
{{--                         </a>--}}
{{--                         <!-- Other images -->--}}
{{--                         <div class="absolute bottom-0 right-0 zi-5 px-10 d-flex zi-5">--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_05_02.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_05_02.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_05_03.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_05_03.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_05_04.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_05_04.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_05_05.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_05_05.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- More icon -->--}}
{{--                             <div class="width-60 height-60 d-flex align-items-center justify-content-center circle bg-colored bs-md mr-5 move-down-half">--}}
{{--                                 <span class="fs-15 relative right-2 bold white">+2</span>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <!-- Details -->--}}
{{--                     <div class="py-30">--}}
{{--                          <h5 class="fs-12 medium lh-normal uppercase ls-3 colored">12.01.2022</h5>--}}
{{--                          <h3 class="fs-18 mt-15 white uppercase">EDM Festival</h3>--}}
{{--                          <p class="fs-18 lh-30 gray5 mt-10">--}}
{{--                              The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--                          </p>--}}
{{--                     </div>--}}
{{--                     <!-- End details -->--}}
{{--                 </div>--}}
{{--                 <!-- End item -->--}}


{{--                 <!-- Item -->--}}
{{--                 <div class="cbp-item">--}}
{{--                     <!-- Image album -->--}}
{{--                     <div class="work-image relative lightbox_gallery">--}}
{{--                         <!-- Main Image -->--}}
{{--                         <a href="content/musician/images/album_06_01.jpg" class="has-overlay-hover d-flex relative zi-3">--}}
{{--                             <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_06_01.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             <div class="overlay-hover bg-soft-dark3 slow-lg"><span class="fs-13 bold t-shadow uppercase white ls--03">See Photo album</span></div>--}}
{{--                         </a>--}}
{{--                         <!-- Other images -->--}}
{{--                         <div class="absolute bottom-0 right-0 zi-5 px-10 d-flex zi-5">--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_06_02.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_06_02.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Image and link -->--}}
{{--                             <a href="content/musician/images/album_06_03.jpg" class="mr-5 move-down-half bg-transparent">--}}
{{--                                 <img src="content/musician/images/album_loading.svg" data-cbp-src="content/musician/images/album_06_03.jpg" alt="Accra - Ghanas' Biggest Music Festival" class="d-block width-60 height-60 circle b-3 b-gray9 bs-md">--}}
{{--                             </a>--}}
{{--                             <!-- Hidden image, visible on lightbox -->--}}
{{--                             <a href="content/musician/images/album_06_04.jpg" class="d-none">--}}
{{--                                 <img src="content/musician/images/album_06_04.jpg" alt="Accra - Ghanas' Biggest Music Festival">--}}
{{--                             </a>--}}
{{--                             <!-- More icon -->--}}
{{--                             <div class="width-60 height-60 d-flex align-items-center justify-content-center circle bg-colored bs-md mr-5 move-down-half">--}}
{{--                                 <span class="fs-15 relative right-2 bold white">+1</span>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                     </div>--}}
{{--                     <!-- Details -->--}}
{{--                     <div class="py-30">--}}
{{--                          <h5 class="fs-12 medium lh-normal uppercase ls-3 colored">12.01.2022</h5>--}}
{{--                          <h3 class="fs-18 mt-15 white uppercase">EDM Festival</h3>--}}
{{--                          <p class="fs-18 lh-30 gray5 mt-10">--}}
{{--                              The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--                          </p>--}}
{{--                     </div>--}}
{{--                     <!-- End details -->--}}
{{--                 </div>--}}
{{--                 <!-- End item -->--}}

{{--             </div>--}}

{{--        </div>--}}





{{--    </section>--}}
{{--    <!-- END ALBUMS -->--}}








<!-- CONTENT -->
{{--<section id="page-content" class="white t-center">--}}
{{--    <!-- Parallax Background -->--}}
{{--    <div class="bg-parallax skrollr" data-anchor-target="#page-content"--}}
{{--         data-bottom-top="transform:translate3d(0, -190px, 0px);"--}}
{{--         data-top-bottom="transform:translate3d(0px, 50px, 0px);"--}}
{{--         data-bg="url(content/musician/images/bgab.jpg)"></div>--}}
{{--    <!-- Container for link -->--}}
{{--    <div class="container py-300">--}}
{{--        <a href="https://www.youtube.com/watch?v=WleW8ikp_Dc" class="lightbox inline-block">--}}
{{--            <span--}}
{{--                class="icon-xl icon-mobile-md icon-animated circle icon fa fa-play bg-colored border-colored scale-hover fs-16"></span>--}}
{{--            <span class="underline-hover medium ml-10">45 Seconds</span>--}}
{{--            <div>--}}
{{--                <h1 class="semibold mt-15 uppercase underline-slide underline-hover-slide">watch our video</h1>--}}
{{--            </div>--}}
{{--        </a>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- END CONTENT -->--}}


{{--    <!-- EVENTS -->--}}
{{--    <section id="events" class="events py-150 bg-dark2 t-center">--}}
{{--        <!-- Background image with horizontal parallax -->--}}
{{--        <div class="bg-parallax skrollr bg-cover bg-repeat" style="width:140%; width:calc(100% + 350px);" data-anchor-target="#events" data-bottom-top="transform:translate3d(-350px, 0px, 0px);" data-top-bottom="transform:translate3d(0px, 0px, 0px);" data-background="content/musician/images/background_04.jpg"></div>--}}
{{--        <!-- Container for title -->--}}
{{--        <div class="container t-center">--}}
{{--            <!-- Title -->--}}
{{--            <h1 class="font-secondary uppercase white">--}}
{{--                  Festival Line Up--}}
{{--            </h1>--}}
{{--            <!-- Strips -->--}}
{{--            <div class="mt-30 width-200 height-1 bg-gray7 d-inline-flex justify-content-center">--}}
{{--                  <div class="width-percent-50 fullheight bg-gray6"></div>--}}
{{--            </div>--}}
{{--            <!-- Description -->--}}
{{--            <p class="mt-25 gray4 lh-30 fs-18">--}}
{{--                  The biggest music and food festival that will see the world come to Accra to celebrate cultural diversity--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <!-- End container for title -->--}}


{{--        <!-- Container for events -->--}}
{{--        <div class="container mt-90">--}}

{{--             <!-- Row for filters and search input -->--}}
{{--             <div class="row">--}}

{{--                  <!-- Col for filters -->--}}
{{--                  <div class="col-lg-6 d-flex justify-content-lg-start justify-content-center order-lg-1 order-2">--}}
{{--                         <!-- Filters -->--}}
{{--                         <div id="event-filters" class="cbp-l-filters-button">--}}
{{--                              <div data-filter="*" class="cbp-filter-item-active cbp-filter-item c-pointer">--}}
{{--                                   Days <div class="cbp-filter-counter"></div>--}}
{{--                              </div>--}}
{{--                              <div data-filter=".madrid" class="cbp-filter-item c-pointer">--}}
{{--                                   Day 1 <div class="cbp-filter-counter"></div>--}}
{{--                              </div>--}}
{{--                              <div data-filter=".paris" class="cbp-filter-item c-pointer">--}}
{{--                                   Day 2 <div class="cbp-filter-counter"></div>--}}
{{--                              </div>--}}
{{--                              <div data-filter=".istanbul" class="cbp-filter-item c-pointer">--}}
{{--                                   Accra <div class="cbp-filter-counter"></div>--}}
{{--                              </div>--}}
{{--                              <div data-filter=".london" class="cbp-filter-item c-pointer">--}}
{{--                                   Day 1 <div class="cbp-filter-counter"></div>--}}
{{--                              </div>--}}
{{--                              <div data-filter=".rome" class="cbp-filter-item c-pointer">--}}
{{--                                   Accra <div class="cbp-filter-counter"></div>--}}
{{--                              </div>--}}
{{--                         </div>--}}
{{--                  </div>--}}
{{--                  <!-- End col for filters -->--}}


{{--                  <!-- Col for search -->--}}
{{--                  <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center order-lg-2 order-1">--}}
{{--                       <!-- Search -->--}}
{{--                       <div class="cbp-search">--}}
{{--                            <input id="event-search" type="text" placeholder="Search by city" autocomplete="off" data-search=".item-city" class="cbp-search-input">--}}
{{--                            <div class="cbp-search-icon"></div>--}}
{{--                            --}}{{-- <div class="cbp-search-nothing">No results match for <i>{{query}}</i></div> --}}
{{--                       </div>--}}
{{--                  </div>--}}
{{--                  <!-- End col for search -->--}}

{{--             </div>--}}
{{--             <!-- End row for filters and search input -->--}}

{{--            <h1 class="font-secondary uppercase white">--}}
{{--                Events &amp; concerts with the list--}}
{{--            </h1>--}}

{{--             <!-- Row for items -->--}}
{{--             <div class="row">--}}

{{--                  <!-- Column for all items -->--}}
{{--                  <div class="col-12">--}}

{{--                       <!-- Container for portfolio items -->--}}
{{--                      <div id="event-items" class="cbp cbp-l-grid-masonry-projects t-center">--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">Day 1</div>--}}
{{--                                       <img src="content/musician/images/event_01.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">Activity 1</h2>--}}
{{--                                   <p class="item-city">Day 1</p>--}}
{{--                                   <div class="date">February 12,  2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}

{{--                          <!-- Item -->--}}
{{--                          <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                              <div class="item-container">--}}
{{--                                  <!-- Image -->--}}
{{--                                  <div class="item-img">--}}
{{--                                      <div class="city">Day 1</div>--}}
{{--                                      <img src="content/musician/images/event_08.jpg" alt="">--}}
{{--                                  </div>--}}
{{--                                  <!-- Texts -->--}}
{{--                                  <h2 class="item-title">Activity 2</h2>--}}
{{--                                  <p class="item-city">Day 1</p>--}}
{{--                                  <div class="date">April 02,  2022</div>--}}
{{--                              </div>--}}
{{--                          </a>--}}
{{--                          <!-- End Item -->--}}

{{--                          <!-- Item -->--}}
{{--                          <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                              <div class="item-container">--}}
{{--                                  <!-- Image -->--}}
{{--                                  <div class="item-img">--}}
{{--                                      <div class="city">Day 1</div>--}}
{{--                                      <img src="content/musician/images/event_09.jpg" alt="">--}}
{{--                                  </div>--}}
{{--                                  <!-- Texts -->--}}
{{--                                  <h2 class="item-title">Activity 3</h2>--}}
{{--                                  <p class="item-city">Day 1</p>--}}
{{--                                  <div class="date">March 07,  2022</div>--}}
{{--                              </div>--}}
{{--                          </a>--}}
{{--                          <!-- End Item -->--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">Day 2</div>--}}
{{--                                       <img src="content/musician/images/event_02.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">Activity 1</h2>--}}
{{--                                   <p class="item-city">Day 2</p>--}}
{{--                                   <div class="date">February 24,  2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">Accra</div>--}}
{{--                                       <img src="content/musician/images/event_03.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">EDM Festival</h2>--}}
{{--                                   <p class="item-city">Accra</p>--}}
{{--                                   <div class="date">February 28,  2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">Day 2</div>--}}
{{--                                       <img src="content/musician/images/event_04.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">Activity 2</h2>--}}
{{--                                   <p class="item-city">Day 2</p>--}}
{{--                                   <div class="date">March 11,  2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item rome" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">Accra</div>--}}
{{--                                       <img src="content/musician/images/event_05.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">EDM Festival</h2>--}}
{{--                                   <p class="item-city">Accra</p>--}}
{{--                                   <div class="date">March 19, 2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item paris" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">Day 2</div>--}}
{{--                                       <img src="content/musician/images/event_06.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">Activity 3</h2>--}}
{{--                                   <p class="item-city">Day 2 </p>--}}
{{--                                   <div class="date">March 24,  2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}

{{--                           <!-- Item -->--}}
{{--                           <a href="#" class="item cbp-item madrid" data-bs-toggle="modal" data-bs-target="#modal1">--}}
{{--                               <div class="item-container">--}}
{{--                                   <!-- Image -->--}}
{{--                                   <div class="item-img">--}}
{{--                                       <div class="city">accra</div>--}}
{{--                                       <img src="content/musician/images/event_07.jpg" alt="">--}}
{{--                                   </div>--}}
{{--                                   <!-- Texts -->--}}
{{--                                   <h2 class="item-title">EDM Festival</h2>--}}
{{--                                   <p class="item-city">Accra</p>--}}
{{--                                   <div class="date">March 28,  2022</div>--}}
{{--                               </div>--}}
{{--                           </a>--}}
{{--                           <!-- End Item -->--}}




{{--                      </div>--}}
{{--                      <!-- End container for works -->--}}

{{--                  </div>--}}
{{--                  <!-- End column for all items -->--}}

{{--             </div>--}}
{{--             <!-- End row for items -->--}}





{{--       </div>--}}
{{--       <!-- End container for events -->--}}

{{--    </section>--}}
{{--    <!-- End EVENTS -->--}}



<!-- Modal -->
<div id="rodr2022" class="modal fade fade-scale" tabindex="-1" role="dialog">
    <!-- Box template container -->
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <!-- Modal Details -->
        <div class="modal-content bg-dark2 b-0">
            <!-- Modal close button for mobile and large screens -->
            <button type="button" class="modal-close close visible-lg white right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <button type="button" class="modal-close close hidden-lg right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <!-- Modal details -->
            <div class="row mx-0 row-eq-height">
                <div class="col-lg-7 col-12 px-50 px-30-sm py-70">
                    <!-- Title -->
                    <h2 class="font-secondary gray3 uppercase">Rhythms On Da Runway</h2>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-15">Location</h4>
                    <!-- Link -->
                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEyfel+Kulesi!5e0!3m2!1str!2s!4v1491905379246"
                       data-iframe="true" class="lightbox white-hover gray3 slow underline">
                        Accra
                    </a>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        {{-- All the Lorem Ipsum generators on the Internet. --}}
                    </p>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-30">
                        More Details
                    </h4>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        The 2022 edition of Rhythms On Da Runway was held at the Grand Arena of the Accra International Conference Centre on Sunday, November 20.

                        Themed the Green Edition, the 2021 event (the 10th edition) was aimed at creating awareness of the environment and sustainable fashion.

                        Various fashion brands had their works showcased by models on the runway.
                    </p>
                    <!-- Button -->
                    <a href="#" target="_blank"
                       class="lg-btn fs-12 px-60 mt-15 bg-gradient1 bs-lg-hover white radius-lg btn-hover-6 slow extrabold">
                        SEE MORE DETAILS
                    </a>
                    <!-- Networks -->
                    <div class="mt-40">
                        <a href="#" class="icon-sm opacity-8-hover bg-twitter gray3 mr-5 slow-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="icon-sm opacity-8-hover bg-mail gray3 mr-5 slow-sm">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mnh-400" data-bg="url(/content/musician/images/rodr2022.jpg)"></div>
            </div>
        </div>
        <!-- End Modal Details -->
    </div>
    <!-- End box template container -->
</div>
<div id="rodr2021" class="modal fade fade-scale" tabindex="-1" role="dialog">
    <!-- Box template container -->
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <!-- Modal Details -->
        <div class="modal-content bg-dark2 b-0">
            <!-- Modal close button for mobile and large screens -->
            <button type="button" class="modal-close close visible-lg white right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <button type="button" class="modal-close close hidden-lg right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <!-- Modal details -->
            <div class="row mx-0 row-eq-height">
                <div class="col-lg-7 col-12 px-50 px-30-sm py-70">
                    <!-- Title -->
                    <h2 class="font-secondary gray3 uppercase">Rhythms On Da Runway</h2>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-15">Location</h4>
                    <!-- Link -->
                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEyfel+Kulesi!5e0!3m2!1str!2s!4v1491905379246"
                       data-iframe="true" class="lightbox white-hover gray3 slow underline">
                        Accra
                    </a>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        {{-- All the Lorem Ipsum generators on the Internet. --}}
                    </p>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-30">
                        More Details
                    </h4>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        The 2021 edition of the music and fashion event, Rhythms On Da Runway, was officially launched at the African Regent Hotel in Accra on the night of Thursday, October 7, 2021.

                        This  edition featured top designers such as Senyo Foli, Katie O, Details by Neyomi, MUDI, Jesu Segun, Nadrey Laurent, Pernia Couture, Nineteen57, Gloria Sarfo, and Attoh Andoh whose works were  showcased.

                        It was be held on December 4, 2021, at the Grand Arena of the Accra International Conference Centre (AICC) under the theme: ‘The Masquerade,’ to promote the wearing of face masks for the prevention of the spread of COVID-19.
                    </p>
                    <!-- Button -->
                    <a href="#" target="_blank"
                       class="lg-btn fs-12 px-60 mt-15 bg-gradient1 bs-lg-hover white radius-lg btn-hover-6 slow extrabold">
                        SEE MORE DETAILS
                    </a>
                    <!-- Networks -->
                    <div class="mt-40">
                        <a href="#" class="icon-sm opacity-8-hover bg-twitter gray3 mr-5 slow-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="icon-sm opacity-8-hover bg-mail gray3 mr-5 slow-sm">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mnh-400" data-bg="url(/content/musician/images/rodr2020.jpg)"></div>
            </div>
        </div>
        <!-- End Modal Details -->
    </div>
    <!-- End box template container -->
</div>
<div id="rodr2020" class="modal fade fade-scale" tabindex="-1" role="dialog">
    <!-- Box template container -->
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <!-- Modal Details -->
        <div class="modal-content bg-dark2 b-0">
            <!-- Modal close button for mobile and large screens -->
            <button type="button" class="modal-close close visible-lg white right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <button type="button" class="modal-close close hidden-lg right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <!-- Modal details -->
            <div class="row mx-0 row-eq-height">
                <div class="col-lg-7 col-12 px-50 px-30-sm py-70">
                    <!-- Title -->
                    <h2 class="font-secondary gray3 uppercase">Rhythms On Da Runway</h2>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-15">Location</h4>
                    <!-- Link -->
                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEyfel+Kulesi!5e0!3m2!1str!2s!4v1491905379246"
                       data-iframe="true" class="lightbox white-hover gray3 slow underline">
                        Accra
                    </a>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        {{-- All the Lorem Ipsum generators on the Internet. --}}
                    </p>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-30">
                        More Details
                    </h4>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        The 2020 edition  was supported by Ghana Tourism Authority and  was an officially endorsed ‘Beyond the Return’ event.
                        With the global pandemic the event was expected to be on a smaller scale because there were  not  going to be designers from other African countries flying in to participate.  There were also limited travellers from the diaspora due to travel restrictions around the world.
                         The 2020 edition was slated to be 100% Ghanaian featuring designers and musicians from across the country.
                    </p>
                    <!-- Button -->
                    <a href="#" target="_blank"
                       class="lg-btn fs-12 px-60 mt-15 bg-gradient1 bs-lg-hover white radius-lg btn-hover-6 slow extrabold">
                        SEE MORE DETAILS
                    </a>
                    <!-- Networks -->
                    <div class="mt-40">
                        <a href="#" class="icon-sm opacity-8-hover bg-twitter gray3 mr-5 slow-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="icon-sm opacity-8-hover bg-mail gray3 mr-5 slow-sm">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mnh-400" data-bg="url(/content/musician/images/rodr2021.jpg)"></div>
            </div>
        </div>
        <!-- End Modal Details -->
    </div>
    <!-- End box template container -->
</div>


<div id="modal1" class="modal fade fade-scale" tabindex="-1" role="dialog">
    <!-- Box template container -->
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <!-- Modal Details -->
        <div class="modal-content bg-dark2 b-0">
            <!-- Modal close button for mobile and large screens -->
            <button type="button" class="modal-close close visible-lg white right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <button type="button" class="modal-close close hidden-lg right-15" data-bs-dismiss="modal"
                    aria-label="Close"><i class="ti-close"></i></button>
            <!-- Modal details -->
            <div class="row mx-0 row-eq-height">
                <div class="col-lg-7 col-12 px-50 px-30-sm py-70">
                    <!-- Title -->
                    <h2 class="font-secondary gray3 uppercase">Rhythms On Da Runway</h2>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-15">Location</h4>
                    <!-- Link -->
                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937586!2d2.2922926156743895!3d48.858370079287475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEyfel+Kulesi!5e0!3m2!1str!2s!4v1491905379246"
                       data-iframe="true" class="lightbox white-hover gray3 slow underline">
                        Accra
                    </a>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        {{-- All the Lorem Ipsum generators on the Internet. --}}
                    </p>
                    <!-- Subtitle -->
                    <h4 class="gray3 bold uppercase mt-30">
                        More Details
                    </h4>
                    <!-- Paragraph -->
                    <p class="fs-18 my-15 gray4 lh-25">
                        The biggest fashion and music show in Africa
                    </p>
                    <!-- Button -->
                    <a href="#" target="_blank"
                       class="lg-btn fs-12 px-60 mt-15 bg-gradient1 bs-lg-hover white radius-lg btn-hover-6 slow extrabold">
                        SEE MORE DETAILS
                    </a>
                    <!-- Networks -->
                    <div class="mt-40">
                        <a href="#" class="icon-sm opacity-8-hover bg-twitter gray3 mr-5 slow-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="icon-sm opacity-8-hover bg-mail gray3 mr-5 slow-sm">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mnh-400" data-bg="url(/content/musician/images/rodr.jpg)"></div>
            </div>
        </div>
        <!-- End Modal Details -->
    </div>
    <!-- End box template container -->
</div>

<!-- End Modal -->
<!-- CONTENT - Relative Container for animated gradient bg -->
<section id="contactus" class="relative z-index-1 py-100 white t-center"
         data-background="/content/musician/images/rodbg1.png">

    <!-- Animated Gradient, you can set the bg size, colors and opacity with class -->
    <div class="animated-gradient active-inview opacity-5" data-gradient-size="600"
         data-gradient-bg="#3CA9A7, #2a3f83, #44928E, #842525"></div>
    <!-- Video -->
    {{--    <div id="bgndVideo" class="player"  data-property="{videoURL:'https://www.youtube.com/watch?v=b1XL0jXDOdI',containment:'#videoBG',autoPlay:true, mute:true, startAt:0, opacity:1, showControls: false }"></div>--}}

    <!-- Container -->
    <div class="container relative zi-1">
        <div class="mx-auto">
            <img src="/content/musician/images/rodlogo.png" alt="logo image" class="width-300">
        </div>
        <h1 class="mt-10 uppercase">contact us</h1>
        {{--       <h4 class="mt-15">It is a long established fact that a reader will be distracted by the readable by <br class="hidden-xs"> the readable content.</h4>--}}
        <h4 class="mt-15">Phone: <br class="hidden-xs"> <a href="tel:+233 24 464 9383" class="white-hover slow">
            +233 50 581 5623 / +233 24 573 7265</a></h4>
        <h4 class="mt-15">E-Mail:<br class="hidden-xs"> <a href="mailto:info@rhythmsondarunway.com"
                                                           class="white-hover slow"> info@rhythmsondarunway.com</a></h4>
        <div class="mt-15">
            <a href="#"
               class="icon-sm circle bg-twitter-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i
                    class="fab fa-twitter"></i></a>
            <a href="#" class="icon-sm circle bg-facebook-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i
                    class="fab fa-linkedin"></i></a>
            <a href="#"
               class="icon-sm circle bg-instagram-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i
                    class="fab fa-instagram"></i></a>
            <a href="#"
               class="icon-sm circle bg-instagram-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i
                    class="fab fa-youtube"></i></a>
            <a href="#"
               class="icon-sm circle bg-instagram-hover bg-dark1 white slow-sm mr-10 mx-5-sm">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>svg {
                            fill: #ffffff
                        }</style>
                    <path
                        d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>
                </svg>
            </a>
        </div>
    </div>
    <!-- End Container -->
</section>
<!-- END CONTENT -->

<!-- CLIENT LOGOS -->
<div id="clients" class="" data-bg="url(/content/musician/images/aquabgab.jpg)">
    <!-- Box template container -->
    <div class="container py-30">
        <!-- Slider -->
        <div id="client-carousel" class="custom-slider dots-strip dark-dots dots-close c-move controls-mouseover"
             data-slick='{"dots": false, "autoplay": true, "fade": false, "autoplaySpeed": 3000, "speed":600, "arrows": false, "draggable":true, "slidesToShow": 6, "slidesToScroll": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3,"slidesToScroll": 3}},{"breakpoint": 768,"settings":{"slidesToShow": 2,"slidesToScroll": 2}}]}'>
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
            <!-- Slide -->
            <a href="#" class="slow px-10 py-30 b-1 b-transparent b-solid mx-5 b-dark-hover opacity-7 opacity-10-hover">
                <img src="/images/clients/Beyond the return.png" alt="" class="mxw-120 mx-auto">
            </a>
            <!-- End slide -->
        </div>
        <!-- End Slider -->
    </div>
    <!-- End box template container -->
</div>
<!-- END CLIENTS SECTION -->


<!-- Cookie template static version -->
{{--<div id="cookie__notification_01_15213" class="cookie fixed bottom-30 fullwidth" data-expire="15">--}}
{{--    <div--}}
{{--        class="container-sm bg-dark4 py-35 px-30 d-flex justify-content-lg-between justify-content-center flex-lg-row flex-column align-items-center pointer-events-all">--}}
{{--        <p class="fs-18 white lh-25">This website uses cookies to give you the best experience. <a--}}
{{--                href="#" class="underline gray3-hover">Click for detailed information.</a></p>--}}
{{--        <button type="button" class="close bg-white lh-normal px-40 py-15 fs-12 uppercase opacity-10 bold mt-20-sm">--}}
{{--            Accept--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End cookie template static version -->


<!-- Footer -->
<footer id="footer" class="bg-dark5" data-bg="url(/content/musician/images/rodbg1.png)">
    <!-- Container for footer -->
    <div class="container pt-40 pb-100 pt-70-sm">
        <!-- Row for footer cols -->
        <div class="row row-eq-height align-items-center">
            <!-- Column -->
            <div class="col-lg-auto col-12">
                <div class="t-left t-center-sm mr-50 mr-0-sm">
                    <a><p class="bold fs-11 white"></p></a>
                </div>
            </div>
            <!-- End column -->
            <!-- Column -->
            <div class="col-lg-auto col-12">
                <div class="t-left t-center-sm mt-30-sm mr-50 mr-0-sm">
                    <p class="bold fs-13 white"><a href="mailto:info@rhythmsondarunway.com"
                                                   class="white-hover underline-hover uppercase"></a></p>
                </div>
            </div>
            <!-- End column -->
            <!-- Column -->
            {{--            <div class="col-lg-auto col-12">--}}
            {{--                <div class="t-left t-center-sm mt-30-sm mr-50 mr-0-sm">--}}
            {{--                    <p class="bold fs-13 white"><a href="tel:+1234567890" class="white-hover underline-hover uppercase">©2022--}}
            {{--                            || POWERED BY VIRTUAL SOLUTIONS GH <a href="https://virtualsolutionsgh.com/"></a></a></p>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- End column -->
            <!-- Column -->
            {{--            <div class="col-lg-auto ml-auto col-12 mt-30-sm">--}}
            {{--                <div class="t-right t-center-sm">--}}
            {{--                    <a href="https://twitter.com/_edmfestival?s=21" class="icon-sm circle bg-twitter-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i--}}
            {{--                            class="fab fa-twitter"></i></a>--}}
            {{--                    <a href="#" class="icon-sm circle bg-facebook-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i--}}
            {{--                            class="fab fa-facebook"></i></a>--}}
            {{--                    <a href="https://instagram.com/edmfestival__?igshid=MmJiY2I4NDBkZg==" class="icon-sm circle bg-instagram-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i--}}
            {{--                            class="fab fa-instagram"></i></a>--}}
            {{--                    <a href="https://www.youtube.com/@_Edmfestival" class="icon-sm circle bg-instagram-hover bg-dark1 white slow-sm mr-10 mx-5-sm"><i--}}
            {{--                            class="fab fa-youtube"></i></a>--}}
            {{--                    <a href="https://www.tiktok.com/@edm.festival?_t=8cwwWeJu8IQ&_r=1" class="icon-sm circle bg-instagram-hover bg-dark1 white slow-sm mr-10 mx-5-sm">--}}
            {{--                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">--}}
            {{--                            <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->--}}
            {{--                            <style>svg{fill:#ffffff}</style>--}}
            {{--                            <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>--}}
            {{--                        </svg>--}}
            {{--                    </a>--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <!-- End column -->
        </div>
        <div class="col-lg-auto col-12 d-flex justify-content-center">
            <div class="t-center-sm ml-15 mt-30-sm mr-50 mr-0-sm">
{{--                <pre id="json-result"></pre>--}}
                <p class="bold fs-13 white"><a href="https://virtualsolutionsgh.com/"
                                               class="white-hover underline-hover uppercase">
                        ©2023 || POWERED BY VIRTUAL SOLUTIONS GH
                        <a href="https://virtualsolutionsgh.com/"></a></a></p>
            </div>
        </div>

        <!-- End row for footer cols -->
    </div>
    <!-- Container for footer -->
</footer>
<!-- End footer -->


<!-- Quick Contact Form -->
{{--<div class="qcf bg-transparent radius-lg bs-xl unselectable">--}}
{{--    <!-- Top section -->--}}
{{--    <div class="bg-colored px-30 px-15-sm py-40 t-left">--}}
{{--        <img src="images/logos/logo_02_white.svg" class="block width-30" alt="website logo template">--}}
{{--        <h5 class="fs-18 white uppercase semibold mt-30">Drop us a message</h5>--}}
{{--        <p class="fs-18 white lh-25 mt-10">You're at the right place now! How can we help?</p>--}}
{{--    </div>--}}
{{--    <!-- Contact Form -->--}}
{{--    <form class="validate-me pt-15 bg-white" name="quick_form" method="post" action="#"--}}
{{--          data-error-message="Please check the red marked areas."--}}
{{--          data-submit-message="Your message has reached us. Thank you!">--}}
{{--        <!-- Email -->--}}
{{--        <input type="email" name="qemail" id="qemail" required placeholder="E-Mail" autocomplete="off"--}}
{{--               class="fs-16 py-20 px-30 b-0 bb-1 b-gray">--}}
{{--        <!-- Message -->--}}
{{--        <textarea name="qmessage" id="qmessage" required placeholder="Message"--}}
{{--                  class="fs-16 py-20 px-30 height-120 mt-5 b-0 bb-1 b-gray"></textarea>--}}
{{--        <div class="mt-50 t-right py-30 px-30 d-flex justify-content-end align-items-center">--}}
{{--            --}}{{-- <a href="#" target="_blank" class="fs-14 medium colored">VISIT CONTACT PAGE</a> --}}
{{--            <!-- Send Button -->--}}
{{--            <button type="submit" id="qsubmit" class="fs-14 black medium ml-15 py-0 bg-white dark-loading">SEND--}}
{{--                MESSAGE--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
{{--<div class="qcf-backdrop"></div>--}}
<!-- Contact us button -->
{{--<a href="#"--}}
{{--   class="drop-msg qcf-trigger circle width-60 width-50-sm height-60 height-50-sm bg-colored bg-colored1-active white">--}}
{{--    <i class="ti-headphone-alt fs-22 show"></i>--}}
{{--    <i class="ti-close fs-20 cls"></i>--}}
{{--</a>--}}
<!-- Back To Top -->
<a id="back-to-top" href="#top"
   class="btt circle width-60 width-50-sm height-60 height-50-sm bg-white b-1 b-gray2 gray7">
    <i class="ti-angle-up fs-18"></i>
</a>


{{-- <!-- SEARCH FORM FOR NAV -->
<div class="fs-searchform d-flex align-items-center justify-content-center">
     <form id="fs-searchform" class="container" action="#" method="get">
          <!-- Input -->
          <input type="search" name="q" id="q" placeholder="Search on website.com" autocomplete="off">
          <div class="ti-close close"></div>
          <div class="recommended normal fs-18 gray7">
               <h5 class="rcm-title normal">Recommend Links;</h5>
               <a href="demo-antares.html">Quadra, Antares version</a>
               <a href="demo-athena.html">Beautiful Athena demo</a>
               <a href="elements-all.html">Awesome Quadra Elements</a>
               <a href="demo-feronia.html">Why i will use the Quadra?</a>
               <a href="index.html">See 500+ templates</a>
          </div>
     </form>
     <div class="form-bg"></div>
</div>
<!-- END SEARCH FORM --> --}}

{{--<script>--}}
{{--    // Get the user's location--}}
{{--    var result = document.getElementById("json-result");--}}
{{--    const Http = new XMLHttpRequest();--}}
{{--    function getLocation() {--}}
{{--        console.log("getLocation Called");--}}
{{--        var bdcApi = "https://api.bigdatacloud.net/data/reverse-geocode-client"--}}

{{--        navigator.geolocation.getCurrentPosition(--}}
{{--            (position) => {--}}
{{--                bdcApi = bdcApi--}}
{{--                    + "?latitude=" + position.coords.latitude--}}
{{--                    + "&longitude=" + position.coords.longitude--}}
{{--                    + "&localityLanguage=en";--}}
{{--                getApi(bdcApi);--}}

{{--            },--}}
{{--            (err) => { getApi(bdcApi); },--}}
{{--            {--}}
{{--                enableHighAccuracy: true,--}}
{{--                timeout: 5000,--}}
{{--                maximumAge: 0--}}
{{--            });--}}
{{--    }--}}
{{--    function getApi(bdcApi) {--}}
{{--        Http.open("GET", bdcApi);--}}
{{--        Http.send();--}}
{{--        Http.onreadystatechange = function () {--}}
{{--            if (this.readyState === 4 && this.status === 200) {--}}
{{--                result.innerHTML = this.responseText;--}}
{{--            }--}}
{{--        };--}}
{{--    }--}}


{{--    // Trigger the getLocation() function immediately when the page loads--}}
{{--    window.onload = getLocation;--}}
{{--</script>--}}


@include('pages.layouts.footer')
{{--{!! notify()->ready() !!}--}}

{{-- <x-notify::notify />
@notifyJs --}}


</body>
<!-- Body End -->

<!-- Mirrored from goldeyes.net/quadra/demo-musician.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Mar 2023 12:34:29 GMT -->
</html>
