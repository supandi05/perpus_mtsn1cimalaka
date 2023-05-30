<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	

	function index()
	{
		$data['buku'] = $this->m_data->get_data('buku')->result();
		$this->load->view('v_header');
		$this->load->view('index',$data);
		$this->load->view('v_footer');

	}

	function tentang()
	{
		$this->load->view('v_header');
		$this->load->view('v_tentang');
		$this->load->view('v_footer');

	}

	function kontak()
	{
		$this->load->view('v_header');
		$this->load->view('v_kontak');
		$this->load->view('v_footer');

	}

}
