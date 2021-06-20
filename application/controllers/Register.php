<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	 public function __construct()
	 {
		parent::__construct();
		if($this->session->userdata('id'))
		{
			redirect('home');
		}
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('register_model');
	 }

	 function index()
	 {
        $data['title'] = "Registration"; // Capitalize the first letter

        $this->load->view('templates/header', $data);
        $this->load->view('pages/registration', $data);
        $this->load->view('templates/footer', $data);
	 }
		
	 function validation()
	 {
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email Address', 'required|trim|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required',
                    array('required' => 'You must provide a %s.'));
		$this->form_validation->set_rules('birth_date', 'Birth Date', 'required');
		$this->form_validation->set_rules('position', 'Position', 'required|trim');
		$this->form_validation->set_rules('department', 'Department', 'required|trim');

		if($this->form_validation->run())
		{		
			$encrypted_password = $this->encrypt->encode($this->input->post('password'));
			$data = array(
					'name'  => $this->input->post('name'),
					'email'  => $this->input->post('email'),
					'password' => $encrypted_password,
					'birth_date'  => $this->input->post('birth_date'),
					'position'  => $this->input->post('position'),
					'department'  => $this->input->post('department')
				);
			$this->register_model->insert($data);
			redirect('login');
		}
		else
		{
			$this->index();
		}
	 }
}

?>
