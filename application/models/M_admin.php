<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function register(){

		$data = array('no_induk' => $this->input->post('f_no_induk'),
					  'nama' => $this->input->post('f_nama'), // kolom table db || name form
		              'email'=> $this->input->post('f_email'),
		              'no_hp'=> $this->input->post('f_no_hp'),
		              'password'=>get_hash($this->input->post('f_password')),
		 			  'role'=> $this->input->post('f_role')
		 			 );
         return $this->db->insert('user',$data);
	}

	public function check_db()
	{
		return $this->db->get_where('admin',array('username' => $this->input->post('f_un')));
	}

	public function get_user()
    {
		// return $this->db->get('user');
		$query=$this->db->get('user');
		return $query->result_array();
    }

    public function get_user_id($no_induk = FALSE)
    {
    	$query=$this->db->get_where('user',array('no_induk' => $no_induk));
		return $query->result_array();
    }

	public function update_user()
	{
		$data = array('no_induk' => $this->input->post('f_no_induk'),
					  'nama' => $this->input->post('f_nama'), // kolom table db || name form
		              'email'=> $this->input->post('f_email'),
		              'no_hp'=> $this->input->post('f_no_hp'),
		 			  'role'=> $this->input->post('f_role')
		 			 );
		 $this->db->where('no_induk',$this->input->post('f_no_induk'));
	     return $this->db->update('user', $data);
	}

	public function hapus_user($no_induk)
	{
		 $this->db->where('no_induk',$no_induk);
	     return $this->db->delete('user');
	}

	public function update_password_user()
	{
		 $data = array('password'=> get_hash($this->input->post('f_password')));
		 $this->db->where('no_induk',$this->input->post('f_no_induk'));
	     return $this->db->update('user', $data);
	}

}