<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		
	}

	public function index(){
		$this->load->view('v_header');
		$this->load->view('v_error');
		$this->load->view('v_footer');
	}

	
}
