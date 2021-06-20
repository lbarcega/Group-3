<?php
class Users_model extends CI_Model
{
	function set_user($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
					$this->session->set_userdata('name', $row->name);
					$this->session->set_userdata('birth_date', $row->birth_date);
					$this->session->set_userdata('position', $row->position);
					$this->session->set_userdata('department', $row->department);
					$this->session->set_userdata('email', $row->email);
			}
		}
		else
		{
			return 'Account Does Not Exist';
		}
	}
}

?>
