<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Categories_model extends CI_Model
    {
        public function add_product($table, $data)
        {
            return $this->db->insert($table, $data);
        }

        public function fatch_all_data($table)
        {
            return $this->db->get($table);
        }

        //Data edit
        public function fatch_product_data_for_edit($table, $id)
        {
            $this->db->where("id", $id);
            $query = $this->db->get($table);
            return $query->row();
        }

        //Data Update
        public function update_product($table, $data, $id)
        {
            $this->db->where("id", $id);
            return $this->db->update($table, $data);
        }

        //Delete with image
        public function chack_product_image($table, $id)
        {
            $this->db->where("id", $id);
            $result =  $this->db->get($table);
            return $result->row();
        }

        public function data_delete($table, $id)
        {
            $this->db->where("id", $id);
            return $this->db->delete($table);
        }
    }
?>