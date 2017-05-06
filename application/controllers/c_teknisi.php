<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_teknisi extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_teknisi');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_teknisi->getall();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
    $this->load->view('admin/tim_teknisi/view_input', $data);
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_teknisi->tambah();
        redirect('c_teknisi');
        }
	 $this->load->view('admin/header');
	 $this->load->view('admin/sidebar');
	 $this->load->view('admin/tim_teknisi/input');
		
    }
	
	function updatedata($id) {
        if($this->input->post('submit')){
            $this->m_teknisi->update($id);
        redirect('c_teknisi');
    }
    $data['hasil'] = $this->m_teknisi->getById($id);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/tim_teknisi/edit_input', $data);
 
    }
	
	function deletedata($id){
	$this->m_teknisi->hapus($id);
	$this->index();
  	} 
}