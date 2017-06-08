<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		//redirect ('manager/LoginController/login');
		$this->load->view('home/index.html');
		//redirect ('user/log_controllers/login');
	}

	public function search(){
		
	}
}