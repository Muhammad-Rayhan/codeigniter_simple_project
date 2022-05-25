<?php
class Model extends CI_Model
{
    // Data table data show query -----!!
    public function data_select()
    {
        //Data table data show code or data select or read
        $query = $this->db->get('student_info');
        if ($query) {
            return $query->result();
        }
    }

    //Data table data insert query -------!!
    public function add_student($data)
    {
        $array = [
            'student_name' => $data['studentname'],  //'student_name' = (data table feild name) => $data['studentname(Input name value)']
            'student_id' => $data['studentid'],
            'course' => $data['course'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ];

        //insert query
        $this->db->insert('student_info', $array); //'student_info' = data table name  //$array = sob input data insert hobe ta $array variable ar maddhome bole dilam.
        return true;
    }

    //add Course data insert 
    public function add_course_with_student_info($data)
    {
        $array = [
            'student_id' => $data['edit_id_course'],  //'student_name' = (data table feild name) => $data['studentname(Input name value)']
            'course_id' => $data['addcourse'],
            'create_time' => date('Y-m-d'),
        ];

        //insert query
        $this->db->insert('student_courses', $array); //'student_info' = data table name  //$array = sob input data insert hobe ta $array variable ar maddhome bole dilam.
        return true;
    }

    //Edit a singal data query -------!!
    public function getsingle_data($serial_number)
    {
        $this->db->where('serial_number', $serial_number);  //'serial_number' = data table id feild name, catch variable $serial_number
        $query = $this->db->get('student_info');  //student_info = data table name
        if ($query) {
            return $query->row();
        }
    }

    //Update data query ---------!!
    public function update_student($data, $edit_id)
    {
        $this->db->where('serial_number', $edit_id);  //'serial_number' = Data table feild name, $edit_id = Catch id variable
        $query = $this->db->update('student_info ', $data);  //'student_info' = Data table name
        if ($query) {
            return true;
        }
    }


    //Course Page All Query Here ######################################################----------!!
    // Data table data show read query -----!!
    public function coursedata_select()
    {
        //Data table data show code or data select or read
        $query = $this->db->get('course');
        if ($query) {
            return $query->result();
        }
    }

    // Data table data show read query -----!!
    public function courserselect()
    {
        //Data table data show code or data select or read
        $query = $this->db->get('course');
        if ($query) {
            return $query->result();
        }
    }


    //Course Update query--------!!
    // public function update_course($data, $edit_id){
    //     $this->db->where('serial_number', $edit_id);  //'serial_number' = Data table feild name, $edit_id = Catch id variable
    //     $query = $this->db->update('student_info ', $data);  //'student_info' = Data table name
    //     if ($query) {
    //         return true;
    //     }
    // }


    // Course insert in another database
    // public function add_Course($data){
    //     $arry = [
    //         'student_id' => $data['studentid'],
    //         'course' => $data['addcourse'],
    //         'created_by' => $data['studentname']  //'student_name' = (data table feild name) => $data['studentname(Input name value)']
    //     ];
    //     //insert query
    //     $this->db->insert('student_course', $arry); //'student_info' = data table name  //$array = sob input data insert hobe ta $array variable ar maddhome bole dilam.
    //     return true;
    // }



    // public function select_course($id){
    //     $this->db->select('*');
    //     $this->db->where('student_courses.student_id', $id);
    //     $this->db->from('student_courses');
    //     $this->db->join('student_info', 'student_courses.student_id = student_info.id');
    //     $this->db->join('course_details', 'student_courses.course_id = course_details.serial_id');
    //     $query = $this->db->get();
    // }

}
