$(function(){
    var tpl = '<div class="content item-content">'+
        '<div class="content-box item-content-box">'+
        '<div class="content-item">'+
        '<div class="content-item-box">'+
        '<div class="post-title">'+
        '<a href="/index.php/main/forum/items" target="_blank">这是一个测试的内容</a>'+
        '</div>'+
        '<div class="post-info">'+
        '<strong class="post-user">linkphp</strong>'+
        '<em class="post-time">2017-09-17</em>'+
        '<span class="post-tags"><a href="#" class="tags-info">mvc</a></span>'+
        '<span class="post-num"><i class="layui-icon">&#xe611;</i> 0</span>'+
    '</div>'+
    '</div>'+
    '<div class="content-item-box-dec">'+
        '<p>1.0新版本在调试公众号网页的时候，控制台没有任何JSSDK的输出，不知道是bug还是新版本调整在别的地方了</p>'+
    '<strong class="post-last-time">最后一次编辑于: 2017-09-17</strong>'+
    '</div>'+
    '<div class="content-item-box-repeat">'+
        '<div class="content-item-box-img">'+
        '<img src="//q.qlogo.cn/qqapp/101235792/A645D3B0234D71AE1EB9B2366399817D/100">'+
        '</div>'+
        '<div class="content-item-box-notic">'+
        '<textarea id="notic" style="display: none;"></textarea>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';
    $('.box').html(tpl);
});