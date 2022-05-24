<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_controller extends CI_Controller
{
	//By default auto run.....index() method
	public function index()
	{
		$this->load->view('login_page');
	}

	//Dashboard 
	public function dashboard()
	{

		// Data select on table for data show
		$this->load->model('model');
		$sdata['all_info'] = $this->model->view_data();
		$sdata['cource'] = $this->model->view_cource_data();

		//Show main dashboard data
		$data = array();
		$data['main_content'] = $this->load->view('all_pages/dashboard_content', $sdata, true); //Declear $sdata for data show from database
		$this->load->view('dashboard', $data);
	}

	//Go to dashboard
	public function gotodashboard()
	{
		$email = $this->input->post('email');  //'email' = input name value
		$password = $this->input->post('password');

		//load model page for query
		$this->load->model('model');
		$result = $this->model->login_data($email, $password);  //$email, $password = passing this value login_data() method

		//condition
		if ($result) {
			//show alert box on page start
			$this->session->set_flashdata('status', 'Log-in Successfully!');
			//show alert box on page end

			redirect(base_url('admin_controller/dashboard'));
		} else {
			redirect(base_url('admin_controller'));
		}
	}

	//when user not have a account than go to sign up page
	public function sign_up_page_load()
	{
		$this->load->view('signup_page');
	}

	//when entry all input value fullfill & click sign up button than all data save in database & go back login page.
	public function sign_up()
	{

		$data = $this->input->post();  // get all data from signup input page
		$this->load->model('model');  //model = model file name
		$result = $this->model->sign_up($data);
		//condition
		if ($result == true) {
			$this->session->set_flashdata('status2', 'Data insert successfully!');  //Passing messeage
			redirect(base_url('admin_controller'));
		} else {
			redirect(base_url('admin_controller/sign-up'));
		}
	}

	//Add stdent from input
	public function add_student()
	{
		$data = $this->input->post();  //get all data from add student input page
		$this->load->model('model');
		$result = $this->model->add_student($data);

		//condition
		if ($result == true) {
			$this->session->set_flashdata('status2', 'Data insert successfully!');
			redirect(base_url('admin_controller/dashboard'));
		} else {
			$this->session->set_flashdata('status3', 'Data insert Error!');
			redirect(base_url('admin_controller/dashboard'));
		}
	}

	//Delete information in database
	public function delete($serial_number)
	{
		$this->load->model('model');
		$result = $this->model->delete($serial_number);

		if ($result == true) {
			$this->session->set_flashdata('delete', 'Delete successfully!');
			redirect(base_url('admin_controller/dashboard'));
		} else {
			$this->session->set_flashdata('faildelete', 'Delete Failed!');
			redirect(base_url('admin_controller/dashboard'));
		}
	}


	// Edit information catch
	public function editinfo($serial_number)
	{
		$this->load->model('model');
		$singleproduct = $this->model->getsingleproduct($serial_number);
		echo json_encode($singleproduct);
	}


	//Update information 
	public function update($serial_number)
	{  //pass id $serial_number

		// $data = $this->input->post();  //get all data from add student input page
		$this->load->model('model');
		$result = $this->model->update_student([
			'image' => $this->input->post('image'),
			'student_id' => $this->input->post('studentid'),  //'student_id' = data table feild name  //post('studentid' = input name value)
			'title' => $this->input->post('title'),
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'department' => $this->input->post('department'),
			'major' => $this->input->post('major'),
			'phone' => $this->input->post('phone'),
			'description' => $this->input->post('description')
		], $serial_number);

		//condition
		if ($result == true) {
			$this->session->set_flashdata('update', 'Data Update successfully!');
			redirect(base_url('admin_controller/dashboard'));
		} else {
			$this->session->set_flashdata('failupdate', 'Data update Failed!');
			redirect(base_url('admin_controller/dashboard'));
		}
	}

	//data info show on card
	public function viewinfo($serial_number)
	{
		$this->load->model('model');
		$singleproduct = $this->model->getdata($serial_number);
		echo json_encode($singleproduct);
	}



	//ADD information catch
	public function add($serial_number)
	{
		$this->load->model('model');
		$getsingleinfo = $this->model->getsingleinfo($serial_number);
		echo json_encode($getsingleinfo);
	}

	//Add Update
	// public function Curse_update($serial_id)
	// {  //pass id $serial_id

	// 	// $data = $this->input->post();  //get all data from add student input page
	// 	$this->load->model('model');
	// 	$result = $this->model->add_info([
	// 		'department' => $this->input->post('course_id'),  //'department' = data table feild name  //post('course' = input name value)
	// 		// 'subject_list' => $this->input->post('subject')
	// 	], $serial_id);

	// 	//condition
	// 	if ($result == true) {
	// 		redirect(base_url('course-details'));
	// 	} else {
	// 		redirect(base_url('course-details'));
	// 	}
	// }



	//Course Details Page Process Start.............................
	public function course_details()
	{
		#######		// show data on table
		$this->load->model('model');
		$sdata['all_course'] = $this->model->coursedataview();

		//data insert another page
		$data = array();
		$data['main_content'] = $this->load->view('all_pages/course_crud', $sdata, true);
		$this->load->view('dashboard', $data);
	}


	//insert course
	public function add_course()
	{
		$data = $this->input->post();  //get all data from add student input page
		$this->load->model('model');
		$result = $this->model->add_course($data);

		//condition
		if ($result == true) {
			$this->session->set_flashdata('status2', 'Data insert successfully!');
			redirect(base_url('admin_controller/course_details'));
		} else {
			$this->session->set_flashdata('status3', 'Data insert Error!');
			redirect(base_url('admin_controller/course_details'));
		}
	}

	//Course delete
	public function coursedelete($serial_id)
	{
		$this->load->model('model');
		$result = $this->model->delete_course($serial_id);

		if ($result == true) {
			$this->session->set_flashdata('delete', 'Delete successfully!');
			redirect(base_url('admin_controller/course_details'));
		} else {
			$this->session->set_flashdata('faildelete', 'Delete Failed!');
			redirect(base_url('admin_controller/course_details'));
		}
	}

	// Edit caurse information catch
	public function editcourse($serial_id)
	{
		$this->load->model('model');
		$getsinglecourse = $this->model->getsinglecourse($serial_id);
		echo json_encode($getsinglecourse);
	}


	//Update information 
	public function updatecourse($serial_id)
	{  //pass id $serial_id

		// $data = $this->input->post();  //get all data from add student input page
		$this->load->model('model');
		$result = $this->model->update_course([
			'department' => $this->input->post('department'),  //'student_id' = data table feild name  //post('studentid' = input name value)
			'subject_code' => $this->input->post('departmentcode'),
			'subject_list' => $this->input->post('subjectlist')
		], $serial_id);

		//condition
		if ($result == true) {
			$this->session->set_flashdata('update', 'Data Update successfully!');
			redirect(base_url('admin_controller/course_details'));
		} else {
			$this->session->set_flashdata('failupdate', 'Data update Failed!');
			redirect(base_url('admin_controller/course_details'));
		}
	}


	//data Select from Course_crud Page
	public function select_ccdata($serial_id){
		$this->load->model('model');
		$singleproduct = $this->model->select_course_data($serial_id);
		echo json_encode($singleproduct);
	}
}
