<?php
class Welcome_model extends CI_Model{
	
	function __construct() {
		parent::__construct();
	}
	
	function show_location($table='location') {
		$query=$this->db->get($table);
		return $query;
	}
	
	function get_friendlink($table='friendlink') {
		$query=$this->db->get($table);
		return $query;
	}
}