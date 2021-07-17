<?php

class Login_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    /*
     * Login Model
     * @input username
     * @input password 
     */
  public function login($username, $password) {
         $username = trim($this->db->escape_str($username));
        $password = trim($this->db->escape_str($password));
        $encryptedpass = sha1($password);
         
          $userQry = "SELECT  * FROM   user where (email='$username' )   and password='" . $encryptedpass . "' ";


        $query = $this->db->query($userQry);
        $result = $query->result();
 

        if ($query->num_rows() > 0) {
            $newdata = array(
                'email_id' => $result[0]->email,
                 'name' => $result[0]->name,
                'ids' => $result[0]->id,
                'type' => $result[0]->type,
                 'status' => $result[0]->status,
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            $result = $query->result_array();
          
            //return TRUE;
            return $result;
        } else {
            return FALSE;
        }
    }

}
