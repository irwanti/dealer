<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_pesan extends CI_Controller {

	function __construct() {
		parent::__construct();
	$this->load->model('m_pesan');
    $this->load->helper(array('url','form'));
	}

	function index() {
    $data['hasil'] = $this->m_pesan->getall();
	$this->load->view('web/atas');
	$this->load->view('web/pesan');	
    $this->load->view('web/footer');
    }
     
    function tambahdata() {
        if($this->input->post('submit')){
    $this->m_pesan->tambah();
        redirect('web/c_pesan');
        }
	//$data['pesan']->$this->m_pesan->getall2();
	$this->load->view('web/atas');
	$this->load->view('web/pesan');	
    $this->load->view('web/footer');
	}
	
	
}