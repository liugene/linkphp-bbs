$(function () {
    var tpl = '<div class="body">' +
        '<div class="left">'+
        '<div class="wiki-left-box">'+
        '</div>'+
        '</div>'+
        '<div class="right">'+
        '<iframe src="" id="wiki-view" style="width: 100%; height: 100%;" frameborder="0"></iframe>'+
        '</div>' +
        '<div class="wiki-footer">© linkphp.cn - php api框架</div>' +
        '</div>';
    $('.box').html(tpl);
});