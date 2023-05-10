import Swiper, { Autoplay, Navigation } from "swiper";
Swiper.use([Autoplay, Navigation]);

jQuery(document).ready(function() {
  jQuery(".carousel--home .carousel__slide").hover(
    function() {
      jQuery(this).css("flex-grow", 3);
      jQuery(this).addClass("carousel__slide--active");
    },
    function() {
      jQuery(this).css("flex-grow", 1);
      jQuery(this).removeClass("carousel__slide--active");
    }
  );

  const swiperArticle = new Swiper(".swiper-container--article", {
    direction: "horizontal",
    loop: true,
    slidesPerView: 2.25,
    autoplay: {
      delay: 5000
    },
    spaceBetween: 30
  });
});
