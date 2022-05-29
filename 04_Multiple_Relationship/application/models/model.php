<?php
class Model extends CI_Model
{
    //Select Data From Database Query
    public function selectdata()
    {
        $query = $this->db->get('studentdata');  //'studentdata' = data base table name
        return $query->result();
    }

    //Select Data From Database Query
    public function getsingle_data($s_number)
    {
        $this->db->where('s_number', $s_number);  //'s_number' = data table id feild name, catch variable $s_number
        $query = $this->db->get('studentdata');  //studentdata = database table name
        if ($query) {
            return $query->row();
        }
    }

    public function courserselect()
    {
        //Data table data show code or data select or read (Show Course Id)
        $query = $this->db->get('course');
        if ($query) {
            return $query->result();
        }
    }



    //add Course data insert query
    public function add_course_with_student_data($data)
    {
        $array = [
            'studentdata_id' => $data['editid'],  //'studentdata_id' = (data table feild name) => $data['editid(Id Input name value)']
            'coursedata_id' => $data['selectcourse'],
            'create_time' => date('Y-m-d'),
        ];

        //insert query
        $this->db->insert('multiplerelation', $array); //' multiplerelation' = data table name  //$array = sob input data insert hobe ta $array variable ar maddhome bole dilam.
        return true;
    }



    //Select Data From Database Query (Relational data)
    public function selectrelationdata()
    {
        $queryReturn = $this->db->query("SELECT studentdata.s_name,studentdata.s_id,studentdata.s_contact,course.course_list,multiplerelation.create_time,multiplerelation.id FROM multiplerelation,course,studentdata WHERE multiplerelation.studentdata_id=studentdata.s_number AND multiplerelation.coursedata_id=course.course_id");
        if ($queryReturn->num_rows() > 0) {
            $loanList = $queryReturn->result();
            return $loanList;
        }
        return FALSE;
    }
}
