<?php
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

 $config = array(
                 'demo_create' => array(
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'trim|required|min_length[5]|max_length[12]'
                                         ),
                                    array(
                                            'field' => 'summary',
                                            'label' => 'Summary',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'pic',
                                            'label' => '图片',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'category[]',
                                            'label' => 'Category',
                                            'rules' => 'trim|required'
                                         ),
                                    array(
                                            'field' => 'type',
                                            'label' => 'Type',
                                            'rules' => 'trim|required'
                                         )
                                    ),
                 'email' => array(
                                    array(
                                            'field' => 'emailaddress',
                                            'label' => 'EmailAddress',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required|alpha'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'message',
                                            'label' => 'MessageBody',
                                            'rules' => 'required'
                                         )
                                    )                          
               );



// 规则					参数	描述																								举例
// required 			No		如果元素为空，则返回FALSE	 
// matches				Yes		如果表单元素的值与参数中对应的表单字段的值不相等，则返回FALSE	matches[form_item]
// is_unique			Yes		如果表单元素的值与指定数据表栏位有重复，则返回False（译者注：比如is_unique[User.Email]，那么验证类会去查找User表中Email栏位有没有与表单元素一样的值，如存重复，则返回false，这样开发者就不必另写Callback验证代码。）
// min_length			Yes		如果表单元素值的字符长度少于参数中定义的数字，则返回FALSE											min_length[6]
// max_length			Yes		如果表单元素值的字符长度大于参数中定义的数字，则返回FALSE											max_length[12]
// exact_length			Yes		如果表单元素值的字符长度与参数中定义的数字不符，则返回FALSE											exact_length[8]
// greater_than			Yes		如果表单元素值是非数字类型，或小于参数定义的值，则返回FALSE											greater_than[8]
// less_than			Yes		如果表单元素值是非数字类型，或大于参数定义的值，则返回FALSE											less_than[8]
// alpha				No		如果表单元素值中包含除字母以外的其他字符，则返回FALSE	 
// alpha_numeric		No		如果表单元素值中包含除字母和数字以外的其他字符，则返回FALSE	 
// alpha_dash			No		如果表单元素值中包含除字母/数字/下划线/破折号以外的其他字符，则返回FALSE	 
// numeric				No		如果表单元素值中包含除数字以外的字符，则返回 FALSE	 
// integer				No		如果表单元素中包含除整数以外的字符，则返回FALSE	 
// decimal				No		如果表单元素中包含非十进制数字时，则返回FALSE	 
// is_natural			No		如果表单元素值中包含了非自然数的其他数值 （其他数值不包括零），则返回FALSE。自然数形如：0,1,2,3....等等。	 
// is_natural_no_zero	No		如果表单元素值包含了非自然数的其他数值 （其他数值包括零），则返回FALSE。非零的自然数：1,2,3.....等等。	 
// valid_email			No		如果表单元素值包含不合法的email地址，则返回FALSE	 
// valid_emails			No		如果表单元素值中任何一个值包含不合法的email地址（地址之间用英文逗号分割），则返回FALSE。	 
// valid_ip				No		如果表单元素的值不是一个合法的IP地址，则返回FALSE。通过可选参数"IPv4"或"IPv6"来指定 IP 地址格式。	 
// valid_base64			No		如果表单元素的值包含除了base64 编码字符之外的其他字符，则返回FALSE。	 