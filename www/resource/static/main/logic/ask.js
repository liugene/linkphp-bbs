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
    ////发帖
    //$('#saveFun').click(function(){
    //    console.log($('#desc').val());
    //    var param = {title:$('#title').val(),type:$('#type').val(),desc:$('#desc').val()};
    //    var url = 'index.php/main/forum/push';
    //    request(url,param,function(err, data){
    //        if (err) throw err;
    //        layer.msg(data.msg, {icon: data.code});
    //    });
    //});
    //获取标签
    var url = 'index.php/main/forum/getType';
    getData(url,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = '<div class="ask-type-box">';
        $.each(data.data,function(i,item){
            console.log(item);
            html += '<div class="ask-type-p">'+
                '<div class="ask-type-name">'+
                '<a class="tags-info" pid="'+item.id+'">'+item.classname+'</a>'+
                '</div>'+
                '</div>';
            $.each(item.cid,function(t,c_item){
               html += '<div class="ask-type-c">'+
                   '<div class="ask-type-tags">'+
                    '<div class="ask-type-name">'+
                    '<a class="tags-info child" cid="'+c_item.id+'">'+c_item.classname+'</a>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
            });
        });
        html += '</div>';
        $('.ask-type-down').html(html);
        $('.child').click(function(){
            $('#type').attr('cid',$(this).attr('cid'));
            $('#type').val($(this).text());
        });
    });
});