<?php defined('BASEPATH') OR exit('No direct script access allowed');

class announcement_controllers extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		$this->load->model('announcementmodel');
		$this->load->library('pagination');
	}

	public function announcement(){
		$data['info'] = $this->announcementmodel->listannouncement();
		$data['display'] = 'display: none';
		$data['displaymessage'] = 'display: none';
		$data['message'] = '';
		$this->load->view('user/user_announcement.html',$data);
	}

    public function view(){
        $data['info'] = $this->announcementmodel->listannouncement();
		$data['display'] = 'display: block';
		$data['displaymessage'] = 'display: none';
		$data['message'] = '';
		$data['ti'] = $this->announcementmodel->getid($title);
		$this->load->view('user/user_announcement.html', $data);
	}
}
	