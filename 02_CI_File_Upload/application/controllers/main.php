<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	//login page load
	public function index(){
		$this->load->view('file_Upload');
	}

	//Dashboard page load
	public function supload(){
		// print_r($_FILES);
		// echo json_encode($_FILES);

		$config['upload_path']          = './assets/upload/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		// $config['max_size']             = 100;  //kb
		// $config['max_width']            = 1024;  //px
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {  //'file' = Input Name Value
			$error = array('error' => $this->upload->display_errors());
			print_r($error); die();
		} else {
			$data = array('upload_data' => $this->upload->data());
			echo "<h1>Uploaded Successfully!</h1>";
		}
	}

}
