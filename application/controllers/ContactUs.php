<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('form_validation');
        $this->load->library('email');
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
            
            // form validated
            } else {
                $email_msg = "You received a message through the website Contact page.\n\nFrom:   ".
                            $name."\nEmail:   ".$email."\nPhone:   ".$phone."\n\nMessage:\n".$message;
            
                $this->email->from('contactus@rodanconstruction.com', 'Rodan Construction Contact Page');
                $this->email->to('dan@rodanconstruction.com');
                
                $this->email->subject('A new message from Rodan Construction Contact page');
                $this->email->message($email_msg);
            
                // email error
                if (! $this->email->send()) {
                    $data['status'] = 'error';
                    $data['err_type'] = 'email';
                
                // email sent
                } else {
                    $data['status'] = 'success';
                }
            }
        }
        // will only execute below if normal page access
        $this->load->view('header', $data);
        $this->load->view('contactus', $data);
        $this->load->view('footer', $data);
    }
}
