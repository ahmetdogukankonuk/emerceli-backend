<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if(!$this->session->userdata('lang')){
            $dil=$this->session->set_userdata('lang', 'tr');
        }

        $dil=$this->session->userdata('lang');
        
        $this->lang->load($dil,$dil);
        
    }

}