<?php
class Home extends CI_Controller {
    public function index (){

     $data['postagens']=$this->db->get('postagens')->result();   

        $this->load->view('cabecalho');
        $this->load->view('menu_post', $data);
        $this->load->view('conteudo');

    }
}