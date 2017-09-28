$(function(){
    var tpl = '<div class="cats">'+
        '<div class="cats-box">'+
        '<!--<div class="cats-items">-->'+
        '<!--<a href="javascript:;">Linux服务器</a>-->'+
        '<!--</div>-->'+
        '</div>'+
        '</div>'+
        '<div class="cats-more" style="display: none"></div>'+
        '<div class="cats-tool">'+
        '<div class="cats-tool-icon">'+
        '<a href="javascript:;" class="tool">'+
        '<img src="/resource/static/main/img/down.png" >'+
        '</a>'+
        '</div>'+
        '</div>'+

        '<div class="content">'+
        '<div class="forum-content-box">'+
        '<div class="left-box">'+
        '<div class="left-top">'+
        '<div class="left-top-left">'+
        '<span class="top-font">全部帖子</span>'+
        '</div>'+
        '<div class="left-top-right">'+
        '<a class="layui-btn" href="/#/ask">'+
        '<i class="layui-icon">&#xe642;</i> 发表新帖</a>'+
        '</div>'+
        '</div>'+
        '<div class="left-middle">'+
        '<div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">'+
        '<ul class="layui-tab-title">'+
        '<li class="layui-this">全部</li>'+
        '<li>推荐</li>'+
        '<li>热门</li>'+
        '<li>待解决</li>'+
        '<li>已解决</li>'+
        '</ul>'+
        '<div class="layui-tab-content"></div>'+
        '</div>'+
        '</div>'+

        '<div class="left-content-box">'+
        '<!-- 循环遍历 -->'+
        '<!--<div class="left-content">-->'+
        '<!--<div class="post-title">-->'+
        '<!--<a href="/index.php/main/forum/items" target="_blank">这是一个测试的内容</a>-->'+
        '<!--</div>-->'+
        '<!--<div class="post-info">-->'+
        '<!--<strong class="post-user">linkphp</strong>-->'+
        '<!--<em class="post-time">2017-09-17</em>-->'+
        '<!--<span class="post-tags"><a href="#" class="tags-info">mvc</a></span>-->'+
        '<!--<span class="post-num"><i class="layui-icon">&#xe611;</i> 0</span>-->'+
        '<!--</div>-->'+
        '<!--</div>-->'+
        '</div>'+

        '<!-- 底部分页 -->'+
        '<div class="left-bottom"></div>'+
        '</div>'+
        '<div class="right-box">'+
        '<div class="right-top">'+
        '<div class="right-top-left">'+
        '<span class="top-right-font">官方公告</span>'+
        '</div>'+
        '</div>'+
        '<div class="right-content">'+
        '<!--<div class="post-notic">-->'+
        '<!--<a href="#">这是一个测试的内容</a>-->'+
        '<!--</div>-->'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>';
    $('.box').html(tpl);
});