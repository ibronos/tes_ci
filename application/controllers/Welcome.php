<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->view('v_register');
	}

	public function proses_daftar() {
	$this->form_validation->set_rules('no_induk', 'No_induk', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('no_hp', 'No_hp', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('role', 'Role', 'required');
   
                if ($this->form_validation->run() == FALSE):

                	 $this->load->view('v_register');
                	
                	else:

                    if($this->m_user->register())
                         {
                            $this->session->set_flashdata('pesan','Pendaftaran berhasil, silahkan login.');
                            redirect('','refresh');

                         }

                	endif;
	}

	
}
