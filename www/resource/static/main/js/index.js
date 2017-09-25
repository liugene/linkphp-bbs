$(function(){
    var elms = $('.center-show');
    //alert(elms.size())
    var floor = [];
    elms.each(function (i,v) {
        floor.push(v.offsetTop)
    });
    $(window).on('scroll',function () {
        elms.each(function (i,v){
            if ($(window).scrollTop() > floor[i] - 60) {
                //alert($('.center-show').scrollTop());
                $('.center-show').eq(i).addClass('active');
            } else if ($(window).scrollTop() < floor[i] - 60) {
                $('.center-show').eq(i).removeClass('active');
            }
        })
    });

});
