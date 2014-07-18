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
 class Console_Controller extends CI_Controller{
 	function __construct(){
 		parent::__construct();
 		if ($this->session->userdata('admin')!="admin") {
 			redirect('admin/console/login?ref='.urlencode($this->uri->uri_string()));
 		}
 	}


 }


