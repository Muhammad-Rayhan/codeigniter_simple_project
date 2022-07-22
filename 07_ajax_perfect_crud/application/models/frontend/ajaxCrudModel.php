<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AjaxCrudModel extends CI_Model
{
    //Data Insert Query
    public function dataInsertQuery($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    //Fatch All Data
    // public function fatchDataQuery($data, $tableName, $where)
    // {
    //     $query = $this->db->select($data)
    //                     ->from($tableName)
    //                     ->where($where)
    //                     ->get();
    //     return $query->result_array();
    // }

    //Fatch all data
    public function fatchAllData($table)
    {
        return $this->db->get($table);
        // return $query->result();
    }

    //Data Edit Query
    public function dataEditQuery($table, $id)
    {
        $query = $this->db->where('id', $id)
                    ->get($table);
        return $query->row();
    }

    //Data Edit Query
    public function dataUpdateQuery($table, $data, $id)
    {
        $query = $this->db->where('id', $id)
                        ->update($table, $data);
        return $query;
    }

    //Data Delete Query
    public function dataDeleteQuery($table, $id)
    {
        $query = $this->db->where('id', $id)
                ->delete($table);
        return $query;
    }
}
?>