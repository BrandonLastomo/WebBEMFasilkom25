/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

// Modifikasi Irya
$('.owl-carousel.program').owlCarousel({
    smartSpeed:600,
    margin:30,
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        900:{
            items:3,
        },
        1920:{
            items:4,
        }
    }
});

$('.owl-carousel.pengumuman').owlCarousel({
    smartSpeed:600,
    margin:30,
    dots:false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        900:{
            items:3,
        },
        1920:{
            items:4,
        }
    }
});

$('#next-slide-program').on('click', function () {
  $('.program').trigger('next.owl.carousel');
});

$('#prev-slide-program').on('click', function () {
  $('.program').trigger('prev.owl.carousel');
});

$('#next-slide-pengumuman').on('click', function () {
  $('.pengumuman').trigger('next.owl.carousel');
});

$('#prev-slide-pengumuman').on('click', function () {
  $('.pengumuman').trigger('prev.owl.carousel');
});