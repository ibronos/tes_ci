<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supervisor extends CI_Controller {

	public function index($halaman='v_welcome')
	{

		if ( ! file_exists(APPPATH.'views/pages_supervisor/'.$halaman.'.php'))
        {
                show_404();
        }
		$this->load->view('templates/v_header_supervisor');
		$this->load->view('pages_supervisor/'.$halaman);
		$this->load->view('templates/v_footer');
	}

	


}
