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
    <title>平台主页</title>
    <base href="<?php echo base_url() ;?>"/>
    <link rel="stylesheet" type="text/css" href="Content/ConsoleResource/css/component_input.css">
    <link rel="stylesheet" type="text/css" href="Content/ConsoleResource/css/component_tree.css">
    <link rel="stylesheet" type="text/css" href="Content/ConsoleResource/css/component_dynTab.css">
    <link rel="stylesheet" type="text/css" href="Content/ConsoleResource/css/main.css">
    <script src="Content/ConsoleResource/js/component_tree.js"></script>
    <script src="Content/ConsoleResource/js/main.js"></script>
</head>

<body>

    <div id="leftWrapper">
        <div id="menuArea">
            <div id="menuTreeWrapper" class="treeWrapper">
                <!--在此处编辑菜单栏-->
                <div class="treePack">数据</div>
                <span class="treePackContent">
                    <a class="treeItem" link="admin/demo/index">数据一</a>
                    <a class="treeItem" link="console/itemedit/2">数据二</a>
                    <a class="treeItem" link="console/itemedit/3">数据三</a>
                    <a class="treeItem" link="console/itemedit/4">数据四</a>
                    <a class="treeItem" link="console/itemedit/5">数据五</a>
                </span>  
                <div class="treePack">密码管理</div>
                <span class="treePackContent">
                    <a class="treeItem" link="admin/console/changepassword">修改密码</a>

                </span>  
            </div>
        </div>
    </div>

    <div id="rightWrapper">
        <div id="tabArea">
            <div id="tabInnerArea" class="dynTabWrapper"></div>
        </div>
        <div id="contentArea">
            <!--
            <iframe class="contentIframe" />
            -->
        </div>
    </div>

</body>
</html>
