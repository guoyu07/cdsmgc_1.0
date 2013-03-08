<?php
class Information_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
	
	function add_information($table='') {
		$data=array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'date' => time()
		);
		if($this->db->insert($table,$data))
		{
			return TRUE;
		}else 
		{
			return FALSE;
		}
	}
	
	function count_intelligence($table='intelligence') {
		$query=$this->db->get($table);
		return $query->num_rows();
	}
	function count_news($table='news') {
		$query=$this->db->get($table);
		return $query->num_rows();
	}
	
	function show_limit_intelligence($limit,$offset,$table='intelligence') 
	{ 
		if(! $limit)
		{
			$query=$this->db->get($table);
		} 
		else 
		{	
			$this->db->order_by("id", "desc"); 
			$this->db->limit($limit,$offset);
			$query=$this->db->get($table);
		}
		return $query;
	}
	function show_limit_news($limit,$offset,$table='news') 
	{ 
		if(! $limit)
		{
			$query=$this->db->get($table);
		} 
		else 
		{	
			$this->db->order_by("id", "desc"); 
			$this->db->limit($limit,$offset);
			$query=$this->db->get($table);
		}
		return $query;
	}
	
	function update_statue($table='',$id='') {
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		$row = $query->row_array(); 
   		if('1'==$row['statue'])
   		{
   			$data['statue']='0';
   		}else 
   		{
   			$data['statue']='1';
   		}
   		$this->db->where('id',$id);
   		if($this->db->update($table,$data))
   		{
   			return TRUE;
   		}else 
   		{
   			return FALSE;
   		}
	}
	
	function del_information($table='',$id='')
	{
		$this->db->where('id',$id);
		if($this->db->delete($table))
		{
			return TRUE;
		}else 
		{
			return FALSE;
		}
	}
	function update_information($table='',$id='') {
		$data=array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'update_time' => time()
		);
		$this->db->where('id',$id);
   		if($this->db->update($table,$data))
   		{
   			return TRUE;
   		}else 
   		{
   			return FALSE;
   		}
	}
	function get_information($table='',$id='') {
		if($table != '' || $id != '')
		{
			$this->db->where('id',$id);
			$query=$this->db->get($table);
			if($query)
			{
				return $query;
			}else 
			{
				return FALSE;
			}
		}else 
		{
			return FALSE;
		}
	}
	function get_all_information($table='') {
		$this->db->order_by("date", "desc"); 
		return $this->db->get($table);
	}
	
	function msubstr($str, $start, $len) { 
    $tmpstr = ""; 
    $strlen = $start + $len; 
    for($i = 0; $i < $strlen; $i++){ 
        if(ord(substr($str, $i, 1)) > 127){ 
            $tmpstr.=substr($str, $i, 3); 
            $i+=2; 
        }else 
            $tmpstr.= substr($str, $i, 1); 
    } 
    return $tmpstr; 
	} 
	
	function get_date_information($table='',$year='',$month='')
	{
		$query=$this->get_all_information($table);
		$i=0;
		foreach ($query->result_array() as $row)
		{
			if($year==gmdate('Y',$row['date']))
				if ($month==gmdate('m',$row['date']))
				{
					$information[$i]['title']=$row['title'];
					$information[$i]['id']=$row['id'];
					$information[$i]['content']=$row['content'];
					$information[$i]['time']=$row['date'];
					$i++;
				}
		}
		return $information;
	}

}