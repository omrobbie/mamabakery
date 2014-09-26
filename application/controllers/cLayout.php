<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CLayout extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('mKategori');
		$this->load->model('mGaleri');
		$this->load->model('mResep');
		$this->load->model('mTentang');
		$this->load->model('mTeras');
	}

	function index() {
		$data['kategori']=$this->mKategori->getDataKategori();
		$data['galeri']=$this->mTeras->getDataGaleri();
		$data['page']='vTeras';
		$this->load->view('vLayout', $data);
	}

	function galeri() {
		$data['kategori']=$this->mKategori->getDataKategori();
		$data['galeri']=$this->mGaleri->getDataGaleri();
		$data['page']='vGaleri';
		$this->load->view('vLayout', $data);
	}

	function galeriByIdKategori($idKategori) {
		$data['kategori']=$this->mKategori->getDataKategori();
		$data['galeri']=$this->mGaleri->getDataGaleriByIdKategori($idKategori);
		$data['page']='vGaleri';
		$this->load->view('vLayout', $data);
	}

	function galeriDetil($idGaleri) {
		$data['kategori']=$this->mKategori->getDataKategori();
		$data['galeri']=$this->mGaleri->getDataGaleriDetil($idGaleri);
		$data['page']='vGaleriDetil';
		$this->load->view('vLayout', $data);
	}

	function resep() {
		$data['kategori']=$this->mKategori->getDataKategori();
		$data['resep']=$this->mResep->getDataResep();
		$data['komentar']=$this->mResep->getDataKomentar();
		$data['page']='vResep';
		$this->load->view('vLayout', $data);
	}

	function tentang() {
		$data['kategori']=$this->mKategori->getDataKategori();
		$data['tentang']=$this->mTentang->getDataTentang();
		$data['page']='vTentang';
		$this->load->view('vLayout', $data);
	}

	function keranjang() {
		$data['kategori']=$this->mKategori->getDataKategori();

		$idGaleri=$this->input->post('idGaleri');
		if($idGaleri>0) {	
			$qty=$this->input->post('qty');

			$galeriDetil=$this->mGaleri->getDataGaleriDetil($idGaleri);
			$value=$galeriDetil->row();

			$dataBelanja=array(
				'id'	=> $idGaleri,
				'qty'	=> $qty,
				'price'	=> $value->harga,
				'name'	=> $value->nama,
				'options'=> array('diskon'=>$value->diskon)
			);
			$this->cart->insert($dataBelanja);
		}

		$data['page']='vKeranjang';
		$this->load->view('vLayout', $data);
	}
}