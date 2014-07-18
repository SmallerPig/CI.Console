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
 class console_model extends CI_Model{
 	function __construct(){
 		parent::__construct();
 		$this->load->database();
 	}

 	function login($username,$password)
 	{
 		$password = md5($password);
 		$sql = 'select * from admin where username = "'.$username.'" AND password = "'.$password.'"';
 		
 		$query = $this->db->query($sql);
 		if ($query->num_rows() > 0) {
 			return TRUE;
 		}
 		return FALSE;
 	}


 	function get_item($id)
 	{
 		$data = array('id'=>$id);
 		$query = $this->db->get_where('item',$data);
 		return $query->result();
 	}

 	function insertpic($data)
 	{
 		$this->db->insert('item',$data);
 	}


 	function updatepic($id,$data){
 		//$this->db->set($data)->insert('pic');//这个方法必须将$id条件也关联到关联数组
 		$this->db->where('id',$id)->update('item',$data);
 		//$this->db->update('item',$data,'id = $id');
 		//$this->db->update('item',$data,array('id'=>$id));
 	}

 	function get_extension($file)
	{
		return pathinfo($file, PATHINFO_EXTENSION);
	}

 	function new_file_name($filename){
 		$extent = $this->get_extension($filename);
 		return "upload/".rand(100,999).time().'.'.$extent;
 	}

 }
