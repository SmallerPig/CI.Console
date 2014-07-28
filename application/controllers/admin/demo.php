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
  
  		$this->load->library(array('form_validation','pagination'));
 	}

 	function index(){
 		//$this->load->library('pagination');
 		$this->getpagination();

		$data['pageination'] = $this->pagination->create_links();

 		$this->load->view('admin/demo/list',$data);
 	}

 	function create(){
		$this->form_validation->set_error_delimiters('<p style="color:red;">', '</div>');

		$check = $this->input->post('category');
		if ($check) {
			var_dump($check); # code...
			exit();
		}


 		if ($this->form_validation->run('demo_create') == FALSE){
 	 		$this->load->view('admin/demo/create');
 		}
 		else{
 		 	echo "success";
 		}
 	}

 	private function getpagination(){
		$config['base_url'] = 'admin/demo/index/';
		$config['total_rows'] = 2000;
		$config['per_page'] = 20; 
		$config['full_tag_open'] = '<div style="font-size:12px;">'; 
		$config['full_tag_close'] = '</div>'; 
		$config['use_page_numbers'] = TRUE;
		$config['uri_segment'] = 4;
  		$config['next_link'] = '下一页';
  		$config['prev_link'] = '上一页';
		$config['first_link'] = '首页';
		$config['last_link'] = '末页';
		$this->pagination->initialize($config); 
 	}



 	function test(){
 		$this->load->library('pagination');
 		$config['base_url'] = 'http://localhost/console/admin/demo/test';
		$config['total_rows'] = 2000;
		$config['per_page'] = 20; 
		$config['uri_segment'] = 4;
		$config['use_page_numbers'] = TRUE;
  		$config['next_link'] = '上一页';
  		$config['prev_link'] = '下一页';
		$config['full_tag_open'] = '<p>';
		$config['full_tag_close'] = '</p>';
		$config['first_link'] = 'FIREST PAGE';
		$config['last_link'] = 'LAST PAGE';
		$config['last_tag_open'] = '<span>';
		$config['last_tag_close'] = '</span>';
		$this->pagination->initialize($config); 

		var_dump($this->pagination);
		echo $this->pagination->create_links();
 	}


 }