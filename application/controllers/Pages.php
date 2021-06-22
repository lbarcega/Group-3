<?php
class Pages extends CI_Controller {

        public function view($page = 'login')
        {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
	$id=$this->session->userdata('id');
	if($id=='')
	{
			if($page!='login'&&$page!='registration')
			{
				$page='login';
			}
	}
	if($id!='')
		{
			if($this->session->userdata('is_admin')=='no' && ($page=='staff_home'||$page=='pending_form'||$page=='view_form'))
			{
			$this->session->set_flashdata('message','You do not have access to this page.');
			redirect('home');
		}
	}
        $data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }
}
