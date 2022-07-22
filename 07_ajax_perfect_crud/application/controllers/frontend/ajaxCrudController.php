<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AjaxCrudController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("frontend/ajaxCrudModel");
    }

    //Data Insert
    public function dataInsert()
    {
        $table = "first_data_table_crud";
        $data = [
            'name' => $this->input->post("name"),
            'email' => $this->input->post("email"),
            'details' => $this->input->post("details"),
        ];
        $result = $this->ajaxCrudModel->dataInsertQuery($table, $data);
        echo json_encode($result);
        // if($result == true)
        // {
        //     echo json_encode(["return" => true, "alert" => "success", "message" => "Data Insert Successfully."]);
        // }
        // else
        // {
        //     echo json_encode(["return" => false, "alert" => "error", "message" => "Data Not Found!"]);
        // }
    }

    // ===============================================================================================================
    //Get data 
    // public function fatchAllDataFormDatabase()
    // {
    //     $tableName = 'first_data_table_crud';
    //     $resultList = $this->ajaxCrudModel->fatchDataQuery('*', $tableName, array());
        
    //     $result = [];
    //     $i = 1;
    //     foreach ($resultList as $value) {
    //         $result['data'][] = [
    //             $i++,
    //             $value->name,  //$value['name],
    //             $value->email,
    //             $value->details,
    //         ];
    //     }
    //     echo json_encode($result);
    // }

    // ================================================================================================================ 

    //Data Edit
    public function dataEdit($id)
    {
        $table = "first_data_table_crud";
        $result = $this->ajaxCrudModel->dataEditQuery($table, $id);
        echo json_encode($result);
    }

    //Data Update
    public function dataUpdate($id)
    {
        $table = "first_data_table_crud";
        $data = [
            'name' => $this->input->post("name"),
            'email' => $this->input->post("email"),
            'details' => $this->input->post("details"),
        ];
        $result = $this->ajaxCrudModel->dataUpdateQuery($table, $data, $id);
        echo json_encode($result);
    }

    // Data Delete
    public function dataDelete($id)
    {
        $table = "first_data_table_crud";
        $result = $this->ajaxCrudModel->dataDeleteQuery($table, $id);
        echo json_encode($result);
    }
}
?>


