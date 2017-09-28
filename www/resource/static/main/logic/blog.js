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
    //公告数据
    var url = 'index.php/main/blog/getLists';
    getData(url,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data,function(i,item){
            html += '<div class="blog-content">'+
                '<div class="blog-img">'+
                '<img src="'+item.pic_url+'">'+
                '</div>'+
                '<header class="blog-title">'+
                '<a href="#" target="_blank">'+item.title+'</a>'+
                '</header>'+
                '<div class="blog-dec">'+
                '<p>'+item.content+'</p>'+
                '</div>'+
                '</div>';
        });
        $('.wiki-content-box').html(html);
    });
});