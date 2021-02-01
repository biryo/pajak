<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class M_apil extends CI_Model
{

    // start datatables
    var $column_order = array(null, 'nop_gabung', 'nm_wp_sppt', 'alamat_wp', 'alamat_op', 'tarif', 'stts',null); //set column field database for datatable orderable
    var $column_search = array('nop_gabung', 'nm_wp_sppt', 'alamat_wp', 'alamat_op', 'tarif', 'stts'); //set column field database for datatable searchable
    var $order = array('nop_gabung' => 'asc'); // default order
 
    private function _get_datatables_query() {
        //$this->db->select('p_item.*, p_category.name as category_name, p_unit.name as unit_name');
        $this->db->select('*');
        $this->db->from('p_pbb');

        $i = 0;
        foreach ($this->column_search as $item) { // loop column
            if(@$_POST['search']['value']) { // if datatable send POST for search
                if($i===0) { // first loop
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) { // here order processing
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        }  else if(isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    function get_datatables() {
        $this->_get_datatables_query();
        if(@$_POST['length'] != -1)
        $this->db->limit(@$_POST['length'], @$_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
    function count_filtered() {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
    function count_all() {
        $this->db->from('p_pbb');
        return $this->db->count_all_results();
    }
    // end datatables


  function edit_data($where,$table){
    return $this->db->get_where($table,$where);
  }

  function get_data($table){
    return $this->db->get($table);
  }

  function insert_data($data,$table){
    $this->db->insert($table,$data);
  }

  function update_data($table,$data,$where){
    $this->db->update($table,$data,$where);
  }

  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function find($where,$table)
  {
    $hasil = $this->db->where('kode',$where)
             ->limit(1)
             ->get($table);
      if($hasil->num_rows() > 0)
      {
        return $hasil->row();
      } 
      else
      {
        return array();
      }      
  }

  public function kosongkan_data($table)
  {
    return $this->db->truncate($table);
  }

   public function kode_otomatis_plnggn()
  {
    $this->db->select('right(id_anggota,3) as kode',false);
    $this->db->order_by('id_anggota','desc');

    $this->db->limit(1);
    $query=$this->db->get('anggota');

    if($query->num_rows()<>0)
    {
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }
    
    else
    {
      $kode=1;
    }

    $date= date(ymd) ;
    $kodemax=str_pad($kode,3,"0",STR_PAD_LEFT);
    $kodejadi='PLGGN'.$date.$kodemax;

    return $kodejadi;
  }

  public function kode_otomatis_byr()
  {
    $this->db->select('right(kd_byr,3) as kode',false);
    $this->db->order_by('kd_byr','desc');

    $this->db->limit(1);
    $query=$this->db->get('pembayaran');

    if($query->num_rows()<>0)
    {
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }
    
    else
    {
      $kode=1;
    }

    $date= date('ymd') ;
    $kodemax=str_pad($kode,3,"0",STR_PAD_LEFT);
    $kodejadi='BYR'.$date.$kodemax;

    return $kodejadi;
  }

  public function kode_otomatis_trx()
  {
    $this->db->select('right(kd_trx,3) as kode',false);
    $this->db->order_by('kd_trx','desc');

    $this->db->limit(1);
    $query=$this->db->get('trx');

    if($query->num_rows()<>0)
    {
      $data=$query->row();
      $kode=intval($data->kode)+1;
    }
    
    else
    {
      $kode=1;
    }

    $date= date('ymd') ;
    $kodemax=str_pad($kode,3,"0",STR_PAD_LEFT);
    $kodejadi='TRX'.$date.$kodemax;

    return $kodejadi;
  }


}
 ?>
