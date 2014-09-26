<?php
class mGaleri extends CI_Model {
	private $table;

	function __construct() {
		parent::__construct();
		$this->table='galeri';
	}

	function getDataGaleri() {
		return $this->db->get($this->table);
	}

	function getDataGaleriByIdKategori($idKategori) {
		$this->db->where('idKategori', $idKategori);
		return $this->db->get($this->table);
	}

	function getDataGaleriDetil($idGaleri) {
		$this->db->where('idGaleri', $idGaleri);
		return $this->db->get($this->table);
	}
}