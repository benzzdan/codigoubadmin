<?php
class Admin_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }


    public function login($username, $password){

//prepares the db query
        $this->db->where('username', $username);
        $this->db->where('password', $password);
//executes the get to get the user from the usuarios table
        $result = $this->db->get('usuarios');

//if it matches 1, returns the user id else false
        if($result->num_rows() == 1){
            return $result->row(0)->id;
        }else {
            return false;
        }
    }

    public function getAdmin(){

        $query = $this->db->get('usuarios');
        return $query->row();

    }


    public function chg_passwd() {
        $data = array(
            "password" =>  md5($this->input->post('password'))
        );
        return $this->db->update('usuarios', $data);
        
    }
}