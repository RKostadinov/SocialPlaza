/**
 * Created by elena on 5/20/2015.
 */
$(function () {
    $(".demo").bootstrapNews({
        newsPerPage: 4,
        navigation: true,
        autoplay: true,
        direction:'up', // up or down
        animationSpeed: 'normal',
        newsTickerInterval: 4000, //4 secs
        pauseOnHover: true,
        onStop: null,
        onPause: null,
        onReset: null,
        onPrev: null,
        onNext: null,
        onToDo: null
    });
});
