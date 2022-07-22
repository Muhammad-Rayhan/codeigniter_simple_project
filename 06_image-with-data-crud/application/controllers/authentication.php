<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Authentication extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library("form_validation");
            $this->load->model("authentication_model");
        }

        public function index()
        {
            $data["title"] = "Log In";
            $this->load->view("admin/authentication/login", $data);
        }

        public function signup()
        {
            $data["title"] = "Sign Up";
            $this->load->view("admin/authentication/signup", $data);
        }

        //Sign Up With Validation 
        public function signup_validation()
        {
            $this->form_validation->set_rules("user_name", "User Name", "trim|required|alpha_numeric|is_unique[admin_login.name]");
            $this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[admin_login.email]");
            $this->form_validation->set_rules("password", "Password", "trim|required|max_length[12]|min_length[8]");
            $this->form_validation->set_rules("con_password", "Confirm Password", "trim|required|max_length[12]|min_length[8]|matches[password]");

            if(!$this->form_validation->run()){
                //False
                $this->signup();
            }else {
                $table = "admin_login";
                $data = [
                    "name" => $this->input->post("user_name"),
                    "email" => $this->input->post("email"),
                    "password" => password_hash($this->input->post("password"), PASSWORD_BCRYPT),
                    "confirm_password" => password_hash($this->input->post("con_password"), PASSWORD_BCRYPT)
                ];
                $this->authentication_model->insert_data($table, $data);
                $this->signup();
            }
        }

        // Login With Validation
        public function login()
        {
            $this->login_validation();
            if(isset($_POST))
            {
                $data = $this->get_data();

                if($this->form_validation->run() == TRUE)
                {
                    $result = $this->authentication_model->check_user($data);
                    
                    // $session_data = array(
                    //     'user_email' => $result->email,
                    //     'user_password' => $result->password
                    // );
                    // $this->session->set_userdata($session_data);
                    redirect('admin/dashboard');
                }
                else
                {
                    $this->index();
                }
            }
        }

        public function get_data()
        {
            $data = [
                "email" => $this->input->post("email"),
                "password" => $this->input->post("password")
            ];
            return $data;
        }

        public function login_validation()
        {
            $this->form_validation->set_rules("email", "Email", "trim|required");
            $this->form_validation->set_rules("password", "Password", "trim|required");
        }
    }
?>