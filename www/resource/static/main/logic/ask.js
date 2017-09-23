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
        var param = {title:$('#title').val(),type:$('#type').val()};
        var url = 'index.php/main/forum/push';
        request(url,param,function(err, data){
            if (err) throw err;
            layer.msg(data.msg, {icon: data.code});
        });
    })
});