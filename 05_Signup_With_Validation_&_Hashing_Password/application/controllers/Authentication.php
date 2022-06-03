<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Authentication extends CI_Controller
    {
        public function __construct()
        {
            parent :: __construct();
            $this->load->library('form_validation');
            $this->load->model('admin/Authenticationmodel');
        }

        public function index()
        {
            $this->load->view('admin/authentication/login');
        }

        public function sign_up()
        {   
            $this->form_validation->set_rules('email','email','trim|required|valid_email');
            $this->form_validation->set_rules('username','username','trim|required');
            $this->form_validation->set_rules('password','password','trim|required');

            if($this->form_validation->run() == false){
                //Here we will load our signup page
                $this->load->view('admin/authentication/signup');
            } else {
                //Here we will save record in db
                $data = array();
                // $data = $this->input->post();
                $data = [
                    'user_name' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
                    // 'created_at' => $this->input->post(date('Y-m-d H:i:s'))
                ];
                $this->Authenticationmodel->regester($data);
                $this->session->set_flashdata('successfull', 'Data Insert Successfully!');
                redirect(base_url('authentication/sign_up'));
            }

        }
    }
?>
