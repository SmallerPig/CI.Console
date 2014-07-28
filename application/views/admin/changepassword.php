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
 <?php echo validation_errors(); ?>


<form id="form1" method="POST">
    <div class="contentItemGroup"> 
        <div class="contentItem">
            <div class="contentItemTitle">原密码</div>
            <input type="password" class="inputText"  name="oldpassword"  s-validator-rules="charNumber_:>=5,<12" s-validator-onsucceed="this.removeAttribute('error');" s-validator-onfail="this.setAttribute('error','');" value="<?php echo set_value('oldpassword'); ?>" />
        </div>
        <div class="tipItem">
            请验证您的原始密码:5-12位字母、数字、下划线。
        </div>        
        <div class="contentItem">
            <div class="contentItemTitle">新密码</div>
            <input type="password" class="inputText"  name="newpassword"  s-validator-rules="charNumber_:>=5,<12" s-validator-onsucceed="this.removeAttribute('error');" s-validator-onfail="this.setAttribute('error','');" value="<?php echo set_value('newpassword'); ?>" />
        </div>
        <div class="tipItem">
            请输入您的新密码:5-12位字母、数字、下划线
        </div>           
        <div class="contentItem">
            <div class="contentItemTitle">确认密码</div>
            <input type="password" class="inputText"  name="validpassword" s-validator-rules="charNumber_:>=5,<12" s-validator-onsucceed="this.removeAttribute('error');" s-validator-onfail="this.setAttribute('error','');" value="<?php echo set_value('validpassword'); ?>" />
        </div>
        <div class="tipItem">
            验证您的新密码:5-12位字母、数字、下划线
        </div>  
    </div>

</form>
    <div class="contentItemGroup">
        <div class="contentItem" onlycontent>
            <!--部分内容由于每个项目涉及都不一样，这部分样式没有模板化，以后项目的时候也是直接写在html标签style样式里就行，比较方便修改-->
            <a href="admin/demo/index" onclick="return confirm('你确定要离开编辑页面吗')" class="inputButton" lefticon style="background-image:url(Content/ConsoleResource/media/icon_return.png)">返回</a>
            <a href="javascript:" onclick="dosubmit();" class="inputButton" lefticon style="background-image:url(Content/ConsoleResource/media/icon_disk.png);float:right">提交</a>
        </div>

    </div>
<script type="text/javascript">
    function dosubmit(){

        document.getElementById("form1").submit();
    }
</script>


<?php  $this->load->view('admin/footer'); ?>