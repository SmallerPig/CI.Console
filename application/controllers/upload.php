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

class Upload extends CI_Controller{
	function __construct(){
		parent::__construct();
	}


 	function image(){

 		if ($this->session->userdata('admin')!="admin") {
		 	show_404();
 		}

		header("content=text/html; charset=utf-8");
			foreach ($_FILES as $key => $value) {
			$uf = $value;
			if(!$uf){
				echo "no fileToUpload index";
			    exit();
			}
			$upload_file_temp = $uf['tmp_name'];  
			$upload_file_name = $uf['name'];  
			   
			if(!$upload_file_temp){
			echo "上传失败";
			  exit();
			}
			$file_size_max = 1024*1024;// 1M限制文件上传最大容量(bytes)  
			// 检查文件大小  
			if ($uf['size'] > $file_size_max) {  
			  echo "对不起，你的文件容量超出允许范围：".$file_size_max;  
			  exit();  
			}  
			$store_dir = "./upload/";// 上传文件的储存位置  
			$accept_overwrite = 0;//是否允许覆盖相同文件  
			$file_path = $store_dir . $upload_file_name; 
			// 检查读写文件  
			// if (file_exists($file_path) && !$accept_overwrite) {  
			//   echo "存在相同文件名的文件";  
			//   exit();  
			// }  
			 
			//复制文件到指定目录  
			$file_name = $this->new_file_name($file_path);
			if (!move_uploaded_file($upload_file_temp,$file_name )) {  
			  echo "复制文件失败".$upload_file_temp." to ". $file_path;  
			  exit;  
			}  
			 
			Echo $file_name;  
		}



	   

 	}



 	private function get_extension($file)
	{
		return pathinfo($file, PATHINFO_EXTENSION);
	}

 	private function new_file_name($filename){
 		$extent = $this->get_extension($filename);
 		return "upload/".rand(100,999).time().'.'.$extent;
 	}


}