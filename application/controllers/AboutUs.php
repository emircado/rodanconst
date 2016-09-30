<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data["page"] = "aboutus";

        $this->load->view('header', $data);
        $this->load->view('aboutus');
        $this->load->view('footer');
    }
}
