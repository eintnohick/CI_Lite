<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends CI_Controller {
	public function index() {
	
		$data['modules'] = directory_map('app/modules/', 1);
		
		
		$this->load->view('layout', array(
			'title' 	=> 'Modules List',
			'content' 	=> $this->load->view('module', $data, true)
		));
	}
}

