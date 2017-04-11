<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	function get_navbar() {
		$this->db->select('mainCategory');
		$this->db->distinct('mainCategory');
		return $this->db->get('sample')->result();
	}

	function getCategoryList($value='') {
		$query = $this->db->where('category', str_replace('-', ' ', $value))->get('sample');
		return $query->result();
	}

	public function item($value='')
	{
		$query = $this->db->where('id', $value)->get('sample');
		if($query->num_rows() > 0) {
			return $query->row();
		}
	}

}

/* End of file main_model.php */
/* Location: ./application/models/main_model.php */