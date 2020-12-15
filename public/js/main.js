$(document).ready(function(){
    $('.sale__sliders').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        centerMode: true,
        centerPadding: '0',
        prevArrow: "<img class='a-left control-c prev slick-prev' src='image/back.svg'>",
        nextArrow:"<img class='a-left control-c prev slick-next' src='image/next.svg'>",
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });
});
