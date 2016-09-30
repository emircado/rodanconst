<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data["page"] = "contactus";

        // for normal page access
        if ($this->input->post() == NULL) {
            $this->load->view('header', $data);
            $this->load->view('contactus');
            $this->load->view('footer');
        // for contact us form submit
        } else {
            $name = $this->input->post('contact-name');
            $email = $this->input->post('contact-email');
            $phone = $this->input->post('contact-phone');
            $message = $this->input->post('contact-message');

            echo "good";
        }
    }
}
