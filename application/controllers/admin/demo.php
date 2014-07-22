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
 class demo extends Console_Controller{
 	function __construct(){
 		parent::__construct();
	  	$this->load->helper(array('form', 'url'));
  
  		$this->load->library('form_validation');
 	}

 	function index(){
 		$this->load->view('admin/demo/list');
 	}

 	function create(){
		$this->form_validation->set_error_delimiters('<p style="color:red;">', '</div>');

 		if ($this->form_validation->run('demo_create') == FALSE){
 	 		$this->load->view('admin/demo/create');
 		}
 		else{
 		 	echo "success";
 		}
 	}



 }