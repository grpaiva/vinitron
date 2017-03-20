<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Base_model extends CI_Model {
	private $table = "words";
	public function __construct(){
		parent::__construct();
	}

	public function getList(){
		$this->db->select('*');
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function addToList($array){
		if($this->db->insert($this->table, $array)){
			return true;
		}else{
			return false;
		}
	}
}