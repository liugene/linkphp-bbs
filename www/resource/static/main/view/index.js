$(function(){
    var tpl = '<div id="content index-content" style="box-shadow: 0 6px 28px rgba(0,0,0,.10);">'+
        '<div class="class-content">'+
        '<div class="class-content-logo">'+
        '<img src="/resource/static/main/img/icon.png" style="width:220px;height:220px" />'+
        '</div>'+
        '<div class="class-content-item">'+
        '<a href="/#/library" class="layui-btn layui-btn-big layui-btn-radius">加载类库</a>'+
        '<a href="/#/wiki" class="layui-btn layui-btn-big layui-btn-radius">帮助手册</a>'+
        '<a href="/#/forum" class="layui-btn layui-btn-primary layui-btn-big layui-btn-radius">技术问答社区</a>'+
        '<a href="http://github.com/liugene/linkphp" target="_blank" class="layui-btn layui-btn-big layui-btn-radius layui-btn-warm">GitHub</a>'+
        '</div>'+
        '<div class="class-content-font">当前类库大小：<span class="layui-badge layui-bg-green"> 15</span>个 | 最新更新于: <span class="layui-badge layui-bg-blue">2017-09-19</span>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '<div class="clear">'+
        '</div>'+
        '<!-- 首页中间  -->'+
        '<div id="center">'+
        '<div class="center-box">'+
        '</div>'+
        '</div>';
    $('.box').html(tpl);
});
