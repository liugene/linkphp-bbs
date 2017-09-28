// +----------------------------------------------------------------------
// | air.js [ air and quick ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://airjs.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liugene <liujun2199@vip.qq.com>
// +----------------------------------------------------------------------
// |               air.js
// +----------------------------------------------------------------------
$(function(){
    var url = 'index.php/main/forum/getList';
    getData(url,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data,function(i,item){
            html += '<div class="left-content">'+
                '<div class="post-title">'+
                '<a href="/#/item" target="_blank">'+item.title+'</a>'+
                '</div>'+
                '<div class="post-info">'+
                '<strong class="post-user">'+item.u_id+'</strong>'+
                '<em class="post-time">'+item.post_time+'</em>'+
                '<span class="post-tags"><a href="#" class="tags-info">'+item.c_id+'</a></span>'+
                '<span class="post-num"><i class="layui-icon">&#xe611;</i> 0</span>'+
                '</div>'+
                '</div>';
        });
        $('.left-content-box').html(html);
    });

    //子标签数据
    var childUrl = 'index.php/main/forum/getChildType';
    getData(childUrl,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data[0],function(i,item){
            html += '<div class="cats-items">'+
                '<a href="javascript:;">'+item.classname+'</a>'+
                '</div>';
        });
        $('.cats-box').html(html);
    });

    //公告数据
    var noticUrl = 'index.php/main/notices/getNotices';
    getData(noticUrl,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data,function(i,item){
            html += '<div class="post-notic">'+
                '<a href="#">'+item.title+'</a>'+
                '</div>';
        });
        $('.right-content').html(html);
    });
});