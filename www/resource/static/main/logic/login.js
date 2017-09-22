$(function(){
    //登入操作
    $(document).on('click','.login',function(){
        var param = {account:$('#account').val(),password:$('#password').val()};
        var url = 'index.php/main/login/login';
        request(url,param,function(err, data){
            if (err) throw err;
            layer.msg(data.msg, {icon: data.code});
        });
    });
//注册操作
    $(document).on('click','.register',function(){
        var param = {account:$('#account').val(),password1:$('#password1').val(),password2:$('#password2').val()};
        var url = 'index.php/main/login/reg';
        request(url,param,function(err, data){
            if (err) throw err;
            layer.msg(data.msg, {icon: data.code});
        });
    });
});