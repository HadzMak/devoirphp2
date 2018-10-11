<?php

class Ctrl_Technologie extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Technologie');
    }
    public function index()
    {
        $data['lesTechnologie'] = $this->Model_Technologie->getAllTechnologie();
        $this->load->view('AfficherTechnologie', $data);
    }


 function AfficherConferences()
{
    $data['lesTechnologie'] = $this->Model_Technologie->getAllTechnologie();
    $this->load->view('AfficherConferences', $data);
}
}  
    ?>
  