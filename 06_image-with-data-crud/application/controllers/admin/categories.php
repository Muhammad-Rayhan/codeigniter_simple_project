<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Categories extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->model("categories_model");
            $this->load->library("form_validation");
        }

        public function index()
        {
            $table = "product_categories";
            $css = "";
            $js = "";
            $data = [
                "css" => $css,
                "js" => $js,
                "title" => "Categories",
                "body" => "admin/categories/categories_list",
                "get_all_data" => $this->categories_model->fatch_all_data($table),
            ];
            $this->load->view("admin/layout/base_layout", $data);
        }

        public function insert_area()
        {
            $css = "";
            $js = "";
            $data = [
                "css" => $css,
                "js" => $js,
                "title" => "Insert Area",
                "body" => "admin/categories/insert_area",
            ];
            $this->load->view("admin/layout/base_layout", $data);
        }

        //Data Insert
        public function add_product()
        {
            $ori_filename = $_FILES['prod_image']['name'];  //['prod_image'] = image name value ['name'] = image name attribute
            $insert_name = time()."".str_replace(' ','-', $ori_filename);
            $config = [
            'upload_path' => './images/',  //Image upload path
            'allowed_types' => 'gif|jpg|jpeg|png',
            'file_name' => $insert_name,
            ];
            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('prod_image')) {  //'prod_image' = image name value
                //Form Error
                $imageError = array('imageError' => $this->upload->display_errors());
                $this->load->view('upload_form', $imageError);
                //Redirect
                redirect(base_url("admin/categories/insert_area"));
            } else {
                $prod_filename = $this->upload->data('file_name');
                $table = "product_categories";
                $data = [
                    'name' => $this->input->post("name"),
                    'description' => $this->input->post("description"),
                    'price' => $this->input->post("price"),
                    'image' => $prod_filename
                ];

                $this->categories_model->add_product($table, $data);
                redirect(base_url("admin/categories/insert_area"));
            }
        }

        //Data Edit 
        public function data_edit($id)
        {
        // ====================================================
            $table = "product_categories";
            $css = "";
            $js = "";
            $data = [
                "css" => $css,
                "js" => $js,
                "title" => "Edit Area",
                "body" => "admin/categories/edit_area",
                "product" => $this->categories_model->fatch_product_data_for_edit($table, $id), //"product" = get_only_product_single_row_data_for_edit
            ];
            $this->load->view("admin/layout/base_layout", $data);
            // ====================================================
        }

        //Data update
        public function data_update($id)
        {
            $old_filename = $this->input->post("old_product_image");
            $new_filename = $_FILES['prod_image']['name'];  //['prod_image'] = image name value ['name'] = image name attribute

            if($new_filename == TRUE)
            {
                $update_filename = time() . "" . str_replace(' ', '-', $new_filename);
                $config = [
                    'upload_path' => './images/',  //Image upload path
                    'allowed_types' => 'gif|jpg|jpeg|png',
                    'file_name' => $update_filename,
                ];
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('prod_image')) {  //'prod_image' = image name value
                    //Form Error
                    $imageError = array('imageError' => $this->upload->display_errors());
                    $this->load->view('upload_form', $imageError);
                    //Redirect
                    redirect(base_url("admin/categories"));
                } else {
                    if(file_exists("./images/". $old_filename))
                    {
                        unlink("./images/" . $old_filename);
                    }
                    else
                    {
                        $update_filename = $old_filename;
                    }
                }

                $table = "product_categories";
                $data = [
                    'name' => $this->input->post("name"),
                    'description' => $this->input->post("description"),
                    'price' => $this->input->post("price"),
                    'image' => $update_filename  //Comming on else
                ];

                $this->categories_model->update_product($table, $data, $id);
                redirect(base_url("admin/categories"));
            }
            else
            {
                return $this->data_update($id);
            }
        }

        //Data Delete
        public function data_delete($id)
        {
            // $table = "product_categories";
            // $this->categories_model->data_delete($table, $id);
            // redirect(base_url("admin/categories"));

            $table = "product_categories";
            if($this->categories_model->chack_product_image($table, $id))
            {
                $data = $this->categories_model->chack_product_image($table, $id);
                //$data->image; image = table feild name
                if(file_exists("./images/". $data->image))
                {
                    unlink("./images/" . $data->image);
                }
                $this->categories_model->data_delete($table, $id);
                redirect(base_url("admin/categories"));
            }
        }
    }
