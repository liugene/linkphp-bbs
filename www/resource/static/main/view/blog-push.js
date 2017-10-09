$(function(){
    var winHeight;
    if (window.innerHeight)
        winHeight = window.innerHeight;
    else if ((document.body) && (document.body.clientHeight))
        winHeight = document.body.clientHeight;
    var tpl = '<div class="content">'+
        '<div class="content-box">'+
        '<form class="layui-form" action="">'+
        '<div class="layui-form-item">'+
        '<div class="layui-input-block">'+
        '<input id="title" type="text" value="" name="title" placeholder="请输入标题" autocomplete="off" class="layui-input title">'+
        '</div>'+
        '</div>'+
        '<div class="layui-form-item layui-form-text ask-dec">'+
        '<div id="markdown">'+
        '<textarea id="desc" name="desc" style="display: none;"></textarea>'+
        '</div>'+
        '</div>'+
        '</form>'+
        '</div>'+
        '</div>' +
        '<div class="footerbtn" style="z-index:9999;">'+
        '<a id="saveFun" class="layui-btn layui-btn"><i class="layui-icon">&#xe619;</i> 发布</a>'+
        '<a id="btnRefresh" class="layui-btn layui-btn-normal layui-btn"><i class="layui-icon">&#x1002;</i>刷新</a>'+
        '<a id="closeFun" class="layui-btn layui-btn layui-btn-danger"><i class="layui-icon">&#x1006;</i> 放弃</a>'+
        '</div>';
    $('.box').html(tpl);
    $('.box').css('height',winHeight+6);
    var markdown;
    $(function() {
        markdown = editormd("markdown", {
            width   : "99.5%",
            height  : 380,
            syncScrolling : "single",
            path    : "/resource/static/editor.md/lib/"
        });
    });
    //发布博客
    $('#saveFun').click(function(){
        console.log($('#desc').val());
        var param = {title:$('#title').val(),type:$('#type').val(),desc:$('#desc').val()};
        var url = 'index.php/main/blog/push';
        request(url,param,function(err, data){
            if (err) throw err;
            layer.msg(data.msg, {icon: data.code});
        });
    });
});