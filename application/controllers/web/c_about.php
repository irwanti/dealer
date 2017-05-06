<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_about extends CI_Controller 
{
	public function index()
	{
		$this->load->view('web/atas');
		$this->load->view('web/tentang');
		$this->load->view('web/footer');
	}
}