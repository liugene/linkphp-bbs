$(function(){
    var tpl = '<div class="u_header">'+
        '<div class="u_header-box">'+
        '<div class="u_logo">'+
        '<a href="/">'+
        '<img src="/resource/static/main/img/linkphp.png">'+
        '</a>'+
        '</div>'+
        '<div class="u_logo font">'+
        '<span>欢迎登入</span>'+
        '</div>'+
        '</div>'+
        '</div>' +
        '<div class="body">'+
        '<div class="body-box">'+
        '<div class="body-left">'+
        '<div class="input-item">'+
        '<label>用    户    名</label>'+
    '<txt class="txt">您的账号名和密码</txt>'+
        '<input id="account" name="account" type="text" class="field">'+
        '</div>'+
        '<div class="input-item">'+
        '<label>密     码</label>'+
    '<txt class="txt">您的账号名和密码</txt>'+
        '<input id="password" name="password" type="text" class="field">'+
        '</div>'+
        '<div class="input-item loginact">'+
        '<a href="javascript:;" class="login">立即登入</a>'+
        '</div>'+
        '</div>'+
        '<div class="body-right">'+
        '<div class="login-right-box">'+
        '<div class="font">'+
        '<strong>还没有账号:&nbsp;请<a href="/#/register">&nbsp;注册</a></strong>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>';
    $('.box').html(tpl);
});
