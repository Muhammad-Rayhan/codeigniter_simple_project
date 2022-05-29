<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Main extends CI_Controller {
		//Select Data From Database
		public function index()
		{
			$this->load->model('model');
			$data['getalldata'] = $this->model->selectdata();
			$data['getallcourse'] = $this->model->courserselect();  //show add course on form input
			$this->load->view('dashboard', $data);
		}

		//Select Data Form Database
		public function add_course($s_number){
			$this->load->model('model');
			$getinfo = $this->model->getsingle_data($s_number);
			echo json_encode($getinfo);
		}


	//add course data insert
		public function added_course()
		{
			$data = $this->input->post();
			$this->load->model('model');
			$result = $this->model->add_course_with_student_data($data);

			// echo json_encode($this->input->post());


			if($result){
				redirect(base_url());
			}
		}



		//Relational data view page load
		public function relation()
		{
			$this->load->model('model');
			$data['getallrelationdata'] = $this->model->selectrelationdata();
			$this->load->view('relationaldata', $data);
		}
	}
?>