<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary libraries, helpers, or models here
        $this->load->helper('url'); // Load URL Helper
    }

    public function index() {
        // Load the contact us view
        $this->load->view('contactus');
    }

    // public function submit() {
    //     // Handle form submission
    //     // Validate form data
    //     $this->form_validation->set_rules('name', 'Name', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('message', 'Message', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         // Validation failed, reload the contact us view with errors
    //         $this->load->view('contact_us');
    //     } else {
    //         // Validation passed, process the form data
    //         $name = $this->input->post('name');
    //         $email = $this->input->post('email');
    //         $message = $this->input->post('message');

    //         // You can now send an email, save to database, etc.
    //         // For example, sending an email:
    //         $this->load->library('email');
    //         $this->email->from($email, $name);
    //         $this->email->to('your_email@example.com');
    //         $this->email->subject('Contact Us Form Submission');
    //         $this->email->message($message);

    //         if ($this->email->send()) {
    //             // Email sent successfully
    //             $this->load->view('contact_success');
    //         } else {
    //             // Email failed to send
    //             $this->load->view('contact_failure');
    //         }
    //     }
    // }
}
?>