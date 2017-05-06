<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_kontak extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_kontak');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_kontak->getall();
	$this->load->view('web/atas');
	$this->load->view('web/kontak');	
    $this->load->view('web/footer');
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_kontak->tambah();
        redirect('web/c_kontak');
        }
	$this->load->view('web/atas');
	$this->load->view('web/kontak');	
    $this->load->view('web/footer');
	}
	
}