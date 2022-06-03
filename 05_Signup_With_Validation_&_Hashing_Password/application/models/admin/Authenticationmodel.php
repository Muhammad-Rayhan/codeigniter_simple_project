<?php
    class Authenticationmodel extends CI_Model
    {
        public function regester($data)
        {
            $result = $this->db->insert('user', $data);
            return $result;
        }
    }
