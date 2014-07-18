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

class Console extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('console_model');
	}

function login()
 	{
 		if ($this->session->userdata('admin')=="admin") {
 			$this->load->view('admin/main');
 			return;
 		}
 		$username = $this->input->post('username',TRUE);
 		$password = $this->input->post('password',TRUE);
 		//echo $username .'----'. $password;
 		if($username && $password){
 			if ($this->console_model->login($username,$password)) {
		 		
 				$this->session->set_userdata('admin','admin');
 				//var_dump($this->session);
				$this->output->set_content_type('application/json')->set_output(json_encode('Success'));
				// echo "Success";
			}else{
				$this->output->set_content_type('application/json')->set_output(json_encode('Error'));
				// echo "Error";
			} 			

 		}else{
			$this->load->view('admin/login');
 		}
 	}



 	function main()
 	{

 		if ($this->session->userdata('admin')!="admin") {
 			$this->load->view('admin/login');
 			return ;
 		}
 		$this->load->view('admin/main');
 	}

}

 