<?php
class mResep extends CI_Model {
	private $table;
	private $table2;

	function __construct() {
		parent::__construct();
		$this->table='resep';
		$this->table2='komentar';
	}

	function getDataResep() {
		return $this->db->get($this->table);
	}

	function getDataKomentar() {
		$this->db->select('*');
		$this->db->from($this->table2);
		// $this->db->where('idResep', $idResep);
		return $this->db->get();
	}
}