<?php
class apply_model extends CI_Model
{
	 function insert($data)
	 {
		  $this->db->insert('leave_applications', $data);
		  return $this->db->insert_id();
	 }
}

?>
