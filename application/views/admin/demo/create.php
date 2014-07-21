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



<form id="form1" method="POST">



    <div class="contentItemGroup">
        <div class="contentItem">
            <div class="contentItemTitle">标题较短内容简单的使用此格式</div>
            <input type="text" class="inputText" />
        </div>
        <div class="tipItem">
            提示文字信息，可有可无，如果不需要，不写此标签就行。提示内容会根据上一个表单条目的格式自动调整左边距。
        </div>
        <div class="contentItem" complexcontent>
            <div class="contentItemTitle">标题较长、内容复杂的使用此格式</div>
            <textarea class="inputText"></textarea>
        </div>
        <div class="tipItem">
            任意内容都可以指定是否使用complexContent属性使得标题和表单内容分到两行进行呈现。
        </div>
        <div class="contentItem">
            <div class="contentItemTitle">上传控件</div>
            <div id="big_pic_container" style="position:relative; width:200px; height: 32px;">
            <input type="hidden" id="pic"  name = "pic" />
            <script type="text/javascript">
                aa = simple.uploader.create({
                appendTo:document.getElementById("big_pic_container"),
                url: "upload/image",
                valueBindTo:document.getElementById("pic"),
                limit:{
                    fileFormat:"jpg|png"
                },
                uiText:{
                    selectFile:"选择文件！！！",
                    limit:"没选对文件XXX"
                },
                onEvent:{
                    onSelectFile:function(files,limitValidateResult){
                            a_onSelectFile_a=files;
                            a_onSelectFile_b=limitValidateResult;
                        },
                    onProgress:function(e){
                            a_onProgress_a=e.loaded;
                        },
                    onError:function(e){
                            a_onError_a=e;
                            alert(e);
                        },
                    onCancelWhenUpload:function(){
                            a_onCancelWhenUpload_a=111;
                        },
                    onCancelWhenComplete:function(){
                            a_onCancelWhenComplete_a=111;
                        },
                    onComplete:function(files,returnResult){
                            a_onComplete_a=files;
                            a_onComplete_b=returnResult;
                        }
                }
                });
        
                aa.setData({
                        multiple:true,
                        limit:{
                            fileSizeMin:1,
                            fileSizeMax:100000000
                        }
                    });
                    
                ab = aa.getData();
            </script>
        </div>

        </div>



    </div>

    <div class="contentItemGroup">
        <div class="contentItem">
            <div class="contentItemTitle">单选radio</div>
            <div class="selectWrapper">
                <label class="selectItem">
                    <input type="radio" name="asd" class="selectItemInput" checked />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent">
                        文字文字文字文字文字
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="asd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent">
                        文字文字文字文字文字
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="asd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent">
                        文字文字文字文字文字
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="asd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent">
                        文字文字文字文字文字
                    </div>
                </label>
            </div>
        </div>
        <div class="contentItem">
            <div class="contentItemTitle">多选checkbox</div>
            <div class="selectWrapper">
                <label class="selectItem">
                    <input type="checkbox" name="dddd" class="selectItemInput" value="" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent">
                        文字文字文字文字文字
                    </div>
                </label>
                <label class="selectItem">
                    <input type="checkbox" name="dddd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent">
                        文字文字文字文字文字
                    </div>
                </label>
            </div>
        </div>
        <div class="contentItem">
            <div class="contentItemTitle">带有图片的多选</div>
            <div class="selectWrapper">
                <label class="selectItem">
                    <input type="checkbox" name="asdasd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/1.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="checkbox" name="asdasd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/2.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="checkbox" name="asdasd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/3.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="checkbox" name="asdasd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/4.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="checkbox" name="asdasd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/5.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="checkbox" name="asdasd" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/6.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>

            </div>
        </div>
        <div class="contentItem">
            <div class="contentItemTitle">带有图片的单选</div>
            <div class="selectWrapper">
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" checked />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/7.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/8.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/9.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/10.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/11.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/12.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/13.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>
                <label class="selectItem">
                    <input type="radio" name="najksdnas" class="selectItemInput" />
                    <span class="selectItemInputMarker"></span>
                    <div class="selectItemContent" hasimage>
                        <div class="imageContainer" style="background-image:url(Content/media/14.jpg)"></div>
                        <span>文字文字文字文字文字</span>
                    </div>
                </label>

            </div>
        </div>
        <div class="tipItem">
            上面这些格式的内容也可以使用complexContent属性将标题和内容分到两行呈现，不赘述。
        </div>
    </div>
</form>
    <div class="contentItemGroup">
        <div class="contentItem" onlycontent>
            <!--部分内容由于每个项目涉及都不一样，这部分样式没有模板化，以后项目的时候也是直接写在html标签style样式里就行，比较方便修改-->
            <a href="contentSample.html" onclick="return confirm('你确定要离开编辑页面吗')" class="inputButton" lefticon style="background-image:url(Content/ConsoleResource/media/icon_return.png)">返回</a>
            <a href="javascript:" class="inputButton" lefticon style="background-image:url(Content/ConsoleResource/media/icon_disk.png);float:right">提交</a>
        </div>
        <div class="tipItem">
            使用onlyContent属性创建仅有表单内容而没有标题的内容
        </div>
    </div>



<?php  $this->load->view('admin/footer'); ?>