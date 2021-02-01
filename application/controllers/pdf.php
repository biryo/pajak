<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function cetak_pdf($id)	
	{
		$where = array('id_pr' => $id);
        $data['p_resto'] = $this->db->query("select * from p_resto where id_pr='$id'")->result();	
		$this->load->view('adm/convert',$data);
	}

	public function cetak_presto($id)	
	{
		$where = array('id_pr' => $id);
        $data['p_resto'] = $this->db->query("select * from p_resto where id_pr='$id'")->result();
		$this->load->view('adm/print_resto',$data);
	}
}
