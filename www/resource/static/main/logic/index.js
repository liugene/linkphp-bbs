$(function(){
    //首页文章
    var itemUrl = 'index.php/main/home/getItems';
    getData(itemUrl,'',function(err, data){
        if (err) {

            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = "";
        $.each(data.data,function(i,item){
            if(i % 2 == 0){
                html += '<div class="center-show">'+
                    '<div class="right-repeat-img">'+
                    '<img src="/resource/static/main/img/photo.png">'+
                    '</div>'+
                    '<div class="center-talk-right">'+
                    '<div class="right-repeat-title">'+
                    '<a href="javascript:;">'+item.title+'</a>'+
                    '</div>'+
                    '<div class="right-repeat-dec">'+
                    '<p>'+item.content+'</p>'+
                    '</div>'+
                    '<img src="/resource/static/main/img/talk.png">'+
                    '</div>'+
                    '</div>';
            } else {
                    html += '<div class="center-show">'+
                        '<div class="left-repeat-img">'+
                        '<img src="/resource/static/main/img/photo.png">'+
                        '</div>'+
                        '<div class="center-talk-left">'+
                        '<div class="left-repeat-title">'+
                        '<a href="javascript:;">'+item.title+'</a>'+
                        '</div>'+
                        '<div class="left-repeat-dec">'+
                        '<p>'+item.content+'</p>'+
                        '</div>'+
                        '<img src="/resource/static/main/img/talk-repeat.png">'+
                        '</div>'+
                        '</div>';
            }
        });
        $('.center-box').html(html);
    });
});
