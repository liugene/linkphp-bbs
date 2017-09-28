$(function(){
    isLogin('index.php/main/auth/isLogin',function(err, data){
        if (err) {
            layer.msg('请求失败，请联系管理员!', {icon: 2});
            //throw err;
            redirect('/#/login');
        }
        if(data.code === 2){
            redirect('/#/login');
            layer.msg('您还未登入!', {icon: data.code});
            return false;
        }
    });
});
