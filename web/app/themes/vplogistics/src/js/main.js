import Swiper, { Autoplay, Navigation } from "swiper";
Swiper.use([Autoplay, Navigation]);

jQuery(document).ready(function() {
  jQuery(".carousel--home .carousel__slide").hover(
    function() {
      jQuery(this).css("flex-grow", 3);
    },
    function() {
      jQuery(this).css("flex-grow", 1);
    }
  );
});
