<?php
defined('BASEPATH') or exit('No direct script access allowed');
    class AuthenticationModel extends CI_Model
    {
        public function user_check($user_email, $user_password)
        {
            $query = $this->db->where('email', $user_email)
                                ->where('password', $user_password)
                                ->get('login_info');
            return $query->result();
        }
    }
?>