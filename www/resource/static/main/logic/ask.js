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
    //发帖
    $('#saveFun').click(function(){
        var param = {title:$('#title').val(),type:$('#type').val(),desc:$('#desc').val()};
        var url = 'index.php/main/forum/push';
        request(url,param,function(err, data){
            if (err) throw err;
            layer.msg(data.msg, {icon: data.code});
        });
    });
    //获取标签
    var url = 'index.php/main/forum/getType';
    getData(url,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        layer.msg('获取成功!', {icon: data.code});
        var html = "";
        $.each(data.data,function(i,item){
            console.log(item);
            html += '';
        });
        $('.ask-type-down').html(html);
    });
});