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

    airRouter.map('/user/post',function(){
        //我的帖子
        var myUrl = 'index.php/main/user/getPostByUser';
        getData(myUrl,'',function(err, data){
            if (err) {
                layer.msg('获取失败!', {icon: data.code});
                throw err;
            }
            var html = "";
            $.each(data.data,function(i,item){
                html += '<div class="right-content-item">'+
                    '<div class="row">'+
                    '<div class="row-size">'+
                    '<span class="label label-warning">123</span>'+
                    '</div>'+
                    '<div class="row-title">'+
                    '<span><a href="javascript:;">'+item.title+'</a></span>'+
                    '</div>'+
                    '<div class="row-time">'+
                    '<span>'+FormatDate(item.post_time)+'</span>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
            });
            $('.right-content-box').html(html);
        });
    });
});
