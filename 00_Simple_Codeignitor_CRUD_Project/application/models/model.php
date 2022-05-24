<?php
class Model extends CI_Model
{
    //Select data from database for admin login
    public function login_data($email, $password)
    {
        $this->db->select('*');  //Select all data from database
        $this->db->from('admin_info');  //'admin_info' = data table name
        $this->db->where('admin_email', $email);  //'admin_email' = data table feild name, $email (our created variable)
        $this->db->where('admin_password', $password);
        $query = $this->db->get();  //Get all data from database
        $result = $query->row();  //select one row data from database

        //condition
        if ($result) {
            return $result;
        }
    }

    //Data insert in database
    public function sign_up($data)
    {
        //Data insert array
        $array = [
            'admin_name' => $data['user'],  //'admin_name(data table feild name)' => $data['user{Input name value}']
            'admin_email' => $data['email'],
            'admin_password' => $data['password'],
            'admin_phonenumber' => $data['phone'],
            'admin_address' => $data['address'],
        ];
        $this->db->insert('admin_info', $array);  //'admin_info' = data table name  //$data = sob input data insert hobe ta $data variable ar maddhome bole dilam.
        return true;
    }

    //Data insert database
    public function add_student($sdata)
    {
        $array = [
            // 'image' => $data['image'],  //'image(data table feild name)' => $data['user{Input name value}']
            // 'image' => $sdata['image'],
            'student_id' => $sdata['studentid'],
            'title' => $sdata['title'],
            'name' => $sdata['name'],
            'email' => $sdata['email'],
            'department' => $sdata['department'],
            'major' => $sdata['major'],
            'phone' => $sdata['phone'],
            'description' => $sdata['description']
        ];
        $this->db->insert('student_info', $array);  //'student_info' = data table name  //$data = sob input data insert hobe ta $data variable ar maddhome bole dilam.
        return true;
    }

    //view data 
    public function view_data()
    {
        $query = $this->db->get('student_info');
        if ($query) {
            return $query->result();
        }
    }
    public function view_cource_data()
    {
        $query = $this->db->get('course_details');
        if ($query) {
            return $query->result();
        }
    }


    //Delete data
    public function delete($serial_number)
    {
        $this->db->where('serial_number ', $serial_number);
        $query = $this->db->delete('student_info');
        if ($query) {
            return true;
        } else {
            return false;
        }
    }


    //Edit data show
    public function getsingleproduct($serial_number)
    {
        $this->db->where('serial_number', $serial_number);  //'serial_number' = data table id feild name, catch variable $serial_number
        $query = $this->db->get('student_info');
        if ($query) {
            return $query->row();
        }
    }

    //update
    public function update_student($data, $serial_number)
    {

        $this->db->where('serial_number', $serial_number);
        $query = $this->db->update('student_info', $data);
        if ($query) {
            return true;
        }
    }

    //data info show on card
    public function getdata($serial_number)
    {
        $this->db->where('serial_number', $serial_number);  //'serial_number' = data table id feild name, catch variable $serial_number
        $query = $this->db->get('student_info');
        if ($query) {
            return $query->row();
        }
    }


    //ADD data show
    public function getsingleinfo($serial_number)
    {
        $this->db->where('serial_number', $serial_number);  //'serial_number' = data table id feild name, catch variable $serial_number
        $query = $this->db->get('student_info');
        if ($query) {
            return $query->row();
        }
    }


    //ADD info
    // public function add_info($data, $serial_id)
    // {

    //     $this->db->where('serial_id', $serial_id);
    //     $query = $this->db->update('course_details', $data);
    //     if ($query) {
    //         return true;
    //     }
    // }

    //course details page link here
    public function add_course($data)
    {
        $array = [
            // 'image' => $data['image'],  //'image(data table feild name)' => $data['user{Input name value}']
            // 'image' => $sdata['image'],
            // 'serial_id ' => $data['studentid'],
            'department' => $data['department'],
            'subject_code' => $data['departmentcode'],
            'subject_list' => $data['subjectlist'],
        ];
        $this->db->insert('course_details', $array);  //'student_info' = data table name  //$data = sob input data insert hobe ta $data variable ar maddhome bole dilam.
        return true;
    }


    //course show on table 
    public function coursedataview()
    {
        $query = $this->db->get('course_details ');
        if ($query) {
            return $query->result();
        }
    }


    //course delete on table
    public function delete_course($serial_id)
    {
        $this->db->where('serial_id ', $serial_id);
        $query = $this->db->delete('course_details');
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    //Course Edit
    public function getsinglecourse($serial_id)
    {
        $this->db->where('serial_id', $serial_id);  //'serial_number' = data table id feild name, catch variable $serial_number
        $query = $this->db->get('course_details');
        if ($query) {
            return $query->row();
        }
    }

    //Course update
    public function update_course($data, $serial_id)
    {

        $this->db->where('serial_id', $serial_id);
        $query = $this->db->update('course_details', $data);
        if ($query) {
            return true;
        }
    }


    // get data into course crud pages
    //Edit data show
    public function select_course_data($serial_id)
    {
        $this->db->where('serial_id', $serial_id);  //'serial_number' = data table id feild name, catch variable $serial_number
        $query = $this->db->get('course_details');
        if ($query) {
            return $query->row();
        }
    }

}
