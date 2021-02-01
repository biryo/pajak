<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username = $this->input->post('admin_username');
		$password = $this->input->post('admin_password');
		
			$where = array('username'=>$username, 'password'=>md5($password));
			$data = $this->M_apil->edit_data($where,'user');
			$d = $this->M_apil->edit_data($where,'user')->row();
			$cek = $data->num_rows();

			if($cek > 0)
			{
				$session = array('id' => $data->id_user,'nama' => $data->nama,'status' =>'login');				
				$this->session->set_userdata($session);
				redirect(base_url().'adm/c_adm');
			}
  
			else
			{			 
				 $this->session->set_flashdata('alert', 'Login gagal! Username atau password salah.');
				 redirect();
			}		
	}
}
