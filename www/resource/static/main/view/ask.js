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
        '<div class="layui-form-item ask-type">'+
        '<div class="layui-input-block">'+
        '<input id="type" value="" cid="" type="text" name="type" placeholder="标签,如:linkphp" autocomplete="off" class="layui-input tags">'+
        '<div class="ask-type-down">'+
        '<div class="ask-type-box">'+
        '</div>'+
        '</div>'+
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
    $('#type').on('focus',function(){
        $('.ask-type-down').css('display','block');
    });
    $('#type').on('blur',function(){
        $("html").click(function (e) {
            if (e.target == $(".ask-type-down")[0] || e.target == $('#type')[0] || e.target == $('.tags-info')[0]) {
                console.log(1);
            } else {
                $('.ask-type-down').css('display','none');
            }
        });
    });
    //发帖
    $('#saveFun').click(function(){
        console.log($('#desc').val());
        var param = {title:$('#title').val(),type:$('#type').val(),desc:$('#desc').val()};
        var url = 'index.php/main/forum/push';
        request(url,param,function(err, data){
            if (err) throw err;
            layer.msg(data.msg, {icon: data.code});
        });
    });
});