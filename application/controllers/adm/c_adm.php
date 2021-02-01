<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_adm extends CI_Controller {
function __construct(){
	parent::__construct();
	 // cek login
		 if($this->session->userdata('status') != "login")
			 {
			 	$alert=$this->session->set_flashdata('alert', 'Anda belum Login');
			 	redirect();
			 }
}

		function get_ajax() {
        $list = $this->M_apil->get_datatables();
        $data = array();
        $no = @$_POST['start'];
        foreach ($list as $item) {
            $no++;
            $row = array();
            $row[] = $no.".";
            $row[] = $item->nop_gabung;
            $row[] = $item->nm_wp_sppt;
            $row[] = $item->alamat_wp;
            $row[] = $item->alamat_op;
            $row[] = $item->tarif;
              
            if ($item->stts == "Himbauan") {
              $row[] = '<div class="text-danger">'.$item->stts.'</div>';        
            }
            elseif ($item->stts == "Peringatan") {
              $row[] = '<div class="text-danger">'.$item->stts.'</div>';   
            }
            elseif ($item->stts == "Pemasangan Stiker") {
               $row[] = '<div class="text-danger">'.$item->stts.'</div>';   
            }
            elseif ($item->stts == "Stiker Terpasang") {
               $row[] = '<div class="text-success">'.$item->stts.'</div>';   
            }
            else{
            	$row[] = "";
            }
             
            /* */
            $row[] = " 
              <a class='btn btn-primary btn-xs' title='Edit' href='".base_url().'adm/c_adm/edit_pbb/'.$item->id_pbb."'><span class='glyphicon glyphicon-edit'></span></a>   
              <a class='btn btn-warning btn-xs' title='Hapus' href='".base_url().'adm/c_adm/apus_pbb/'.$item->id_pbb."''><span class='glyphicon glyphicon-remove'></span></a>   
              <a class='btn btn-success btn-xs' title='Print' href='".base_url().'adm/c_adm/cetak_pbb/'.$item->id_pbb."'><span class='glyphicon glyphicon-print'></span></a>
              <a class='btn btn-success btn-xs' title='Print To PDF' href='".base_url().'adm/c_adm/cetak_pdf_pbb/'.$item->id_pbb."'><span class='glyphicon glyphicon-file'></span></a>";
            $data[] = $row;
        }
        $output = array(
                    "draw" => @$_POST['draw'],
                    "recordsTotal" => $this->M_apil->count_all(),
                    "recordsFiltered" => $this->M_apil->count_filtered(),
                    "data" => $data,
                );
        // output to json format
        echo json_encode($output);
    }

	public function index()
	{
		$this->load->view('adm/header');
		$this->load->view('adm/dashboard');
		$this->load->view('adm/footer');
	}

	public function profil()
	{
		$this->load->view('adm/header');
		$this->load->view('adm/profil');
		$this->load->view('adm/footer');
	}

	function ganti_password_act()
	{
	    $pass_baru = $this->input->post('pass_baru');

	    	  $w = array('id_admin' => $this->session->userdata('id'));
	    		$where = array('id_admin' => $w);
		      $data = array(
		      	'password' => md5($pass_baru)
		      );

		      $this->M_apil->update_data('admin',$w,$data);
		      redirect(base_url().'adm/c_adm/index?Sukses');
    }
//<----------------------------------------------- Start Pajak Restoran   -------------------------------------------------->
	public function p_resto()
	{
		$data['p_resto'] = $this->M_apil->get_data('p_resto')->result();
		$this->load->view('adm/header');
		$this->load->view('adm/p_resto',$data);
		$this->load->view('adm/footer');
	}

	public function cetak_presto($id)	
	{
		$where = array('id_pr' => $id);
        $data['p_resto'] = $this->db->query("select * from p_resto where id_pr='$id'")->result();
		$this->load->view('adm/print_resto',$data);
	}

	public function cetak_pdf($id)	
	{
		$where = array('id_pr' => $id);
        $data['p_resto'] = $this->db->query("select * from p_resto where id_pr='$id'")->result();	
		//$this->load->view('adm/convert',$data);

	}

	public function plus_presto()
	{
		$nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	        $data = array(	
	          'no_pdr' => $nopd,
	          'nama' => $nama,
	          'alamat_pdr' => $alamat,
	          'stts' => $stts
	        );

	      $this->M_apil->insert_data($data,'p_resto');
          redirect(base_url().'adm/c_adm/p_resto');
	}

	public function edit_presto($id)
	{
		$where = array('id_pr' => $id);
        $data['p_resto'] = $this->db->query("select * from p_resto where id_pr='$id'")->result();
		$this->load->view('adm/header');
		$this->load->view('adm/edit_presto',$data);
		$this->load->view('adm/footer');
	}

	public function edit_presto_aksi($id)
	{
	    $nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	    	$where = array('id_pr' => $id);
	        $data = array(	
	          'no_pdr' => $nopd,
	          'nama' => $nama,
	          'alamat_pdr' => $alamat,
	          'stts' => $stts
	        );

          $this->M_apil->update_data('p_resto',$data,$where);
          redirect(base_url().'adm/c_adm/p_resto');		
	}

	public function apus_presto($id)
	{
		$where = array('id_pr' => $id);
        $this->M_apil->delete_data($where,'p_resto');
        redirect(base_url().'adm/c_adm/p_resto');
	}


//<------------------------------------------------ End Pajak Restoran ------------------------------------------------>

//<--------------------------------------------------- PAJAK HOTEL ------------------------------------------------------->
	public function p_hotel()
	{
		$data['p_hotel'] = $this->M_apil->get_data('p_hotel')->result();
		$this->load->view('adm/header');
		$this->load->view('adm/p_hotel',$data);
		$this->load->view('adm/footer');
	}

	public function cetak_photel()	
	{
		$data['p_hotel'] = $this->M_apil->get_data('p_hotel')->result();
		$this->load->view('adm/cetak_data-pelanggan',$data);
	}

	public function plus_photel()
	{
		$nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	        $data = array(	
	          'no_pdh' => $nopd,
	          'nama' => $nama,
	          'alamat_pdh' => $alamat,
	          'stts' => $stts
	        );

	      $this->M_apil->insert_data($data,'p_hotel');
          redirect(base_url().'adm/c_adm/p_hotel');
	}

	public function edit_photel($id)
	{
		$where = array('id_ph' => $id);
        $data['p_hotel'] = $this->db->query("select * from p_hotel where id_ph='$id'")->result();
		$this->load->view('adm/header');
		$this->load->view('adm/edit_photel',$data);
		$this->load->view('adm/footer');
	}

	public function edit_photel_aksi($id)
	{
	    $nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	    	$where = array('id_ph' => $id);
	        $data = array(	
	          'no_pdh' => $nopd,
	          'nama' => $nama,
	          'alamat_pdh' => $alamat,
	          'stts' => $stts
	        );

          $this->M_apil->update_data('p_hotel',$data,$where);
          redirect(base_url().'adm/c_adm/p_hotel');		
	}

	public function apus_photel($id)
	{
		$where = array('id_ph' => $id);
        $this->M_apil->delete_data($where,'p_hotel');
        redirect(base_url().'adm/c_adm/p_hotel');
	}

//<--------------------------------------------------------------- END Pajak Hotel ------------------------------------------------------>

//<----------------------------------------------------------------- Start PBB ---------------------------------------------------------->	
	public function p_pbb()
	{
		/*$data['pbb'] = $this->M_apil->get_data('p_pbb')->result();*/
		$this->load->view('adm/header');
		$this->load->view('adm/p_pbb');
		$this->load->view('adm/footer');
	}

	public function cetak_pbb($id)
	{
		$where = array('id_pbb' => $id);
        $data['p_pbb'] = $this->db->query("select * from p_pbb where id_pbb='$id'")->result();
		$this->load->view('adm/print_pbb',$data);

	        $data = array(
	          'id_pbb' => $id,
	          'stts' => 'Peringatan'
	        );

          $this->M_apil->update_data('p_pbb',$data,$where);
	}

	public function cetak_pdf_pbb($id)
	{
		$where = array('id_pbb' => $id);
        $data['p_pbb'] = $this->db->query("select * from p_pbb where id_pbb='$id'")->result();
		$this->load->view('adm/pbb_pdf',$data);
	}

	function plus_pbb()
	{

	    $nopg = $this->input->post('nopg');
	    $nama = $this->input->post('nama');
	    $alamat_wp = $this->input->post('alamat_wp');
	    $alamat = $this->input->post('alamat');
	    $tarif = $this->input->post('tarif');
	    $stts = $this->input->post('stts');

	        $data = array(	
	          'nop_gabung' => $nopg,
	          'nm_wp_sppt' => $nama,
	          'alamat_wp' => $alamat_wp,
	          'alamat_op' => $alamat,
	          'tarif' => $tarif,
	          'stts' => $stts
	        );

	      $this->M_apil->insert_data($data,'p_pbb');
          redirect(base_url().'adm/c_adm/p_pbb');        
	}

	public function edit_pbb($id)
	{
		$where = array('id_pbb' => $id);
        $data['pbb'] = $this->db->query("select * from p_pbb where id_pbb='$id'")->result();
		$this->load->view('adm/header');
		$this->load->view('adm/edit_pbb',$data);
		$this->load->view('adm/footer');
	}

	public function edit_pbb_aksi($id)
	{
		$id_pbb = $this->input->post('id_pbb');
	    $nopg = $this->input->post('nopg');
	    $nama = $this->input->post('nama');
	    $alamat_wp = $this->input->post('alamat_wp');
	    $alamat = $this->input->post('alamat');
	    $tarif = $this->input->post('tarif');
	    $stts = $this->input->post('stts');

	    	$where = array('id_pbb' => $id);
	        $data = array(
	          'id_pbb' => $id_pbb,	
	          'nop_gabung' => $nopg,
	          'nm_wp_sppt' => $nama,
	          'alamat_wp' => $alamat_wp,
	          'alamat_op' => $alamat,
	          'tarif' => $tarif,
	          'stts' => $stts
	        );

          $this->M_apil->update_data('p_pbb',$data,$where);
          redirect(base_url().'adm/c_adm/p_pbb');		
	}

	public function apus_pbb($id)
	{
		$where = array('id_pbb' => $id);
        $this->M_apil->delete_data($where,'p_pbb');
        redirect(base_url().'adm/c_adm/p_pbb');
	}
//<!----------------------------------------------------------------- End PBB ------------------------------------------------------>
	
//<----------------------------------------------------- Start Parkir --------------------------------------------------------- 
	public function p_parkir()
	{
		$data['p_parkir'] = $this->M_apil->get_data('p_parkir')->result();
		$this->load->view('adm/header');
		$this->load->view('adm/p_parkir',$data);
		$this->load->view('adm/footer');
	}

	public function cetak_pparkir()	
	{
		$data['p_hotel'] = $this->M_apil->get_data('p_hotel')->result();
		$this->load->view('adm/cetak_data-pelanggan',$data);
	}

	public function plus_pparkir()
	{
		$nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	        $data = array(	
	          'no_pdp' => $nopd,
	          'nama' => $nama,
	          'alamat_pdp' => $alamat,
	          'stts' => $stts
	        );

	      $this->M_apil->insert_data($data,'p_parkir');
          redirect(base_url().'adm/c_adm/p_parkir');
	}

	public function edit_pparkir($id)
	{
		$where = array('id_pp' => $id);
        $data['p_parkir'] = $this->db->query("select * from p_parkir where id_pp='$id'")->result();
		$this->load->view('adm/header');
		$this->load->view('adm/edit_pparkir',$data);
		$this->load->view('adm/footer');
	}

	public function edit_pparkir_aksi($id)
	{
	    $nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	    	$where = array('id_pp' => $id);
	        $data = array(	
	          'no_pdp' => $nopd,
	          'nama' => $nama,
	          'alamat_pdp' => $alamat,
	          'stts' => $stts
	        );

          $this->M_apil->update_data('p_parkir',$data,$where);
          redirect(base_url().'adm/c_adm/p_parkir');		
	}

	public function apus_pparkir($id)
	{
		$where = array('id_pp' => $id);
        $this->M_apil->delete_data($where,'p_parkir');
        redirect(base_url().'adm/c_adm/p_parkir');
	}

//<----------------------------------------- End Parkir ------------------------------->>>>
//<------- Start Hiburan -----------------------------------
public function p_hiburan()
	{
		$data['p_hiburan'] = $this->M_apil->get_data('p_hiburan')->result();
		$this->load->view('adm/header');
		$this->load->view('adm/p_hiburan',$data);
		$this->load->view('adm/footer');
	}

	public function cetak_phiburan()	
	{
		$data['p_hotel'] = $this->M_apil->get_data('p_hotel')->result();
		$this->load->view('adm/cetak_data-pelanggan',$data);
	}

	public function plus_phiburan()
	{
		$nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	        $data = array(	
	          'no_pdhb' => $nopd,
	          'nama' => $nama,
	          'alamat_pdhb' => $alamat,
	          'stts' => $stts
	        );

	      $this->M_apil->insert_data($data,'p_hiburan');
          redirect(base_url().'adm/c_adm/p_hiburan');
	}

	public function edit_phiburan($id)
	{
		$where = array('id_phb' => $id);
        $data['p_hiburan'] = $this->db->query("select * from p_hiburan where id_phb='$id'")->result();
		$this->load->view('adm/header');
		$this->load->view('adm/edit_phiburan',$data);
		$this->load->view('adm/footer');
	}

	public function edit_phiburan_aksi($id)
	{
	    $nopd = $this->input->post('nopd');
	    $nama = $this->input->post('nama');
	    $alamat = $this->input->post('alamat');
	    $stts = $this->input->post('stts');

	    	$where = array('id_phb' => $id);
	        $data = array(	
	          'no_pdhb' => $nopd,
	          'nama' => $nama,
	          'alamat_pdhb' => $alamat,
	          'stts' => $stts
	        );

          $this->M_apil->update_data('p_hiburan',$data,$where);
          redirect(base_url().'adm/c_adm/p_hiburan');		
	}

	public function apus_phiburan($id)
	{
		$where = array('id_phb' => $id);
        $this->M_apil->delete_data($where,'p_hiburan');
        redirect(base_url().'adm/c_adm/p_hiburan');
	}

//<------- End Hiburan -----------------------------------

	function logout(){
	$this->session->set_flashdata('alert', 'Anda Belum mengisi Username
			atau Password');	
    $this->session->sess_destroy();
    redirect();
  }

}	