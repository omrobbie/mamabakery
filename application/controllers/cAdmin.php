<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CAdmin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('mDashboard');
	}

	function index() {
		$data['dashboard']=$this->mDashboard->getDataDashboard();
		$data['page']='vLogin';
		$this->load->view('vAdmin', $data);
	}
}