<?php defined('BASEPATH') OR exit('No direct script access allowed');

class profile_controllers extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('captcha');
		$this->load->library('form_validation');
		$this->load->model('usermodel');
		$this->load->library('pagination');
	}

	public function profile(){
		$user =$this ->session->userdata('user');
		$data['info'] = $this->usermodel->getUser($user['username']);
		$this->load->view('user/user_profile.html', $data);
	}

    public function update(){
		$data['username'] = $_POST['username'];
		//$data['password'] = $_POST['password'];
		$data['firstname'] = $_POST['firstname'];
		$data['lastname'] = $_POST['lastname'];
		$data['email'] = $_POST['email'];
		$data['phone_num'] = $_POST['phone_num'];
		$data['room_num'] = $_POST['room_num'];
		$data['lease_start'] = $_POST['lease_start'];
		$data['lease_end'] = $_POST['lease_end'];

		$this->usermodel->updateUser($data, $_POST['username']);
		$data['display'] = '';
		$data['message'] = "Update Successful";
		redirect ('user/profile_controllers/profile');
}

}
	