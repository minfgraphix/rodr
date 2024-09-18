
// Start Window Load Function
$(window).on('load', function() {

    'use strict';

    // Do something when window loaded

// End Function
});





$( document ).ready(function() {


     //*********************************************
     //  REVOLUTION SLIDER FOR HOME
     //*********************************************

         var tpj=jQuery;
         var revapi1077;
         if(tpj("#home_slider").revolution == undefined){
            revslider_showDoubleJqueryError("#home_slider");
         }else{
            revapi1077 = tpj("#home_slider").show().revolution({
                 sliderType:"standard",
                 jsFileLocation:"js/revolutionslider/",
                 sliderLayout:"fullscreen",
                 delay:9000,
                 navigation: {
                     arrows: {
                         style: "uranus",
                         enable: true,
                         hide_onmobile: true,
                         hide_onleave: true,
                         tmp: '',
                         left: {
                             h_align: "left",
                             v_align: "center",
                             h_offset: 0,
                             v_offset: 0
                         },
                         right: {
                             h_align: "right",
                             v_align: "center",
                             h_offset: 0,
                             v_offset: 0
                         }
                     },
                     touch: {
                         touchenabled: "on",
                         swipe_threshold: 75,
                         swipe_min_touches: 1,
                         swipe_direction: "horizontal",
                         drag_block_vertical: false
                     }
                 },
                 responsiveLevels:[1240,1240,778,480],
                 visibilityLevels:[1240,1240,778,480],
                 gridwidth:[1240,1240,778,480],
                 gridheight:[868,768,480,380],
                 parallax: {
                     type:"mouse",
                     origo:"slidercenter",
                     speed:2000,
                     levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
                     disable_onmobile:"on"
                 },
                 shadow:0,
                 spinner:"off",
                 stopLoop:"off",
                 stopAfterLoops:-1,
                 stopAtSlide:-1,
                 disableProgressBar:"on",
                 shuffle:"off",
            });
         }


    //*********************************************
    //  MUSIC PLAYER SCRIPTS
    //*********************************************


          var supportsAudio = !!document.createElement('audio').canPlayType;

        // Tell all browsers to allow autoplay
        var audio = document.querySelectorAll('audio');
        for (var i = 0; i < audio.length; i++) {
        audio[i].autoplay = true;}

          if (supportsAudio) {
               document.body.classList.add("player-ready");
               // initialize plyr
               var player = new Plyr('#audio1', {
                   controls: [
                      'play',
                      'progress',
                      'current-time',
                      'duration',
                      'mute',
                      'volume',
                   ],
                   keyboard: {
                      focused: true, global: true
                   }
               });
               // initialize playlist and controls
               var index = 0,
                   playing = false,
                   mediaPath = 'images/tracks/',
                   extension = 'mp3',
                   tracks = [{
                      "poster": "https://eatdrinkmusicfestival.com/images/tracks/poster_01.jpg",
                      "name": "Sarkodie Country Side Ft Black Sherif",
                      "album": "Jamz",
                      "style": "Afro beats",
                      "year": "2022",
                      "duration": "3:40",
                      "file": "Sarkodie-Country-Side-Ft-Black-Sherif"
                   },
                   //     {
                   //    "poster": "images/tracks/poster_01.jpg",
                   //    "name": "Sarkodie ft Obrafour - Hope (Brighter Day)",
                   //    "album": "Hope",
                   //    "style": "Hip Hop",
                   //    "year": "2022",
                   //    "duration": "5:16",
                   //    "file": "Sarkodie-ft.-Obrafour-Hope-Brighter-Day-Prod-By-JMJ-www.Ghanasongs.com_"
                   // }, {
                   //    "poster": "images/tracks/poster_01.jpg",
                   //    "name": "Sarkodie Ft King Promise - Cant let You Go",
                   //    "album": "Black Love",
                   //    "style": "Afro Beats",
                   //    "year": "2022",
                   //    "duration": "3:36",
                   //    "file": "Sarkodie-Ft-King-Promise-–-Cant-let-You-Go-www.Ghanasongs.com_"
                   // }, {
                   //    "poster": "images/tracks/poster_01.jpg",
                   //    "name": "Sarkodie ft. Rudeboy – Lucky",
                   //    "album": "Black Love",
                   //    "style": "Afro Beats",
                   //    "year": "2022",
                   //    "duration": "4:28",
                   //    "file": "Sarkodie-ft.-Rudeboy-–-Lucky-www.Ghanasongs.com_"
                   // }, {
                   //    "poster": "images/tracks/poster_01.jpg",
                   //    "name": "Strongman X Akwaboah X Sarkodie - Odo Cover",
                   //    "album": "Black Love",
                   //    "style": "High life",
                   //    "year": "2022",
                   //    "duration": "4:46",
                   //    "file": "Strongman-X-Akwaboah-X-Sarkodie-Odo-Cover-www.Ghanasongs.com_"
                   // }, {
                   //    "poster": "images/tracks/poster_01.jpg",
                   //    "name": "Sarkodie - Pain Killer Ft Runtown",
                   //    "album": "Black Love",
                   //    "style": "Afro Beats",
                   //    "year": "2022",
                   //    "duration": "3:37",
                   //    "file": "Sarkodie-–-Pain-Killer-Ft-Runtown-Prod-By-TSpize-www.Ghanasongs.com_"
                   // }
                       ],
                   buildPlaylist = $.each(tracks, function(key, value) {
                      var trackPoster = value.poster,
                           trackName = value.name,
                           trackAlbum = value.album,
                           trackStyle = value.style,
                           trackYear = value.year,
                           trackDuration = value.duration;
                      $('#playlist')
                      //     .append('\
                      // <li> \
                      //      <div class="player-item unselectable mb-5 py-15 px-30 px-15-sm c-pointer bs-hover slow d-flex align-items-center justify-content-between animated fast" data-animation="zoomIn" data-animation-delay="0"> \
                      //          <div class="poster-name d-flex align-items-center justify-content-start"> \
                      //              <span class="trackPoster"><img src="' + trackPoster + '" alt="track poster" class="width-70 height-70 circle block width-40-sm height-40-sm"/></span> \
                      //              <div class="name pl-20 pl-10-sm"> \
                      //                  <span class="trackName block gray4 fs-18 lh-sm fs-14-sm semibold uppercase mt-4 mt-0-sm">' + trackName + '</span> \
                      //                  <span class="trackAlbum block fs-15 fs-12-sm gray4 lh-normal uppercase mt-5 mt-3-sm">' + trackAlbum + '</span> \
                      //              </div> \
                      //          </div> \
                      //          <div class="track-details d-flex align-items-center"> \
                      //              <span class="trackStyle uppercase fs-15 semibold gray4 mr-50 hidden-sm">' + trackStyle + '</span> \
                      //              <span class="trackYear uppercase fs-15 semibold gray4 mr-50 hidden-sm">' + trackYear + '</span> \
                      //              <span class="trackDuration uppercase fs-15 semibold gray4 mr-50 hidden-sm">' + trackDuration + '</span> \
                      //              <span class="playPauseButton inline-block width-70 height-70 width-30-sm height-30-sm bg-transparent circle b-1 b-solid b-gray7 bg-center bg-norepeat bg-dark3-hover slow"></span> \
                      //          </div> \
                      //      </div> \
                      // </li>'
                      // );

                   }),
                   trackCount = tracks.length,
                   audio = $('#audio1').on('play', function () {
                      playing = true;
                      $('.playing').removeClass('paused');
                   }).on('pause', function () {
                      playing = false;
                      $('.playing').addClass('paused');
                   }).on('ended', function () {
                      if ((index + 1) < trackCount) {
                           index++;
                           loadTrack(index);
                           audio.play();
                      } else {
                           audio.pause();
                           index = 0;
                           loadTrack(index);
                      }
                   }).get(0),
                   btnPrev = $('#btnPrev').on('click', function () {
                      if ((index - 1) > -1) {
                           index--;
                           loadTrack(index);
                           audio.play();
                      } else {
                           index = 0;
                           loadTrack(index);
                           audio.play();
                      }
                   }),
                   btnNext = $('#btnNext').on('click', function () {
                      if ((index + 1) < trackCount) {
                           index++;
                           loadTrack(index);
                           audio.play();
                      } else {
                           index = 0;
                           loadTrack(index);
                           audio.play();
                      }
                   }),
                   playingItem = $('.player-item').on('click', function () {
                      if (playing === true) {
                           audio.pause();
                           $(".playing").addClass("paused");
                      } else {
                           audio.play();
                           $(".playing").removeClass("paused");
                      }
                   }),
                   li = $('#playlist li').on('click', function () {
                      var id = parseInt($(this).index());
                      if (id !== index) {
                           playTrack(id);
                      }
                   }),
                   loadTrack = function (id) {
                      $('.playing').removeClass('playing paused');
                      $('#playlist li:eq(' + id + ')').addClass('playing');
                      index = id;
                      audio.src = mediaPath + tracks[id].file + extension;
                   },
                   playTrack = function (id) {
                      loadTrack(id);
                      audio.play();
                   };
               extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
               loadTrack(index);
               $('.playing').addClass('paused')
          } else {
          // no audio support
          $('.column').addClass('hidden');
          var noSupport = $('#audio1').text();
          $('.container').append('<p class="no-support">' + noSupport + '</p>');
          }
     });



