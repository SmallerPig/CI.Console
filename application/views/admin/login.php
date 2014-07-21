<?php
// vim: set expandtab cindent tabstop=4 shiftwidth=4 fdm=marker:
// +----------------------------------------------------------------------+
// | WUXI.SourceCode.Smallerpig                                           |
// +----------------------------------------------------------------------+
// | Copyright (c) 2014, WUXI.SOURCECODE Inc. All rights reserved.        |
// +----------------------------------------------------------------------+
// | Authors: smallerpig. www.smallerpig.com                              |
// |                                                                      |
// +----------------------------------------------------------------------+
 
/**
 * @version  1.0
 * @author   smallerpig
 * @date     
 */
 ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
    <base href="<?php echo base_url() ;?>"/>
    <script type="text/javascript">
        if (!document.getSelection) {
            window.location = "oldbrowser.html";
        }
    </script>
    <link rel="stylesheet" type="text/css" href="Content/ConsoleResource/css/component_input.css">
    <link rel="stylesheet" type="text/css" href="Content/ConsoleResource/css/login.css">
    <script src="Content/js/jquery-1.8.2.min.js"></script>    
    <script src="Content/ConsoleResource/js/login.js"></script>

    <script src="Content/js/core.basic-1.1.js"></script>
    <script src="Content/js/simple-validator.min.js"></script>
</head>

    <body>
        <noscript>
            页面需要支持JS才可以正常运行
        </noscript>       

        <div id="loginArea" >
            <div id="loginInfor" style="text-align: center;line-height: 32px;color: red;"></div>
            <form id="form1" action="/admin/console/login" method="POST">
                <div id="loginTitle">索斯科信息管理系统</div>
                <input id="usernameInput" name="username" onkeydown="if (event.keyCode == 13) { doSubmit() }" type="text" class="inputText" lefticon s-validator-rules="required" s-validator-onsucceed="this.removeAttribute('error');" s-validator-onfail="this.setAttribute('error','');" />
                <input id="passwordInput" name="password" onkeydown="if (event.keyCode == 13) { doSubmit() }" type="password" class="inputText" lefticon s-validator-rules="required" s-validator-onsucceed="this.removeAttribute('error');" s-validator-onfail="this.setAttribute('error','');" />
                <a id="loginSubmit" href="javascript:" onclick="doSubmit()" class="inputButton" centericon></a>
            </form>
        </div>
    </body>
</html>
