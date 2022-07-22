<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Authentication_model extends CI_Model{
        public function insert_data($table, $data)
        {
            return $this->db->insert($table, $data);
        }

        public function check_user($data)
        {
            $query = $this->db->query("SELECT * FROM admin_login WHERE email = '$data[email]' AND password = '$data[password]'")->row();
            return $query;
        }
    }
?>