(function($, window, document, undefined) {

   'use strict';

   //*********************************************
   //  PORTFOLIO SECTION
   //*********************************************

       // init cubeportfolio
       $('#gallery-items').cubeportfolio({
           layoutMode: 'slider',
           auto: true,
           autoTimeout: 3000,
           defaultFilter: '*',
           animationType: 'fadeOutTop',
           gapHorizontal: 0,
           gapVertical: 0,
           showNavigation: false,
           showPagination: false,
           gridAdjustment: 'responsive',
           mediaQueries: [{
               width: 1500,
               cols: 4,
           }, {
               width: 800,
               cols: 3,
           }, {
               width: 600,
               cols: 2,
           }, {
               width: 480,
               cols: 1,
               options: {
                   caption: '',
               }
           }],
           caption: 'zoom',
           displayType: 'fadeIn',
           displayTypeSpeed: 100,

           // lightbox
           lightboxDelegate: '.cbp-lightbox',
           lightboxGallery: true,
           lightboxTitleSrc: 'data-title',
       });

     //*********************************************
     //  MOMENTS SCRIPTS
     //*********************************************

          // init MOMENTS
          $('#albums-items').cubeportfolio({
               filters: '#portfolio-filters',
               gapHorizontal: 50,
               layoutMode: 'grid',
               gapVertical: 50,
               gridAdjustment: 'responsive',
               mediaQueries: [{
                 width: 992,
                 cols: 3,
               }, {
                 width: 640,
                 cols: 2,
               }, {
                 width: 480,
                 cols: 1,
                 gapVertical: 15,
                 gapHorizontal: 15
               }, {
                 width: 320,
                 cols: 1,
                 gapVertical: 15,
                 gapHorizontal: 15
               }],
               caption: 'none',
               animationType: 'sequentially',
               displayType: 'none',
               displayTypeSpeed: 60,
          });


     //*********************************************
     //  EVENT LIST SCRIPTS
     //*********************************************

          // init cubeportfolio
          $('#event-items').cubeportfolio({
               filters: '#event-filters',
               search: '#event-search',
               loadMore: '#more-events',
               loadMoreAction: 'click',
               layoutMode: 'grid',
               defaultFilter: '*',
               animationType: '3dflip',
               gapHorizontal: 35,
               gapVertical: 25,
               gridAdjustment: 'responsive',
               mediaQueries: [{
               width: 1500,
               cols: 4,
               }, {
                    width: 800,
                    cols: 3,
               }, {
                    width: 600,
                    cols: 2
               }, {
                    width: 480,
                    cols: 1,
                    options: {
                         caption: '',
                         gapHorizontal: 25,
                         gapVertical: 10,
                    }
               }],
               caption: 'zoom',
               displayType: 'fadeIn',
               displayTypeSpeed: 100,
          });

    //*********************************************
    //  EVENT LIST SCRIPTS
    //*********************************************

    // init cubeportfolio
    $('#event-itemstwo').cubeportfolio({
        filters: '#event-filters',
        search: '#event-search',
        loadMore: '#more-events',
        loadMoreAction: 'click',
        layoutMode: 'grid',
        defaultFilter: '*',
        animationType: '3dflip',
        gapHorizontal: 35,
        gapVertical: 25,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1500,
            cols: 4,
        }, {
            width: 800,
            cols: 3,
        }, {
            width: 600,
            cols: 2
        }, {
            width: 480,
            cols: 1,
            options: {
                caption: '',
                gapHorizontal: 25,
                gapVertical: 10,
            }
        }],
        caption: 'zoom',
        displayType: 'fadeIn',
        displayTypeSpeed: 100,
    });


})(jQuery, window, document);





