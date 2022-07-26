<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthenticationController extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("authenticationModel", "authModel");
	}

	public function index()
	{
		$this->load->view('frontEnd/authentication/login');
	}

	// public function dashboard()
	// {
	// 	$this->load->view('frontEnd/dashboard/dashboard');
	// }

	//Create function for chack user
	public function check()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect(base_url());
		}
		else
		{
			$user_email = $this->input->post('email');
			$user_password = $this->input->post('password');
			$session = $this->authModel->user_check($user_email, $user_password);
			if(count($session)>0)
			{
				$sessArray = [
					'id' => $session[0]->id,
					'user_email' => $session[0]->email,
				];
				$this->session->set_userdata('loggedIn',$sessArray);
				// redirect(base_url('authenticationController/secure'));
				$this->secure();
			}
			else
			{
				$this->session->set_flashdata('error','Something went wrong');
				redirect(base_url());
			}
		}
	}

	public function secure()
	{
		if($this->session->userdata('loggedIn'))
		{
			$this->load->view('frontEnd/dashboard/dashboard');
		}
		else
		{
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>