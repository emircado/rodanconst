<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');

        $this->load->library('form_validation');
        $this->load->library('email');

        $config['protocol'] = 'smtp';
        //$config['mailpath'] = '/usr/sbin/sendmail';
        $config['smtp_host'] = 'ssl://mail.supremecluster.com';
        $config['smtp_user'] = 'contactus@rodanconstruction.com';
        $config['smtp_pass'] = 'xxxx'; //edit for production
        $config['smtp_port'] = 465; 
        $config['smtp_timeout'] = 5;
        $config['wordwrap'] = TRUE;
        $config['wrapchars'] = 76;
        $config['mailtype'] = 'text';
        $config['charset'] = 'utf-8';
        $config['validate'] = FALSE;
        $config['priority'] = 3;
        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";
        $config['bcc_batch_mode'] = FALSE;
        $config['bcc_batch_size'] = 200;

        $this->email->initialize($config);
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
                $data['err_type'] = 'form';
            
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
