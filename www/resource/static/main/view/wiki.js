$(function () {
    var winHeight;
    if (window.innerHeight)
        winHeight = window.innerHeight;
    else if ((document.body) && (document.body.clientHeight))
        winHeight = document.body.clientHeight;
    var tpl = '<div class="body">' +
        '<div class="left">'+
        '<div class="wiki-left-box">'+
        '</div>'+
        '</div>'+
        '<div class="right">'+
        '<iframe src="" id="wiki-view" style="width: 100%; height: 99%;" frameborder="0"></iframe>'+
        '<div class="wiki-footer">© linkphp.cn - php api框架</div>'+
        '</div>' +
        '</div>';
    $('.box').html(tpl);
    $('.box').css('height',winHeight+6);
    $('body').css({'height':winHeight,'overflow':'hidden'});
});