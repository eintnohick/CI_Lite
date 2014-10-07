<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index() {
		
		$this->load->view('layout', array(
			'title' 	=> 'Welcome to CodeIgniter',
			'content' 	=> $this->load->view('welcome', array(), true)
		));
	}
}

