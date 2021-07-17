<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('Users_model'); 
        $this->load->helper('url');
        $this->load->helper('email');
        $this->load->model('uploads_model');
        $this->load->library("session");
        $this->load->library('encrypt');
         $this->load->library('form_validation');
         $language = '';
         
        if (empty($this->session->logged_in)) {
            redirect('./login/');
        }
    }

    
    public function index() {

        $data['user_files'] = $this->uploads_model->get_files();
        $data['menu_active'] = 1;

        $this->load->view('admin/uploads', $data);
    }

    public function add() {
        $data['get_users'] = $this->uploads_model->get_users();
//     echo '<pre>'; print_r($data['get_users']);exit;
        $data['menu_active'] = 1;


        $this->load->view('admin/add_files', $data);
    }

    public function save() {

        $data['get_users'] = $this->uploads_model->get_users();
        $data['menu_active'] = 1;

        $uplod_response = $this->do_upload($_FILES);
        if ($uplod_response == 0) {
            $_POST['file_name'] = '';
        } else {
            $_POST['file_name'] = $uplod_response;
        }

        $file_id = $this->uploads_model->save($_POST);
        if ($file_id > 0) {
            $this->session->set_flashdata('item', '<div class="alert alert-success text-left" id="successMessage"> File Uploaded    </div>');
        } else {
            $this->session->set_flashdata('item', '<div class="alert alert-error text-left" id="successMessage"> Something went wrong    </div>');
        }
        redirect('uploads/add', $data);
    }

    /*
     * Upload files 
     */
    
    public function do_upload($POST) {
 
        $ext = pathinfo($POST["userfile"]['name'], PATHINFO_EXTENSION);
        $new_name = time() . '.' . $ext;
        $config['file_name'] = $new_name;
        $config['upload_path'] = './user_uploads';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx';
        $config['max_size'] = 10000;
        $config['max_width'] = 10240;
        $config['max_height'] = 7680;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            return 0;
        } else {
            return $new_name;
        }
    }

    public function view() {
        $data['menu_active'] = 1;
        $id = $this->uri->segment(3);
        $get_file = $this->uploads_model->get_file(base64_decode($id));

        $supported_image = array(
            'gif',
            'jpg',
            'jpeg',
            'png'
        );

         $src_file_name = $get_file->file_path;
        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
        if (in_array($ext, $supported_image)) {
            $data['image_format'] = 1;
        } else {
            $data['image_format'] = 0;
        }
        $data['get_file'] = $get_file;
        
        $this->load->view('admin/view_file', $data);
    }

    public function edit() {
         $data['menu_active'] = 1;
        $id = $this->uri->segment(3);
         $data['get_users'] = $this->uploads_model->get_users();
         $data['id'] =$id;
          $get_file = $this->uploads_model->get_file(base64_decode($id));

        $supported_image = array(
            'gif',
            'jpg',
            'jpeg',
            'png'
        );

         $src_file_name = $get_file->file_path;
        $ext = strtolower(pathinfo($src_file_name, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
        if (in_array($ext, $supported_image)) {
            $data['image_format'] = 1;
        } else {
            $data['image_format'] = 0;
        }
        $data['get_file'] = $get_file;
        if($this->check_edit_permission($id)){
            
           $this->load->view('admin/edit_uploads', $data);
          
        } else {
             echo 'error';;exit;
           $this->session->set_flashdata('item', '<div class="alert alert-danger text-left" id="successMessage"> No permission to view this page </div>'); 
        }
         
 
    }
    /*
     * Check the user has permission to view this files      */
    
    public function check_edit_permission($id) {
          return $this->uploads_model->check_edit_permission(base64_decode($id));
    }
    
      public function update() { 
     
        $_POST['file_name']=0;
        if($_POST['change_file']==1){
             $this->uploads_model->delete_file($_POST['file_id']);
           
              $uplod_response=$this->do_upload($_FILES); 
            
              $_POST['file_name']=$uplod_response;
       }
         ;
        $file_id=$this->uploads_model->update($_POST);
       if ($file_id > 0) {
            $this->session->set_flashdata('item', '<div class="alert alert-success text-left" id="successMessage"> File Uploaded    </div>');
        } else {
            $this->session->set_flashdata('item', '<div class="alert alert-danger text-left" id="successMessage"> Something went wrong    </div>');
        }
        redirect('/uploads/edit/'.$_POST['file_id']);
    }

}
