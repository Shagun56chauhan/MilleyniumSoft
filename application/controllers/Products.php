<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models, libraries, etc.
        $this->load->helper('url'); // Load URL Helper
    }

    public function index() {
        // Code for the default method
        $this->load->view('products');
    }

    // public function view($id) {
    //     // Code to view a specific product
    //     $data['product'] = $this->product_model->get_product($id);
    //     $this->load->view('products/view', $data);
    // }

    // public function create() {
    //     // Code to create a new product
    //     if ($this->input->post()) {
    //         // Handle form submission
    //         $this->product_model->create_product($this->input->post());
    //         redirect('products');
    //     } else {
    //         $this->load->view('products/create');
    //     }
    // }

    // public function edit($id) {
    //     // Code to edit an existing product
    //     if ($this->input->post()) {
    //         // Handle form submission
    //         $this->product_model->update_product($id, $this->input->post());
    //         redirect('products');
    //     } else {
    //         $data['product'] = $this->product_model->get_product($id);
    //         $this->load->view('products/edit', $data);
    //     }
    // }

    // public function delete($id) {
    //     // Code to delete a product
    //     $this->product_model->delete_product($id);
    //     redirect('products');
    // }
}
?>