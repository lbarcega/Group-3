<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_forms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('is_admin')=='no')
		{
			redirect('home');
		}
		$this->load->library('table');
		}
		
		function table()
		{
			$query = $this->db->query('SELECT created_at, name, start_date, end_date FROM leave_applications');
			$this->table->set_heading('Date Applied', 'Employee Name', 'Start Date', 'End Date');
			$data['table']=$this->table->generate($query);
			
			$data['title'] = 'Pending Forms'; 
			$this->load->helper('url');
			$this->load->view('templates/header', $data);	
			$this->load->view('pages/pending_form', $data);
			$this->load->view('templates/footer',$data);
		}
}

?>
