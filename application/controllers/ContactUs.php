<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["page"] = "contactus";
        $data["status"] = "na";

        $this->form_validation->set_rules('contact-name', 'Name', 'trim|required');
        $this->form_validation->set_rules('contact-email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('contact-phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('contact-message', 'Message', 'trim|required');

        // for contact us form submit
        if ($this->input->post() != NULL) {
            $name = $this->input->post('contact-name');
            $email = $this->input->post('contact-email');
            $phone = $this->input->post('contact-phone');
            $message = $this->input->post('contact-message');
            
            // form error
            if ($this->form_validation->run() == FALSE) {
                $data['status'] = 'error';
            
            // form success
            } else {
                $data['status'] = 'success';
            }

        }
        // will only execute below if normal page access
        $this->load->view('header', $data);
        $this->load->view('contactus', $data);
        $this->load->view('footer', $data);
    }
}
