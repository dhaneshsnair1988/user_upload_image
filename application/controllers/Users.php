<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('Users_model'); 
        $this->load->helper('url');
        $this->load->helper('email');
        $this->load->model('user_model');
        $this->load->library("session");
        $this->load->library('encrypt');
        //        $this->load->library('libmail');
        $this->load->library('form_validation');
        //        /$language = $this->get_language();
        $language = '';
        // $this->lang->load('login', $language);
        if (empty($this->session->logged_in)) {
            redirect('./login/');
        }
        if ($_SESSION['ids'] != 1) {
            redirect('/');
        }
    }

    /*
     * List Users
     */

    public function index() {
        $data['get_user_list'] = $this->user_model->get_user_list();
        $data['menu_active'] = 2;
        $this->load->view('admin/user_list', $data);
    }

    /*
     * Add Users
     */

    public function add() {
        $data['menu_active'] = 2;
        $this->load->view('admin/user_add', $data);
    }

    /*
     * Edit Users
     */

    public function edit() {
        $user_id = $this->uri->segment(3);
        $data['get_guest_details'] = $this->user_model->get_user($user_id);
        $data['user_id'] = $user_id;
        $data['menu_active'] = 2;

        $this->load->view('admin/user_edit', $data);
    }

    /*
     * Save Users
     */
    
    public function save() {
        $this->user_model->add_user($_POST);
        redirect('./users');
    }

    /*
     * Edit Update
     */
    public function update() {
        $this->user_model->update_user($_POST);
        redirect('./users');
    }

}
