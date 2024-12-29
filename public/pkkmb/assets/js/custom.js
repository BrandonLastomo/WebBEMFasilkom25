/**
 * Timeline
 */
$("#rundown").horizontalTimeline({
    useTouchSwipe: false,
    useKeyboardKeys: true,
    useScrollBtns: false,
});

/**
 * Absen
 */

// Hari Pertama
var countDownDate1 = new Date("Sept 8, 2021 07:00:00").getTime();

var firstInterval = setInterval(function () {
    var form = $("#formAttendance1");

    var now = new Date().getTime();
    var distance = countDownDate1 - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    days = ("00" + days).substr(-2);
    hours = ("00" + hours).substr(-2);
    minutes = ("00" + minutes).substr(-2);
    seconds = ("00" + seconds).substr(-2);

    var firstCountdownText = $("#firstCountdownText");
    firstCountdownText.show().html("Sabar yah!");

    var firstCountdown = $("#firstCountdown");
    firstCountdown
        .show()
        .html(days + ":" + hours + ":" + minutes + ":" + seconds);

    if (distance < 1) {
        clearInterval(firstInterval);
        firstCountdown.hide().html("");
        firstCountdownText.hide().html("");
        form.show();
    }
}, 0);

// Hari Kedua
var countDownDate2 = new Date("Sept 9, 2021 07:00:00").getTime();

var secondInterval = setInterval(function () {
    var form = $("#formAttendance2");

    var now = new Date().getTime();
    var distance = countDownDate2 - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    days = ("00" + days).substr(-2);
    hours = ("00" + hours).substr(-2);
    minutes = ("00" + minutes).substr(-2);
    seconds = ("00" + seconds).substr(-2);

    var secondCountdownText = $("#secondCountdownText");
    secondCountdownText.show().html("Sabar yah!");

    var secondCountdown = $("#secondCountdown");
    secondCountdown
        .show()
        .html(days + ":" + hours + ":" + minutes + ":" + seconds);

    if (distance < 1) {
        clearInterval(secondInterval);
        secondCountdown.hide().html("");
        secondCountdownText.hide().html("");
        form.show();
    }
}, 0);

/**
 * Tugas
 */

// Hari Pertama
var countDownAssignment = new Date("Sept 8, 2021 23:59:59").getTime();

var assignmentInterval = setInterval(function () {
    var form = $("#assignmentForm");

    var now = new Date().getTime();
    var distance = countDownAssignment - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor(
        (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    days = ("00" + days).substr(-2);
    hours = ("00" + hours).substr(-2);
    minutes = ("00" + minutes).substr(-2);
    seconds = ("00" + seconds).substr(-2);

    var formClosed = $("#formClosed");
    formClosed.hide();

    var countdown = $("#countdown");
    countdown.show().html(days + ":" + hours + ":" + minutes + ":" + seconds);

    if (distance < 1) {
        clearInterval(firstInterval);
        formClosed.show();
        form.hide().html("");
    }
}, 0);

/**
 * Turn off button after form submission
 */
$(function () {
    for (let i = 1; i <= 2; i++) {
        $("#form-attendance-" + i).on("submit", function () {
            $("#btn-attendance-" + i).attr("disabled", true);
            return true;
        });
    }
});

// $(function () {
//   $('#form-attendance-2').on('submit', function () {
//     $('#btn-attendance-2').attr('disabled', true);
//     return true;
//   });
// });

/**
 * Carousel
 */

$(".owl-carousel.content").owlCarousel({
    loop: true,
    smartSpeed: 900,
    margin: 10,
    items: 1,
});

$("#next-slide-home").on("click", function () {
    $(".content").trigger("next.owl.carousel");
});

$("#prev-slide-home").on("click", function () {
    $(".content").trigger("prev.owl.carousel");
});

$(".owl-carousel.information").owlCarousel({
    loop: false,
    smartSpeed: 900,
    margin: 10,
    // items: 1,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
        },
        1000: {
            items: 4,
        },
    },
});

$("#next-slide-information").on("click", function () {
    $(".information").trigger("next.owl.carousel");
});

$("#prev-slide-information").on("click", function () {
    $(".information").trigger("prev.owl.carousel");
});
