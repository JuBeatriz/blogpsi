<?php

class Home extends CI_controller{

    public function index (){
        $this->load->view('cabecalho');
        $this->load->view('menu_post');
        $this->load->view('conteudo');
    }

}

?>