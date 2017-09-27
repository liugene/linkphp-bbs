$(function(){
    //帖子详情页
    var wikiUrl = 'index.php/main/wiki/getWiki';
    getData(wikiUrl,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data,function(i,item){
            if(i == 0){
                html += '<div class="wiki-box">'+
                    '<span class="wiki-show">'+
                    '<a href="javascript:;">'+
                    '<i class="layui-icon icon icon-active">&#xe61a;</i>'+
                    '<i class="layui-icon icon icon-none">&#xe602;</i>'+item.class_name+'</a>'+
                    '</span>'+
                    '<ul class="wiki-active">';
                $.each(item.cid,function(c,c_item){
                    html += '<li><a class="wiki-src" href="javascript:;" c-view="'+c_item.src+'">'+c_item.class_name+'</a></li>';
                });

                    html += '</ul>'+
                            '</div>';
            } else {
                html += '<div class="wiki-box">'+
                    '<span class="wiki-show">'+
                    '<a href="javascript:;">'+
                    '<i class="layui-icon icon icon-none">&#xe61a;</i>'+
                    '<i class="layui-icon icon icon-active">&#xe602;</i>'+item.class_name+'</a>'+
                    '</span>'+
                    '<ul class="wiki-none">';
                $.each(item.cid,function(c,c_item){
                    html += '<li><a class="wiki-src" href="javascript:;" c-view="'+c_item.src+'">+c_item.class_name+</a></li>';
                });
                    html += '</ul>'+
                            '</div>';
            }
        });
        $('.wiki-left-box').html(html);
        $('.wiki-show').each(function(i,v){
            $(this).click(function(){
                var elem = $(this).next()[0];
                var childelem = $(this).find('.icon')[0];
                var childelem2 = $(this).find('.icon')[1];
                if($(elem).attr('class') == "wiki-none"){
                    //return false;
                    if($(childelem).css('display') == "none"){
                        $(childelem2).css('display','none');
                        $(childelem).css('display','inline');
                    }
                    $(this).next().remove('class','wiki-none');
                    $(this).next().attr('class','wiki-active');
                } else {
                    if($(childelem).css('display') == "inline"){
                        $(childelem).css('display','none');
                        $(childelem2).css('display','inline');
                    }
                    $(this).next().remove('class','wiki-active');
                    $(this).next().attr('class','wiki-none');
                }
            })
        });
        $('.wiki-src').click(function(){
            $('#wiki-view').attr('src',$(this).attr('c-view'));
        });
    });
});
