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
		 	echo "nologin";
		 	exit();
 		}

		header("content=text/html; charset=utf-8");
			foreach ($_FILES as $key => $value) {
			$uf = $value;
			if(!$uf){
				echo "nofiletoupload";
			    exit();
			}
			$upload_file_temp = $uf['tmp_name'];  
			$upload_file_name = $uf['name'];  
			   
			if(!$upload_file_temp){
			  echo "uncatcherror";//未知错误
			  exit();
			}
			$file_size_max = 1024*1024;// 1M限制文件上传最大容量(bytes)  
			// 检查文件大小  
			if ($uf['size'] > $file_size_max) {  
			  echo "toolarge";  
			  exit();  
			}  
			$store_dir = "upload/";// 上传文件的储存位置  
			//if(!is_dir($store_dir)){不能使用这种方法，这样php拥有该文件夹的全部权限，再次请求的时候不能正常上传而是直接把文件夹文件列出来
			//	mkdir($store_dir,0777);
			//} //检查目录是否存在并创建

			//$accept_overwrite = 0;//是否允许覆盖相同文件  
			$file_path = $store_dir . $upload_file_name; 
			// 检查读写文件  
			// if (file_exists($file_path) && !$accept_overwrite) {  
			//   echo "存在相同文件名的文件";  
			//   exit();  
			// }  
			 
			//复制文件到指定目录  
			$file_name = $this->new_file_name($file_path,$store_dir);
			if (!move_uploaded_file($upload_file_temp,$file_name )) {  
			  echo "复制文件失败".$upload_file_temp." to ". $file_path;  
			  exit;  
			}			 
			Echo $file_name.'||';  //使用explode('||',string)方法进行分割成数组
		}



	   

 	}



 	private function get_extension($file)
	{
		return pathinfo($file, PATHINFO_EXTENSION);
	}

 	private function new_file_name($filename,$store_dir){
 		$extent = $this->get_extension($filename);
 		return $store_dir.rand(100,999).time().'.'.$extent;
 	}


}