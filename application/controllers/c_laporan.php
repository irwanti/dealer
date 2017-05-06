<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_laporan extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_laporan');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_laporan->getall();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
 	$this->load->view('admin/laporan/pendapatan_servis');
    }
     
    function lihat() {
  		if($query = $this->m_laporan->get()) {
  			$data['hasil'] = $query;
  		}
  	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
  	$this->load->view('admin/laporan/pendapatan_servis',$data);

  	}

  	function lihat2() {
  		if($query = $this->m_laporan->get2()) {
  			$data['hasil'] = $query;
  		}
  	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
  	$this->load->view('admin/laporan/pengingat_servis',$data);

  	}

  	function lihat3() {
  		if($query = $this->m_laporan->get3()) {
  			$data['hasil'] = $query;
  		}
  	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
  	$this->load->view('admin/laporan/data_servis',$data);

  	}

  	function lihat4() {
  		if($query = $this->m_laporan->get4()) {
  			$data['hasil'] = $query;
  		}
  	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
  	$this->load->view('admin/laporan/jml_sparepart',$data);

  	}

  	function lihat5() {
  		if($query = $this->m_laporan->get5()) {
  			$data['hasil'] = $query;
  		}
  	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
  	$this->load->view('admin/laporan/daftar_pemesan',$data);

  	}
}