$(function(){
    var tpl = '<div class="u_header">'+
        '<div class="u_header-box">'+
        '<div class="u_logo">'+
        '<a href="/">'+
        '<img src="/resource/static/main/img/linkphp.png">'+
        '</a>'+
        '</div>'+
        '<div class="u_logo font">'+
        '<span>欢迎注册</span>'+
        '</div>'+
        '</div>'+
        '</div>' +
        '<div class="body">'+
        '<div class="body-box">'+
        '<div class="body-left">'+
        '<div class="input-item">'+
        '<label>用    户    名</label>'+
    '<txt class="txt">请输入您的账号名</txt>'+
        '<input id="account" name="account" type="text" class="field">'+
        '</div>'+
        '<div class="input-item">'+
        '<label>密     码</label>'+
    '<txt class="txt">请输入您的密码</txt>'+
        '<input id="password1" name="password1" type="text" class="field">'+
        '</div>'+
        '<div class="input-item">'+
        '<label>确   认   密     码</label>'+
    '<txt class="txt">请再次输入您的密码</txt>'+
        '<input id="password2" name="password2" type="text" class="field">'+
        '</div>'+
        '<div class="input-item loginact">'+
        '<a href="javascript:;" class="register">立即注册</a>'+
        '</div>'+
        '</div>'+
        '<div class="body-right">'+
        '<div class="login-right-box">'+
        '<div class="font">'+
        '<strong>已有账号:&nbsp;请<a href="/#/login">&nbsp;登入</a></strong>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>';
    $('.box').html(tpl);
});
