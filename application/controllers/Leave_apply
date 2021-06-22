<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave_apply extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		$this->load->model('apply_model');
	 }

	 function index()
	 {
        $this->load->view('leave_form');
	 }
		
	 function submitform()
	 {
		$data = array(
				'user_id'  => $this->session->userdata('id'),
				'name'  => $this->session->userdata('name'),
				'position'  => $this->session->userdata('position'),
				'department' => $this->session->userdata('department'),
				'start_date'  => $this->input->post('start_date'),
				'end_date'  => $this->input->post('end_date'),
				'reasons'  => $this->input->post('reasons'),
				'workload'  => $this->input->post('workload')
			);
		$this->apply_model->insert($data);
		$this->session->set_flashdata('message','Application Sent Successfuly');		
		redirect('home');
		}
	 }

?>
