$(function(){
    airRouter.map('/index',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/index.js');
        loadJs('/resource/static/main/logic/index.js');
    });
    airRouter.map('/forum',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/forum.js');
        loadCss('/resource/static/main/css/forum.css');
        //loadJs('/resource/static/main/js/forum.js');
        loadJs('/resource/static/main/logic/forum.js');
    });
    airRouter.map('/wiki',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','none');
        loadJs('/resource/static/main/view/wiki.js');
        loadCss('/resource/static/main/css/wiki.css');
        loadJs('/resource/static/main/logic/wiki.js');
    });
    airRouter.map('/blog',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/blog.js');
        loadCss('/resource/static/main/css/blog.css');
        loadJs('/resource/static/main/logic/blog.js');
    });
    airRouter.map('/library',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/library.js');
        loadCss('/resource/static/main/css/lib.css');
    });
    airRouter.map('/login',function(){
        $('#nav').css('display','none');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#fff'});
        loadJs('/resource/static/main/view/login.js');
        loadCss('/resource/static/main/css/login.css');
        loadJs('/resource/static/main/js/login.js');
        loadJs('/resource/static/main/logic/login.js');
    });
    airRouter.map('/register',function(){
        $('#nav').css('display','none');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#fff'});
        loadJs('/resource/static/main/view/register.js');
        loadCss('/resource/static/main/css/login.css');
        loadJs('/resource/static/main/js/login.js');
        loadJs('/resource/static/main/logic/login.js');
    });
    airRouter.map('/user',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/user.js');
        loadCss('/resource/static/main/css/user.css');
        loadJs('/resource/static/main/logic/user.js');
    });
    airRouter.map('/ask',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','none');
        $('body').css({'height':'','overflow':'','background':'#fff'});
        loadJs('/resource/static/main/view/ask.js');
        loadCss('/resource/static/main/css/ask.css');
        //loadJs('/resource/static/main/js/ask.js');
        loadJs('/resource/static/main/logic/ask.js');
    });
    airRouter.map('/item',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/item.js');
        loadCss('/resource/static/main/css/forum.css');
        loadJs('/resource/static/main/logic/items.js');
    });
    airRouter.map('/user/post',function(){
        $('#nav').css('display','block');
        $('#footer').css('display','block');
        $('.box').css('height','');
        $('body').css({'height':'','overflow':'','background':'#393D49'});
        loadJs('/resource/static/main/view/user.js');
        loadCss('/resource/static/main/css/user.css');
        loadJs('/resource/static/main/logic/user.js');
        //我的帖子
        var myUrl = 'index.php/main/user/getPostByUser';
        getData(myUrl,'',function(err, data){
            if (err) {
                layer.msg('获取失败!', {icon: data.code});
                throw err;
            }
            var html = "";
            $.each(data.data,function(i,item){
                html += '<div class="right-content-item">'+
                    '<div class="row">'+
                    '<div class="row-size">'+
                    '<span class="label label-warning">123</span>'+
                    '</div>'+
                    '<div class="row-title">'+
                    '<span><a href="javascript:;">'+item.title+'</a></span>'+
                    '</div>'+
                    '<div class="row-time">'+
                    '<span>'+FormatDate(item.post_time)+'</span>'+
                    '</div>'+
                    '</div>'+
                    '</div>';
            });
            $('.right-content-box').html(html);
        });
    });
    airRouter.init();
});
