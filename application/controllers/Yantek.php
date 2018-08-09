<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yantek extends CI_Controller {

	public function index($halaman='v_welcome')
	{

		if ( ! file_exists(APPPATH.'views/pages_yantek/'.$halaman.'.php'))
        {
                show_404();
        }
		$this->load->view('templates/v_header_yantek');
		$this->load->view('pages_yantek/'.$halaman);
		$this->load->view('templates/v_footer');
	}

}
