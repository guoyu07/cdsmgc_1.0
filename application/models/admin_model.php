<?php
class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function login_check()
	{
		$this->db->where('username',$this->input->post('username'));
		$this->db->where('password',$this->input->post('password'));
		$q=$this->db->get('admin');
		if ($q->num_rows()>0) 
		{
			return $q->row();
		}
	}
	
	function add_friendlink($table='friendlink') {
		$data=array(
			'name' => $this->input->post('link_name'),
			'show_order' => $this->input->post('show_order'),
			'website' => $this->input->post('link_url')
		);
		return $this->db->insert($table,$data);
	}
	
	function list_friendlink($table='friendlink') {
		$query=$this->db->get($table);
		return $query;
	}
	
	function del_friendlink($id='0',$table='friendlink')
	{
		$this->db->where('id',$id);
		return $this->db->delete($table);
	}
	
	function edit_friendlink($id='0',$table='friendlink')
	{
		$data=array(
			'name' => $this->input->post('link_name'),
			'website' => $this->input->post('link_url'),
			'show_order' => $this->input->post('show_order')
		);
		$this->db->where('id',$id);
		return $this->db->update($table,$data);
	}
	
	function get_link($id='0',$table='friendlink')
	{
		$this->db->where('id',$id);
		return $this->db->get($table);
	}
	
	function get_buliding($id='0',$table='location') {
		$this->db->where('id',$id);
		return $this->db->get($table);
	}
	
	function edit_buliding($table='location') {
		$data=array(
			'name' => $this->input->post('name')
		);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update($table,$data);
	}
}


/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */