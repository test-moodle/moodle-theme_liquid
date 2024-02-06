define(['theme_liquid/swiper'], function(Swiper) {
  /**
   * Initializes Swiper instances on all elements with the 'swiper' class.
   */
  function initSwiper() {
    var swipers = document.querySelectorAll('.swiper');

    swipers.forEach(function(swiperElement) {
      var options = JSON.parse(swiperElement.getAttribute('data-swiper-options'));
      new Swiper(swiperElement, options);
    });
  }

  return {
    init: function() {
      initSwiper();
    }
  };
});