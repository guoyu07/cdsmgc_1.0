<?php
class Buliding_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		
	}
	
	function buliding_list($table='location')
	{
		$query=$this->db->get($table);
		return $query->result_array();
	}
	
	function add($table='location')
	{
		$data=array(
			'parent_id' => $this->input->post('parent_id'),
			'level' => $this->input->post('level'),
			'name' => $this->input->post('name')
		);
		return $this->db->insert($table,$data);
	}
	
	function del($id,$table='location')
	{
		$this->db->where('id',$id);
		return $this->db->delete($table);
	}
}

/* End of file buliding_model.php */
/* Location: ./application/models/buliding_model.php */