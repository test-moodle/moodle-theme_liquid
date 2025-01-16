define([], function() {
    window.requirejs.config({
        paths: {
            "swiper": M.cfg.wwwroot + '/theme/liquid/js/swiper/swiper-bundle.min',
        },
        shim: {
            'swiper': {exports: 'Swiper'},
        }
    });
});