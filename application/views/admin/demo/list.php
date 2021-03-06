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
 $this->load->view('admin/header');
 ?>


<div class="contentItemGroup">
    <div class="contentItem" onlycontent>
        <!--部分内容由于每个项目涉及都不一样，这部分样式没有模板化，以后项目的时候也是直接写在html标签style样式里就行，比较方便修改-->
        <a href="admin/demo/Create" class="inputButton" lefticon style="background-image:url(Content/ConsoleResource/media/icon_plus.png);float:left;">添加新条目</a>
        <input type="text" class="inputText" style="float:left; margin-left:32px;" />
        <a class="inputButton" lefticon style="background-image:url(Content/ConsoleResource/media/icon_magnifier.png);float:left;margin-left:8px;">搜索</a>
    </div>
    <div class="contentItem" onlycontent>
        <table class="tableList">
            <thead>
                <tr>
                    <!--在thead里的td内标注宽度，对于未标注宽度的条目，则自动分配剩余宽度-->
                    <td width="48">id</td>
                    <td width="96">时间</td>
                    <td>标题</td>
                    <td width="40">编辑</td>
                    <td width="40">删除</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2012-12-12</td>
                    <td leftalign>阿达撒打算打算的</td>
                    <td><a href="XXXXXXx" class="tableListItemEditIcon"></a></td>
                    <td><a href="XXXXXXx" class="tableListItemDeleteIcon"></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2012-12-12</td>
                    <td leftalign>阿达撒打算打算的</td>
                    <td><a href="XXXXXXx" class="tableListItemEditIcon"></a></td>
                    <td><a href="XXXXXXx" class="tableListItemDeleteIcon"></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2012-12-12</td>
                    <td leftalign>阿达撒打算打算的</td>
                    <td><a href="XXXXXXx" class="tableListItemEditIcon"></a></td>
                    <td><a href="XXXXXXx" class="tableListItemDeleteIcon"></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2012-12-12</td>
                    <td leftalign>阿达撒打算打算的</td>
                    <td><a href="XXXXXXx" class="tableListItemEditIcon"></a></td>
                    <td><a href="XXXXXXx" class="tableListItemDeleteIcon"></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2012-12-12</td>
                    <td leftalign>阿达撒打算打算的</td>
                    <td><a href="XXXXXXx" class="tableListItemEditIcon"></a></td>
                    <td><a href="XXXXXXx" class="tableListItemDeleteIcon"></a></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2012-12-12</td>
                    <td leftalign>阿达撒打算打算的</td>
                    <td><a href="XXXXXXx" class="tableListItemEditIcon"></a></td>
                    <td><a href="XXXXXXx" class="tableListItemDeleteIcon"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="contentItem" onlycontent>
        <!--部分内容由于每个项目涉及都不一样，这部分样式没有模板化，以后项目的时候也是直接写在html标签style样式里就行，比较方便修改-->
        <?php echo $pageination; ?>


<!--         <a class="inputButton" href="@ViewData["perPage"]">上一页</a>
        <input type="text" class="inputText" style="margin-left:16px;width:48px;text-align:right;" value="1" />
        <span class="contentItemInfoWrapper"> / 211</span>
        <a class="inputButton" href="@ViewData["nextPage"]" style="margin-left:16px;">下一页</a> -->
        <p style="font-size:12px">加载该页面总计耗时: {elapsed_time} 秒</p>
        <p style="font-size:12px"><?php var_dump($this->config); ?></p>
    </div>
</div>

<?php  $this->load->view('admin/footer'); ?>