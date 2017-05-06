<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_pelanggan extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_pelanggan');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_pelanggan->getall();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
    $this->load->view('admin/pelanggan/view_input', $data);
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_pelanggan->tambah();
        redirect('c_pelanggan');
        }
     $data['pelanggan'] =$this->m_pelanggan->getall2();
	 $this->load->view('admin/header');
	 $this->load->view('admin/sidebar');
	 $this->load->view('admin/pelanggan/input', $data);
		
    }
	
	function updatedata($id) {
        if($this->input->post('submit')){
            $this->m_pelanggan->update($id);
        redirect('c_pelanggan');
    }
    $data['hasil'] = $this->m_pelanggan->getById($id);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/pelanggan/edit_input', $data);
 
    }
	
	function deletedata($id){
	$this->m_pelanggan->hapus($id);
	$this->index();
  	} 
}