////浏览器判断
//if (document.getSelection) {
//    window.location = "login.aspx"
//}


//判断浏览器版本
var Sys = {};
var ua = navigator.userAgent.toLowerCase();
if (window.ActiveXObject) {
    Sys.ie = ua.match(/msie ([\d.]+)/)[1]
    if (Sys.ie != "6.0" && Sys.ie != "7.0" && Sys.ie != "8.0" && Sys.ie != "9.0") {
        window.location = "console/login";
    }
}