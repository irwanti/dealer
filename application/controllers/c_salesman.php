<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_salesman extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_salesman');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_salesman->getall();
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');	
    $this->load->view('admin/salesman/view_input', $data);
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_salesman->tambah();
        redirect('c_salesman');
        }
	 $this->load->view('admin/header');
	 $this->load->view('admin/sidebar');
	 $this->load->view('admin/salesman/input');
		
    }
	
	function updatedata($id) {
        if($this->input->post('submit')){
            $this->m_salesman->update($id);
        redirect('c_salesman');
    }
    $data['hasil'] = $this->m_salesman->getById($id);
	$this->load->view('admin/header');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/salesman/edit_input', $data);
 
    }
	
	function deletedata($id){
	$this->m_salesman->hapus($id);
	$this->index();
  	} 
}