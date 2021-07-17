<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('Users_model'); 
        $this->load->helper('url');
        $this->load->helper('email');
        $this->load->model('login_model');
        $this->load->library("session");
        $this->load->library('encrypt');
        //        $this->load->library('libmail');
        $this->load->library('form_validation');
        //        /$language = $this->get_language();
        $language = '';
       // $this->lang->load('login', $language);
    }

    public function index() {
  

        if ($this->session->logged_in == 1) {
            
            redirect('./uploads');
        }
        $data = array();
        
        $config = array(
            array(
                'field' => 'user_name',
                'label' => 'User Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'password',
                'label' => 'Password ',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() && $this->input->post()) {
          
            $password = $this->input->post('password');
              $return_data = $this->login_model->login($this->input->post('user_name'), $password);
             
            $data['error'] = '';
            if ($return_data) {
                if ($return_data[0]['status'] != 0 && $_SESSION['ids']==1) {
                 redirect('./users');
                } else {
              redirect('./uploads/');
                }
            } else {
                 
                $data['error'] = $this->lang->line('invalid_login');
                
            }
        }
        //         print_r($data);exit;
        $this->load->view('admin/login', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('./login');
    }

    
    
    public function changepassword($id) {
        // echo $id; exit;          
        if (isset($_POST['newpassword'])) {
            $passvalue = $_POST['newpassword'];
        } ELSE {
            $passvalue = '';
        }
        if (isset($_POST['newconfirmpassword'])) {
            $conpassvalue = $_POST['newconfirmpassword'];
        } ELSE {
            $conpassvalue = '';
        }
        if ($this->input->post()) {
            // echo'e';exit;
            $this->form_validation->set_rules('newpassword', $this->lang->line('password'), 'required');
            $this->form_validation->set_rules('newconfirmpassword', $this->lang->line('confirmpassword'), 'required|matches[newpassword]');
            if ($this->form_validation->run()) {
                // echo'success';
                if ($this->login_model->passwordchangeforfirstTime($this->input->post('newpassword'), $id)) {

                    $this->session->set_flashdata('msg', 'Password updated successfully');
                    redirect('./administrator/dashboard/dashboard');
                } else {
                    $this->session->set_flashdata('msg', 'Error occured. please try again later.');
                }
                //redirect('./administrator/dashboard/dashboard');
                //  $data['changes'] = 'changed';
            }
        }

        $data['passvalue'] = $passvalue;
        $data['conpassvalue'] = $conpassvalue;
        $this->load->view('changepassword', $data);
    }

}
