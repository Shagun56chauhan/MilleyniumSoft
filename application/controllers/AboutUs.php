<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutUs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); // Load URL Helper
    }


    public function index() {
        $this->load->view('aboutus');
    }
}
?>