<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load URL Helper
    }

    public function index() {
        // Default method for this controller
        $this->load->view('service');
    }

    // Add other methods as needed
}
?>