<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->switch_themes_on();
	}
}

class Admin_Controller extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->switch_themes_off();

		//check if it`s admin
		/*
		if (! $this->session->userdata('admin')){
			redirect('admin/manager_controllers/login');
		}
		*/
	}
}


