<?php

class Employee_model extends CI_Model {
    public function get_employee(){
        $query = $this->db->get('employee')->result();
        return $query;
    }
    public function insert_employee($data){
        return $this->db->insert('employee',$data);
    }
    public function view_employee($id)
    {
        $query = $this->db->get_where('employee', ['id' => $id]);
        return $query -> row();
    }
    public function edit_employee($id)
    {
        $query = $this->db->get_where('employee', ['id' => $id]);
        return $query -> row();
    }
    public function update_employee($data, $id){
        return $this->db->update('employee', $data, ['id' => $id]);
        }
    public function delete_employee($id)
    {
        return $this->db->delete('employee', ['id' => $id]);
    }
}