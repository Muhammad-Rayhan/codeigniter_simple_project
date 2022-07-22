<?php
defined('BASEPATH') or exit('No direct script access allowed');
    class DashboardController extends CI_Controller
    {   
        public function __construct()
        {
            parent::__construct();
            $this->load->model("frontend/ajaxCrudModel");
        }

        public function index()
        {
            $table = "first_data_table_crud";
            $data['get_all_data'] = $this->ajaxCrudModel->fatchAllData($table);
            $this->load->view("frontend/layout/baseLayout", $data);
        }
    }
?>