<?php
class Member{
    protected $_ci;
    
    function __construct(){
        $this->_ci = &get_instance();
    }
    
  function utama($content, $data = NULL){

        $data['menu'] = $this->_ci->load->view('member/menu', $data, TRUE);
        $data['header'] = $this->_ci->load->view('member/header', $data, TRUE);
        $data['konten'] = $this->_ci->load->view($content, $data, TRUE);
        $data['footer'] = $this->_ci->load->view('member/footer', $data, TRUE);
        
        $this->_ci->load->view('member/index', $data);
    }
}