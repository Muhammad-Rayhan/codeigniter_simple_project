<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$language = $this->session->userdata('language');
		$this->lang->load('multi', $language);
	}

	public function index()
	{
		$data['title'] = $this->lang->line('title');
		$this->load->view('welcome_message', $data);
	}

	public function setLanguage()
	{
		$language = $this->input->post('lan');
		$this->session->set_userdata('language', $language);
	}
}
