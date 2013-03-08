<?php
class Search_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}
/*	
	function search_action($table='advertiser')
	{
	 	$type=$this->input->get('main_search_type');
	 	$keywords=$this->input->get('main_search_value');
		if($type=='2')
		{
			$this->db->like('name',$keywords,'both');
			$query=$this->db->get($table);
		//	$sql="SELECT * FROM ".$table." WHERE `name` like '%".$keywords."%'";
		//	$query=$this->db->query($sql);
		}
		else if($type=='1')
		{
			$this->db->like('business',$keywords,'both');
			$query=$this->db->get($table);
		//	$sql='SELECT * FROM '.$table.' WHERE `business` like "%'.$keywords.'%"';
		//	$query=$this->db->query($sql);
		}
		else if($type=='0')
		{
			$this->db->like('name',$keywords,'both');
			$this->db->or_like('business',$keywords,'both');
			$query=$this->db->get($table);
		//	$sql="SELECT * FROM ".$table." WHERE `business` like '%".$keywords."%' or `name` like '%".$keywords."%'";
		//	$query=$this->db->query($sql);
		}
		else
		{
			$query='no';	
		}
		
		return $query;
	}
*/
	function count_search($key_words='') {
		$keywords=urldecode($key_words);
		$this->db->like('name',$keywords,'both');
		$this->db->or_like('business',$keywords,'both');
		$query=$this->db->get('advertiser');
		return $query->num_rows();
	}
	
	function search_action($key_words='',$limit='',$offset='')
	{		
			$keywords=urldecode($key_words);
			if($offset=='')
			{
				$sql='SELECT * FROM `advertiser` WHERE `name` LIKE "%'.$keywords.'%" or `business` LIKE "%'.$keywords.'%" LIMIT '.$limit;
			}else 
			{
				$sql='SELECT * FROM `advertiser` WHERE `name` LIKE "%'.$keywords.'%" or `business` LIKE "%'.$keywords.'%" LIMIT '.$offset.','.$limit;
			}
			$query=$this->db->query($sql);
			return $query;
	}

	
	
}