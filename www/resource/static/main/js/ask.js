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
    $('#type').on('focus',function(){
        $('.ask-type-down').css('display','block');
    });
    $('#type').on('blur',function(){
        $("html").click(function (e) {
            if (e.target == $(".ask-type-down")[0] || e.target == $('#type')[0]) {
                console.log(1);
            } else {
                $('.ask-type-down').css('display','none');
            }
        });
    });
});