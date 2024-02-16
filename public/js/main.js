$(document).ready(
(function ($) {

    console.log('dates:', dates);
    console.log('counts:', counts);
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sidebar Toggler
    $('.sidebar-toggler').click(function () {
        $('.sidebar, .content').toggleClass("open");
        return false;
    });


    // Progress Bar
    $('.pg-bar').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});


    // Calender
    $('#calender').datetimepicker({
        inline: true,
        format: 'L'
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : false
    });


    var ctx1 = $("#subscriber-chart").get(0).getContext("2d");
    var myChart1 = new Chart(ctx1, {
        type: "bar",
        data: {
            labels: dates, // Use dynamic dates here
            datasets: [{
                label: "Subscriber Count",
                data: counts, // Use dynamic subscriber counts here
                backgroundColor: "rgba(0, 156, 255, .7)"
            }]
        },
        options: {
            responsive: true
        }
    });

// Sales & Revenue Chart
    var ctx2 = $("#sales-revenue").get(0).getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
            datasets: [{
                label: "Sales",
                data: [15, 30, 55, 45, 70, 65, 85], // Replace with dynamic sales data
                backgroundColor: "rgba(0, 156, 255, .5)",
                fill: true
            },
                {
                    label: "Revenue",
                    data: [99, 135, 170, 130, 190, 180, 270], // Replace with dynamic revenue data
                    backgroundColor: "rgba(0, 156, 255, .3)",
                    fill: true
                }]
        },
        options: {
            responsive: true
        }
    });

})
);
