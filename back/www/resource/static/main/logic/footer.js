$(function(){
    //友情链接数据
    var linksUrl = 'index.php/main/links/getLists';
    getData(linksUrl,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = '<h3 class="footer-content-item-title">我的基友</h3><ul>';
        $.each(data.data,function(i,item){
            html += '<li><a href="#">'+item.title+'</a></li>';
        });
        html += '</ul>';
        $('.links').html(html);
    });

    //近期文章数据
    var newBlogUrl = 'index.php/main/blog/getNewItems';
    getData(newBlogUrl,'',function(err, data){
        if (err) {
            layer.msg('获取失败!', {icon: data.code});
            throw err;
        }
        var html = '<h3 class="footer-content-item-title">近期文章</h3><ul>';
        $.each(data.data,function(i,item){
            html += '<li><a href="#">'+item.title+'</a></li>';
        });
        html += '</ul>';
        $('.recent_entries').html(html);
    });
});
