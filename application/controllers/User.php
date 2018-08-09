<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->view('v_register');
	}

	// public function proses_daftar() {
	// $this->form_validation->set_rules('f_no_induk', 'No_induk', 'required');
 //    $this->form_validation->set_rules('f_nama', 'Nama', 'required');
 //    $this->form_validation->set_rules('f_email', 'Email', 'required');
 //    $this->form_validation->set_rules('f_no_hp', 'No_hp', 'required');
 //    $this->form_validation->set_rules('f_password', 'Password', 'required');
 //    $this->form_validation->set_rules('f_role', 'Role', 'required');

 //                if ($this->form_validation->run() === FALSE):
 //                	 echo '<script>';
 //                     echo 'alert ("register gagal")';
 //                     echo '</script>';
 //                	 $this->load->view('v_register');
                	
 //                	else:

 //                    if($this->M_user->register())
 //                         {
 //                            // $this->session->set_flashdata('pesan','Pendaftaran berhasil, silahkan login.');
 //                            // redirect('','refresh');
 //                            echo "<script>";
 //                            echo 'alert ("register berhasil")';
 //                            echo "</script>";
 //                         	$this->load->view('welcome_message');
 //                         }

 //                	endif;
	// }

    public function proses_login(){

    $this->form_validation->set_rules('f_no_induk', '_No_induk', 'required');
    $this->form_validation->set_rules('f_password', '_Password', 'required');

    if ($this->form_validation->run() == FALSE):

                    // $this->template->load('role','v_login');
                    echo "salah";
                    
                    else:
                                           
                           if($this->M_user->check_db()->num_rows()==1) // check emailnip.....
                            {
                                $db=$this->M_user->check_db()->row();// verifikasi pass + hash......

                                $plainpass=get_hash($this->input->post('f_password'));
                                $passdb=$db->role;
                                
                                if(hash_verified($this->input->post('f_password'),$db->password))
                                {
                                   // login berhasil buat session
                                    $id= array('name' => 'id_user','value' => $db->no_induk,(int)'expire' => time() + (86400 * 30),'path'   => '/','secure' => TRUE,'domain' => 'localhost',);
                                    $this->input->set_cookie($id); 
                                    
                                    $username= array('name' => 'username_user','value' => $db->nama,(int)'expire' => time() + (86400 * 30),'path'   => '/','secure' => TRUE,'domain' => 'localhost',);
                                    $this->input->set_cookie($username);
                             
                                    $logged_in= array('name' => 'logged_in_user','value' => 1,(int)'expire' => time() + (86400 * 30),'path'   => '/','secure' => TRUE,'domain' => 'localhost',);
                                    $this->input->set_cookie($logged_in); 

                                    redirect('supervisor','refresh');
                                
                                }
                                else{
                                    echo "<script>";
                                    echo 'alert ("No Induk atau Password salah");';
                                    echo "</script>";
                                    redirect('','refresh');
                                }
                               
                            }
                            else
                            {
                          
                                  echo "<script>";
                                  echo 'alert ("No Induk atau Password salah");';
                                  echo "</script>";
                                  redirect('','refresh');
                                  
                             }
                  endif;
                        }


	
}
