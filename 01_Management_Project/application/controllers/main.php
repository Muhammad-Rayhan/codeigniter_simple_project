<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login-page');
	}

	//Dashboard page load with body content & Data table data show in this page --------!!
	//Data Select
	public function dashboard()
	{
		//Data table data show code or data select or read
		$this->load->model('model');
		$getdata['getall_info'] = $this->model->data_select();
		$getdata['getallcourse'] = $this->model->courserselect();  //add course data select (Relasionship)
		//Data select process end than data catch on the table from foreach loop

		//dashboard & body content code
		$data = array();
		$data['body_content'] = $this->load->view('all_pages/dashboard_content', $getdata, true);  //$getdata = our select data variable
		$this->load->view('dashboard', $data);  //only dashbord code
	}

	//Dashboard page load with course page
	public function course()
	{
		//Data table data show code or data select or read
		$this->load->model('model');
		$getcoursedata['getcourseall_info'] = $this->model->coursedata_select();
		//Data select process end than data catch on the table from foreach loop

		//dashboard & body content code
		$data = array();
		$data['body_content'] = $this->load->view('all_pages/course', $getcoursedata, true);
		$this->load->view('dashboard', $data);
	}

	//When click add student than input data insert ----------!!
	//Data insert
	public function addstudent()
	{
		$data = $this->input->post();  //get all data from add student input page data received in post method.

		//load model for insert query
		$this->load->model('model');
		$result = $this->model->add_student($data);

		//condition
		if ($result) {
			$this->session->set_flashdata('insert_success', 'Data Insert Successfully.');  //message
			redirect(base_url('dashboard'));  //Go to dashboard page
		} else {
			$this->session->set_flashdata('insert_error', 'Data Insert Error!');
			redirect(base_url('dashboard'));
		}
	}

	//When click Edit button than opan a model & fill all input data autometiclly ----------!!
	//Data Edit on page using bootstrap modal
	public function editstudent_info($serial_number)
	{
		//echo json_encode($serial_number);
		$this->load->model('model');
		$getinfo = $this->model->getsingle_data($serial_number);
		echo json_encode($getinfo);
	}

	//Now edit data update dashboard content page ------------!!
	//Data Update
	public function update()
	{  //Data update from passing id $serial_number = data table id feild name
		//Catch id from edit input tag
		$edit_id = $this->input->post('edit_id');  //'edit_id' = input name value

		$this->load->model('model');
		$result = $this->model->update_student([
			'student_name' => $this->input->post('studentname'),  //'student_name'(data table feild name) => post('studentname[input name value]')
			'student_id' => $this->input->post('studentid'),
			'course' => $this->input->post('course'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone')
		], $edit_id);

		if ($result) {
			$this->session->set_flashdata('update_success', 'Data Update Successfully.');  //message
			redirect(base_url('dashboard'));  //Go to dashboard page
		} else {
			$this->session->set_flashdata('update_error', 'Data Upadte Error.');  //message
			redirect(base_url('dashboard'));  //Go to dashboard page
		}
	}

	//Course Page Update Here ######################################################----------!!
	//Add Course Update Student info 
	// public function course_update(){
	// 	$edit_id = $this->input->post('edit_id');  ////'edit_id' = input name value


	// 	$this->load->model('model');  
	// 	$result = $this->model->update_course([
	// 		'course_list' => $this->input->post('addcourse') //'course_list'(data table feild name) => post('addcourse[input name value]')
	// 	], $edit_id);

	// 	//condition
	// 	if ($result) {
	// 		$this->session->set_flashdata('update_success', 'Data Update Successfully.');  //message
	// 		redirect(base_url('dashboard'));  //Go to dashboard page
	// 	} else {
	// 		$this->session->set_flashdata('update_error', 'Data Upadte Error.');  //message
	// 		redirect(base_url('dashboard'));  //Go to dashboard page
	// 	}
	// }




	//Course insert another Table
	// public function course_insert(){

	// $data = $this->input->post();  //get all data from add student input page data received in post method.

	// //load model for insert query
	// $this->load->model('model');
	// $result = $this->model->add_Course($data);

	// //condition
	// if ($result) {
	// 	$this->session->set_flashdata('insert_success', 'Data Insert Successfully.');  //message
	// 	redirect(base_url('dashboard'));  //Go to dashboard page
	// } else {
	// 	$this->session->set_flashdata('insert_error', 'Data Insert Error!');
	// 	redirect(base_url('dashboard'));
	// 	}
	// }


	// public function select_course($edit_id_course){
	// 	$this->load->model('model');
	// 	$this->model->select_course($edit_id_course);
	// }


//add course data insert
	public function added_course()
	{
		$data = $this->input->post();
		$this->load->model('model');
		$result = $this->model->add_course_with_student_info($data);

		// echo json_encode($this->input->post());
	}
}
