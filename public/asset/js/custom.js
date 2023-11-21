// ==========Hero-slider=========
var swiper = new Swiper(".heroSlider", {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: true,
      },
    });
// ==========Hero-slider=========
// ==========Recently add product tab==========
$('.tab-link').click( function() {

	var tabID = $(this).attr('data-tab');

	$(this).addClass('active').siblings().removeClass('active');

	$('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});
// ==========Recently add product tab==========
// ==========On-sell-swipper-start=========
var swiper = new Swiper(".onSaleSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop:true,
    autoplay: {
        delay: 2500,
        pauseOnMouseEnter: true,

      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },

      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 24,
        },
        1320: {
            slidesPerView: 4,
            spaceBetween: 24,
          },
      },
  });
// ==========On-sell-swippe-end=========
