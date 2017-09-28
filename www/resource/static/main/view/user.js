$(function(){
    var tpl = '<div class="user_content">'+
        '<div class="user_box">'+
        '<!-- 左侧 开始 -->'+
    '<div class="user_left">'+
        '<dl>'+
        '<dt>数据中心</dt>'+
        '<dd><a href="javascript:;" class="my-post">我的帖子</a></dd>'+
        '<dd><a href="#">我的收藏</a></dd>'+
        '</dl>'+
        '<dl>'+
        '<dt>帐号管理</dt>'+
        '<dd>个人信息</dd>'+
        '<dd>修改密码</dd>'+
        '</dl>'+
        '</div>'+
        '<!-- 右侧 开始 -->'+
    '<div class="user_right">'+
        '<div class="user_right-type">'+
        '<span>我的帖子</span>'+
        '<div class="border"></div>'+
        '</div>'+
        '<div class="right-content-box">';
    $('.box').html(tpl);
});
