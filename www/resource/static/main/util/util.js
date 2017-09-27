var root_url = "https://api.linkphp.cn/";
function request(url,data,callback){
    $.ajax({
        url: root_url+url,
        data: data,
        type: "post",
        dataType: "json",
        success: function (res) {
            if (typeof callback === 'function') {
                callback(null,res);
            }
        }, error: function (error) {
            if (typeof callback === 'function') {
                callback(error);
            }
        }
    });
}

//带验证操作
function isLogin(url,callback){
    var token = localStorage.getItem('token');
    $.ajax({
        url: root_url+url,
        headers: {
            "authorization": token
        },
        type: "post",
        dataType: "json",
        success: function (res) {
            if (typeof callback === 'function') {
                callback(null,res);
            }
        }, error: function (error) {
            if (typeof callback === 'function') {
                callback(error);
            }
        }
    });
}
//get获取数据
function getData(url,data,callback){
    $.ajax({
        url: root_url+url,
        data: data,
        type: "get",
        dataType: "json",
        success: function (res) {
            if (typeof callback === 'function') {
                callback(null,res);
            }
        }, error: function (error) {
            if (typeof callback === 'function') {
                callback(error);
            }
        }
    });
}
// 去前后空格
function trim(str) {
    return str.replace(/(^\s*)|(\s*$)/g, "");
}

function FormatDate (strTime) {
    var date = new Date(strTime);
    return date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
}
