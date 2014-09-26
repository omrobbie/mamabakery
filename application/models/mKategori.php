<?php
class mKategori extends CI_Model {
	private $table;

	function __construct() {
		parent::__construct();
		$this->table='kategori';
	}

	function getDataKategori() {
		return $this->db->get($this->table);
	}
}