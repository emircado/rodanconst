<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data["page"] = "gallery";

        $this->load->view('header', $data);
        $this->load->view('gallery');
        $this->load->view('footer');
    }
}
