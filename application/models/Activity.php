<?php

class Activity extends CI_Model
{
    public function insertActivity($data)
    {
        $result = $this->db->insert('activity', $data);
        // return ($this->db->affected_rows() != 1) ? false : true;
        return $result;
    }
    public function updateActivity($id, $data)
    {
		$this->db->where('id', $id);
        $this->db->update('activity', $data);
    }
    public function deleteActivity($id)
    {
		$this->db->where('id', $id);
        $this->db->delete('activity');
    }
}
?>