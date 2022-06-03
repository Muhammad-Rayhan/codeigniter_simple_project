<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Dashboard extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('admin/dashboardmodel');
        }

        public function index()
        {
            // $data = array();
            $css = '';
            $js = '';
            $data = [
                'css' => $css,
                'js' => $js,
                'title' => 'Dashboard',
                'body' => 'admin/dashboard/content'
            ];
            $this->load->view('admin/layout/base_layout', $data);
        }
    }
?>