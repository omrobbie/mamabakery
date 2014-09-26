<?php
class mTeras extends CI_Model {
	private $table;

	function __construct() {
		parent::__construct();
		$this->table='galeri';
	}

	function getDataGaleri() {
		return $this->db->get($this->table, 3);
	}
}