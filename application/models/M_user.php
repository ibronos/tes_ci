<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	// public function register(){

	// 	$data = array('no_induk' => $this->input->post('f_no_induk'),
	// 				  'nama' => $this->input->post('f_nama'), // kolom table db || name form
	// 	              'email'=> $this->input->post('f_email'),
	// 	              'no_hp'=> $this->input->post('f_no_hp'),
	// 	              'password'=>get_hash($this->input->post('f_password')),
	// 	 			  'role'=> $this->input->post('f_role')
	// 	 			 );
 //         return $this->db->insert('user',$data);
	// }

	public function check_db()
	{
		return $this->db->get_where('user',array('no_induk' => $this->input->post('f_no_induk')));
	}

}