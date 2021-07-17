<?php

class Uploads_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_files() {
        $user_query='';
        if($_SESSION['ids']!=1){
            $user_id=$_SESSION['ids'];
           $user_query=" AND ( upload_by='$user_id' OR upload_to='$user_id' ) "; 
        }
        $query="SELECT   * from uploads where 1=1  $user_query ";
        $query = $this->db->query($query);
         $result = $query->result();
         return $result;
    }
     public function get_users() {
            $query="SELECT   name,id from user ";
        
        
         $query = $this->db->query($query);
         $result = $query->result();
         return $result;
    }
    
     public function save($param) {

          
        $data = array(
            'name' => trim($this->db->escape_str($param['name'])),
            'upload_by' => trim($this->db->escape_str($_SESSION['ids'])),
            'file_path' => $param['file_name'],
            'upload_to' => trim($this->db->escape_str($param['user'])) 
        );
        $this->db->insert('uploads', $data);
        $id = $this->db->insert_id();
        return $id;
       
 
    }
    public function get_file($id) {
         
        $query="SELECT   file_path,name,upload_to from uploads where id=$id";
        $query = $this->db->query($query);
         $result = $query->result();
         return $result[0];
    }
    public function check_edit_permission($id) {
        $_SESSION['ids'];
         $query="SELECT   upload_by from uploads where id=$id";
        $query = $this->db->query($query);
         $result = $query->result();
         if($result[0]->upload_by==$_SESSION['ids']){
             return true;
         }
        return false;
    }
    public function delete_file($id) {
         
        $id=trim($this->db->escape_str(base64_decode($id)));
        $Qry = "SELECT file_path FROM   uploads where id=$id ";
        $query = $this->db->query($Qry);
        $result = $query->result_array();
        
        if ($result) {
            if($result[0]['file_path']){
                unlink('./user_uploads/'.$result[0]['file_path']);
                return true;
            }
        }  
        
    }
     public function update($param) {
 
          
       $id=trim($this->db->escape_str(base64_decode($param['file_id'])));
        
        
        //            echo '<pre>';print_r($param['db_val_chapter']);exit;
          if(empty($param['file_name'])){
               
              $data = array(
            'name' => trim($this->db->escape_str($param['name'])),
            'upload_by' => trim($this->db->escape_str($_SESSION['ids'])),
            'upload_to' => trim($this->db->escape_str($param['user'])) 
        );
          }  else{
               
             $data = array(
             'name' => trim($this->db->escape_str($param['name'])),
            'upload_by' => trim($this->db->escape_str($_SESSION['ids'])),
             'file_path' => $param['file_name'],
            'upload_to' => trim($this->db->escape_str($param['user'])) 
        ); 
          }     
        
         
         
        
        
      //  $this->db->insert('', $data);
         if($this->db->update('uploads', $data, array('id' =>$id))){
           return 1;  
         }
       
 
    }
    
     

}
