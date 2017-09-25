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
    //帖子详情页
    var itemUrl = 'index.php/main/forum/getItems';
    getData(itemUrl,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data,function(i,item){
            console.log(item);
            html += '';
        });
        $('.left-content-box').html(html);
    });
});