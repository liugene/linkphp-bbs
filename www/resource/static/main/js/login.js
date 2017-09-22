$(function(){
    $('#account').on('focus',function(){
        var li = $(this).prev('txt');
        li.css('display','none');
    });
    $('#account').on('blur',function(){
        var li = $(this).prev('txt');
        li.css('display','inline');
    });
});

