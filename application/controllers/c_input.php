<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_input extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_input');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_input->getall();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
    $this->load->view('admin/sparepart/view_input', $data);
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_input->tambah();
        redirect('c_input');
        }
	 $data['spare'] = $this->m_input->getall2();
     $this->load->view('admin/header');
	 $this->load->view('admin/sidebar');
	 $this->load->view('admin/sparepart/input', $data);
		
    }
	
	function updatedata($id) {
        if($this->input->post('submit')){
            $this->m_input->update($id);
        redirect('c_input');
    }
    $data['hasil'] = $this->m_input->getById($id);
	$data['spare'] = $this->m_input->getall2();
    $this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/sparepart/edit_input', $data);
 
    }
	
	function deletedata($id){
	$this->m_input->hapus($id);
	$this->index();
  	} 
}