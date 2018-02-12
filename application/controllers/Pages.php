<?php

class Pages extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->data['base_url'] = $this->config->config['base_url'];
    }

    function index(){
        echo $this->data['base_url'];
        $this->load->view('index', $this->data);
    }

    function categories(){
        $this->load->view('categories', $this->data);
    }
}