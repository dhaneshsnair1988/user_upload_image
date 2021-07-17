<?php

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function add_user($param) {
              $data = array(
            'name' => trim($this->db->escape_str($param['name'])),
            'address' => trim($this->db->escape_str($param['address'])),
              'phone' => trim($this->db->escape_str($param['phone'])),
            'email' => trim($this->db->escape_str($param['email'])),
            'status' => trim($this->db->escape_str($param['status'])),
            'password' => sha1(trim($this->db->escape_str($param['password']))),
            'date_added' => date("Y-m-d H:i:s"),
            'type' => 2  
        );
        $this->db->insert('user', $data);
        return true;
    }
    public function get_user_list() {
        $query="SELECT   * from user where type=2";
        
        
         $query = $this->db->query($query);
        $result = $query->result();
//echo '<pre>';print_r($result);exit;
        return $result;
    }
     public function get_user($id) {
          $query="SELECT   * from user where id='$id'";
        
        
         $query = $this->db->query($query);
        $result = $query->result(); 
        return $result[0];
    }
    
    public function update_user($param) {
        
        if(empty($param['password'])){
           
        $data = array(
            'name' => trim($this->db->escape_str($param['name'])),
            'address' => trim($this->db->escape_str($param['address'])),
             'phone' => trim($this->db->escape_str($param['phone'])),
            'email' => trim($this->db->escape_str($param['email'])),
            'status' => trim($this->db->escape_str($param['status'])),
            'date_updated' => date("Y-m-d H:i:s") 
        );
        }else{
              $data = array(
            'name' => trim($this->db->escape_str($param['name'])),
            'address' => trim($this->db->escape_str($param['address'])),
             'phone' => trim($this->db->escape_str($param['phone'])),
            'email' => trim($this->db->escape_str($param['email'])),
            'status' => trim($this->db->escape_str($param['status'])),
            'password' => sha1(trim($this->db->escape_str($param['password']))),
            'date_updated' => date("Y-m-d H:i:s") 
        );
        }
         
         $this->db->update('user', $data, array('id' =>trim($this->db->escape_str( $param['user_id'])))); 
    }

    

}
