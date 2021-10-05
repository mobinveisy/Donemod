// mobin veisy  - ebo952@gmail.com

// preloader
$(window).on("load", function () {
    $(".preloader").fadeOut("slow");

});


$(document).ready(function () {
    // NavBar Shrink
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 90) {
        $(".navbar").addClass("navbar-shrink");
      } else {
        $(".navbar").removeClass("navbar-shrink");
      }
    });

    /* ---------- video popup ----------- */
   // Video popUP
   const videoSrc = $("#player-1").attr("src");
   $(".video-play-btn, .video-popup").on("click", function () {
     if ($(".video-popup").hasClass("open")) {
       $(".video-popup").removeClass("open");
       $("#player-1").attr("src", "");
     } else {
       $(".video-popup").addClass("open");
       if ($("#player-1").attr("src") === "") {
         $("#player-1").attr("src", videoSrc);
       }
     }
   });

    /* -----------------<< Features Carousel >>--------------- */
    $('.features-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });

    /* -----------------<< screenshot  Carousel >>--------------- */
    $('.screenshots-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 4,
            }
        }
    });


    /* -----------------<< testimoial  Carousel >>--------------- */
    $('.testimonials-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });

    /* -----------------<< testimoial  Carousel >>--------------- */
    $('.team-carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    });

    /*------------ page scrolling - Scrollit----------*/
    $.scrollIt({
        topOffset: -50
    });

    $(".nav-link").on("click", function () {
        $(".navbar-collapse").collapse("hide");
    });
    
});

      