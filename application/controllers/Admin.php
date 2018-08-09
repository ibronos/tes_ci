<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
	}

	public function index()
	{
		$this->load->view('v_login_admin');
	}

	public function view($halaman='v_home')
	{
		$data['tmp']=$this->M_admin->get_user();

		if ( ! file_exists(APPPATH.'views/pages_admin/'.$halaman.'.php'))
        {
                show_404();
        }
		$this->load->view('templates/v_header_admin');
		$this->load->view('pages_admin/'.$halaman,$data);
		$this->load->view('templates/v_footer');
	}

	public function proses_daftar() { //add user
	  $this->form_validation->set_rules('f_no_induk', 'No_induk', 'required');
    $this->form_validation->set_rules('f_nama', 'Nama', 'required');
    $this->form_validation->set_rules('f_email', 'Email', 'required');
    $this->form_validation->set_rules('f_no_hp', 'No_hp', 'required');
    $this->form_validation->set_rules('f_password', 'Password', 'required');
    $this->form_validation->set_rules('f_role', 'Role', 'required');

                if ($this->form_validation->run() === FALSE):
                	 // echo '<script>';
                  //    echo 'alert ("register gagal")';
                  //    echo '</script>';
                	 // $this->load->view('v_register');
                	
                	else:

                    if($this->M_admin->register())
                         {
                            // $this->session->set_flashdata('pesan','Pendaftaran berhasil, silahkan login.');
                            // redirect('','refresh');
                            echo "<script>";
                            echo 'alert ("register berhasil")';
                            echo "</script>";
                         	  redirect('admin/v_home','refresh');
                         }
                	endif;
	}

  public function proses_update_password()
  {
      $this->form_validation->set_rules('f_no_induk', 'No_induk', 'required');
      $this->form_validation->set_rules('f_password', 'Password', 'required');
      
      if ($this->form_validation->run() === FALSE):
         echo '<script>';
         echo 'alert ("update gagal")';
         echo '</script>';
         redirect('admin/v_home','refresh');
        
        else:

          if($this->M_admin->update_password_user())
               {
                  // $this->session->set_flashdata('pesan','Pendaftaran berhasil, silahkan login.');
                  // redirect('','refresh');
                  echo "<script>";
                  echo 'alert ("update berhasil")';
                  echo "</script>";
                  redirect('admin/v_home','refresh');
               }
        endif;
   
  }

  public function view_update_password($no_induk)
  {
      $data['tmp_user']=$this->M_admin->get_user_id($no_induk);
      $this->load->view('templates/v_header_admin');
      $this->load->view('pages_admin/v_update_password',$data);
      $this->load->view('templates/v_footer');
  }

  public function proses_hapus($no_induk)
  {
            if($this->M_admin->hapus_user($no_induk))
           {
              echo "<script>";
              echo 'alert ("hapus berhasil")';
              echo "</script>";
              redirect('admin/v_home','refresh');
           }
           else {
             echo "salahhhhhh";
           }
          
  }

  public function view_hapus($no_induk)
  {
      
      $data['tmp_user']=$this->M_admin->get_user_id($no_induk);
      $this->load->view('templates/v_header_admin');
      $this->load->view('pages_admin/v_hapus_user',$data);
      $this->load->view('templates/v_footer');
  }

  public function view_detail($no_induk)
  {
      $data['tmp_user']=$this->M_admin->get_user_id($no_induk);
      $this->load->view('templates/v_header_admin');
      $this->load->view('pages_admin/v_detail_user',$data);
      $this->load->view('templates/v_footer');
  }

  public function view_update($no_induk)
  {
      $data['tmp_user']=$this->M_admin->get_user_id($no_induk);
      $this->load->view('templates/v_header_admin');
      $this->load->view('pages_admin/v_update_user',$data);
      $this->load->view('templates/v_footer');
  }

	public function proses_update()
	{
		  $this->form_validation->set_rules('f_no_induk', 'No_induk', 'required');
	    $this->form_validation->set_rules('f_nama', 'Nama', 'required');
	    $this->form_validation->set_rules('f_email', 'Email', 'required');
	    $this->form_validation->set_rules('f_no_hp', 'No_hp', 'required');
	    $this->form_validation->set_rules('f_role', 'Role', 'required');

      if ($this->form_validation->run() === FALSE):
         echo '<script>';
         echo 'alert ("update gagal")';
         echo '</script>';
         redirect('','refresh');
        
        else:

          if($this->M_admin->update_user())
               {
                  // $this->session->set_flashdata('pesan','Pendaftaran berhasil, silahkan login.');
                  // redirect('','refresh');
                  echo "<script>";
                  echo 'alert ("update berhasil")';
                  echo "</script>";
                  redirect('admin/v_home','refresh');
               }
        endif;
   
	}

	public function proses_login_admin(){

    $this->form_validation->set_rules('f_un', '_Un', 'required');
    $this->form_validation->set_rules('f_pass', '_Password', 'required');

    if ($this->form_validation->run() == FALSE):

                    // $this->template->load('role','v_login');
                    echo "salah!!";
                    
                    else:
                          
                           if($this->M_admin->check_db()->num_rows()==1) // check username.....
                            {
                                $db=$this->M_admin->check_db()->row();// verifikasi pass + hash......
                                $plainpass=$this->input->post('f_pass');

                                
                                if( $plainpass == $db->password)
                                {

                                   // login berhasil buat session
                                    // $session = array('is_login_admin' => TRUE,
                                    //                  'is_nama'=>$db->username,
                                    //                  'is_id'=>$db->id_admin);
                                    // $this->session->set_userdata($session);
                                    // redirect('admin/v_home','refresh');
                                    

                                      $id= array('name' => 'id_admin','value' => $db->id_admin,(int)'expire' => time() + (86400 * 30),'path'   => '/',);
                                      $this->input->set_cookie($id); 
                                      
                                      $username= array('name' => 'username_admin','value' => $db->username,(int)'expire' => time() + (86400 * 30),'path'   => '/',);
                                      $this->input->set_cookie($username);
                               
                                      $logged_in= array('name' => 'logged_in','value' => 1,(int)'expire' => time() + (86400 * 30),'path'   => '/',);
                                      $this->input->set_cookie($logged_in); 

                                      redirect('admin/v_home','refresh');

                                }
                                else
                                {
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


    public function proses_logout_admin()
	 {
		// $this->session->unset_userdata('is_login_admin');
		// $this->session->unset_userdata('is_nama');
		// $this->session->unset_userdata('is_id');
		// session_destroy();

      $id = array('name' => 'id_admin','value' => '',(int)'expire' => 0,'path'   => '/',); 
      delete_cookie($id); 

      $username = array('name' => 'username_admin','value' => '',(int)'expire' => 0,'path'   => '/',); 
      delete_cookie($username); 

      $logged_in = array('name' => 'logged_in','value' => '',(int)'expire' => 0,'path'   => '/',); 
      delete_cookie($logged_in);

		  redirect('admin','refresh');
	 }

	


}
