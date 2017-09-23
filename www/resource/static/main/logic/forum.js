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
        if (err) throw err;
        layer.msg('获取成功!', {icon: data.code});
        var html = "";
        $.each(data.data,function(i,item){
            html += '<div class="left-content">'+
                '<div class="post-title">'+
                '<a href="/index.php/main/forum/items" target="_blank">'+item.title+'</a>'+
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
    //帖子详情页
    var itemUrl = 'index.php/main/forum/getItems';
    getData(itemUrl,'',function(err, data){
        if (err) throw err;
        layer.msg('获取成功!', {icon: data.code});
        var html = "";
        $.each(data.data,function(i,item){
            console.log(item);
            html += '';
        });
        $('.left-content-box').html(html);
    });
});