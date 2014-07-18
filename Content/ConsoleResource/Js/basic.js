$(".stretchArea .stretchLine").live("click", function (e) {
    var thisE = $(e.currentTarget).parent();
    thisE.toggleClass("open");
});
//Add by SmallerPig 2013年6月20日14:57:04
//=================================点击删除按钮开始===================================
$(".remove").live("click", function (e) {

    var thisE = $(e.currentTarget).parent();
    var ID = $(e.currentTarget).children("a").attr("data");
    var url = $(e.currentTarget).children("a").attr("operatingtype");
    var action = url == undefined ? "" : url;

    var data = { 'id': ID };
    console.log("clicking!" + ID + ";url:" + action);

    var beforesend = function(){
        console.log("before sending!");
    };
    var alerttips = function (data) {
        $("#tips").css({ "display": "block", "opacity": "1" });
        $("#tips").animate({ opacity: 0 });
        $("#tips").html(data);
    };
    var success = function (e) {
        console.log("return success");
        if (e == "success") {
            alerttips("操作成功！");
            thisE.fadeOut();
        } else if (e == "error") {
            console.log("some error!");
        } else {
            alerttips("未知错误！");
        }
    };
    AJAX(data, action, beforesend, success);
});
AJAX = function (data, url, beforesendfn, onsuccessfn, onerrorfn, oncomplete) {
    if (url == undefined || url == "") {
        $.ajax({
            type: "POST",
            cache: false,
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            beforeSend: beforesendfn,
            success: onsuccessfn,
            error: onerrorfn,
            complete: oncomplete
        });
    } else {
        $.ajax({
            type: "POST",
            url:url,
            cache: false,
            data: JSON.stringify(data),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            beforeSend: beforesendfn,
            success: onsuccessfn,
            error: onerrorfn,
            complete: oncomplete
        });
    }
};
//=================================点击删除按钮结束===================================

//function removeTR(data) {
//    console.log("clicking!" + data);
//    $(data).parent.hide();
//}