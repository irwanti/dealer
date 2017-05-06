<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_servis extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_servis');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_servis->getall();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
    $this->lihat();
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_servis->tambah();
        redirect('c_servis');
        }
     $data['spar'] =$this->m_servis->getall2();  
	 $data['data_ser'] = $this->m_servis->getall6();
	//$data['tim'] = $this->m_servis->getall3();
	// $data['id_pelanggan'] = $this->m_servis->getall4();
	// $data['kerusakan'] = $this->m_servis->getall5();
     $this->load->view('admin/header');
	 $this->load->view('admin/sidebar');
	 $this->load->view('admin/servis/input', $data);
		
    }
	
	function updatedata($id) {
        if($this->input->post('submit')){
            $this->m_servis->update($id);
        redirect('c_servis');
    }
    $data['hasil'] = $this->m_servis->getById($id);
	$data['plat'] = $this->m_servis->getall2();
	$data['tim'] = $this->m_servis->getall3();
	$data['id_pelanggan'] = $this->m_servis->getall4();
	$data['kerusakan'] = $this->m_servis->getall5();
    $this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/servis/edit_input', $data);
 
    }
	
	function deletedata($id){
	$this->m_servis->hapus($id);
	$this->index();
  	} 

  	function lihat() {
  		if($query = $this->m_servis->get()) {
  			$data['hasil'] = $query;
  		}
  		$this->load->view('admin/servis/view_input',$data);
  	}

  	/*function lihat2() {
  		if($query = $this->m_servis->get2()) {
  			$data['hasil'] = $query;
  		}
  		$this->load->view('admin/header');
  		$this->load->view('admin/sidebar');
  		$this->load->view('admin/laporan/pendapatan_servis',$data);
  	}*/
}