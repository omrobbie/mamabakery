<?php
class mDashboard extends CI_Model {
	private $table;

	function __construct() {
		parent::__construct();
		$this->table='dashboard';
	}

	function getDataDashBoard() {
		return $this->db->get($this->table);
	}
}