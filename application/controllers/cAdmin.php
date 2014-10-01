<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CAdmin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('mDashboard');
		$this->load->model('mGaleri');
	}

	function index() {
		$this->galeriTampil();
	}

	function galeriTampil() {
		$data['dashboard']=$this->mDashboard->getDataDashboard();
		$data['galeri']=$this->mGaleri->getDataGaleri();
		$data['page']='vDataGaleri';
		$this->load->view('vAdmin', $data);
	}

	function galeriTambah() {
		$data['dashboard']=$this->mDashboard->getDataDashboard();
		$data['page']='vDataGaleriDetil';
		$this->load->view('vAdmin', $data);
	}
}