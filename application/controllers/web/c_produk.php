<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_produk extends CI_Controller 
{
	public function index()
	{
		$this->load->view('web/atas');
		$this->load->view('web/produk');
		$this->load->view('web/footer');

	}
}