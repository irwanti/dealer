<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_data_servis extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_data_servis');
  $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_data_servis->getall();
  	$this->load->view('admin/header');
  	$this->load->view('admin/sidebar');	
    $this->lihat();
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_data_servis->tambah();
        redirect('c_data_servis');
        }
     $data['data_s'] =$this->m_data_servis->getall2();
     $data['tim'] = $this->m_data_servis->getall3();
     $data['id_tim'] = $this->m_data_servis->getall4();
     $data['pelanggan'] = $this->m_data_servis->getall5();
     $data['kerusakan'] = $this->m_data_servis->getall6();
     $data['id_s'] = $this->m_data_servis->getall7();
  	 $this->load->view('admin/header');
  	 $this->load->view('admin/sidebar');
  	 $this->load->view('admin/data_servis/input',$data);
  		
    }
	
	function updatedata($id) {
        if($this->input->post('submit')){
            $this->m_data_servis->update($id);
        redirect('c_data_servis');
    }
    $data['hasil'] = $this->m_data_servis->getById($id);
  	$this->load->view('admin/header');
  	$this->load->view('admin/sidebar');
  	$this->load->view('admin/data_servis/edit_input', $data);
 
    }
	
	function deletedata($id){
  	$this->m_data_servis->hapus($id);
  	$this->index();
  	} 

  	function lihat() {
  		if($query = $this->m_data_servis->get()) {
  			$data['hasil'] = $query;
  		}
  	$this->load->view('admin/data_servis/view_input',$data);
  	}
}