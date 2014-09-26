<?php
class mTentang extends CI_Model {
	private $table;

	function __construct() {
		parent::__construct();
		$this->table='tentang';
	}

	function getDataTentang() {
		return $this->db->get($this->table);
	}
}