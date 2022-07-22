<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Dashboard extends CI_Controller{
        public function index()
        {
            $css = "";
            $js = "";
            $data = [
                "css" => $css,
                "js" => $js,
                "title" => "Dashboard",
                "body" => "admin/dashboard/dashboard_content"
            ];
            $this->load->view("admin/layout/base_layout", $data);
        }
    }
?>