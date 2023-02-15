jQuery(document).ready(function () {
    new Swiper('.slide-main', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 0,
    });
    new Swiper('.slide-cate', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 6,
        paginationClickable: true,
        spaceBetween: 20,
    });
    new Swiper('.slide-brand', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 7,
        paginationClickable: true,
        spaceBetween: 0,
    });
    new Swiper('.swiper-relate', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 20,
    });
    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "12/30/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function () {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("hours").innerHTML = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerHTML = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerHTML = Math.floor((distance % (minute)) / second);
            }, 0)
    }());
});
jQuery(document).ready(function () {
    if (jQuery('.procedure-item').length) {
        jQuery(".procedure-item").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
        });
    }
    if (jQuery('.advise-list__item').length) {
        jQuery(".advise-list__item").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: false,
            dots: false,
        });
    }
    var slider = new Swiper('.images-main', {
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        loopedSlides: 6,
    });
    var thumbs = new Swiper('.images-thumnail', {
        slidesPerView: '4',
        spaceBetween: 0,
        centeredSlides: true,
        loop: true,
        slideToClickedSlide: true,
    });
    slider.controller.control = thumbs;
    thumbs.controller.control = slider;
});

jQuery(document).ready(function ($) {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

jQuery(document).ready(function ($) {
    var accToggles = document.getElementsByClassName('title-tab');
    var tabClick = function (el) {
        var targetParent = el.target.closest('.item-tab');
      Array.prototype.forEach.call(accToggles, function (tog) {
            var tabParent = tog.closest('.item-tab');
            if (tabParent != targetParent) {
                tabParent.classList.remove('showww');
            } else {
                targetParent.classList.toggle('showww');
            }
        });
    };
    Array.prototype.forEach.call(accToggles, function (tog, index) {
        tog.addEventListener('click', tabClick, false);
    });
});
jQuery(document).ready(function () {
    jQuery('.notifi-nolg').on('click', function (e) {
		e.preventDefault();
		jQuery('.drop-notifi').addClass('show-notifi');
	});
    jQuery('.close-notifi').on('click', function (e) {
		e.preventDefault();
		jQuery('.drop-notifi').removeClass('show-notifi');
	});
});